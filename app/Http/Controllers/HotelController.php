<?php

namespace App\Http\Controllers;

use App\kindsHotel;
use App\Photo;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

class HotelController extends Controller
{
  
  /**
   * ActivityController constructor.
   */
  public function __construct(){
    $this->middleware('auth')->except('show');
  }
  
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(){
    //
    $user = User::find(Auth::user()->id);
    
    if($user->isAdmin()){
      $packages = Product::where('type', 2)->paginate(10);
    }else {
      $packages = Product::where('type', 2)->wherein('id', explode(',', $user->hotel))->paginate(10);
    }
    
    
    return view('admin.hotels.hotels_index', compact('packages'));
  }
  
  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create(){
    //
    $kindshotel = kindsHotel::all();
    return view('admin.hotels.hotels_create', compact('kindshotel'));
  }
  
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request $request
   *
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request){
    //
    $this->validate($request, ['slug_url' => 'unique:products',]);
    
    
    $activity = Product::create(['tittle' => $request->tittle, 'slug_url' => str_slug($request->slug_url, '-'), 'meta_description' => $request->meta_description, 'keywords' => $request->keywords, 'status' => $request->status, 'local' => $request->local, 'itinerary' => $request->itinerary, 'include' => $request->include, 'suggestion' => $request->suggestion, 'description' => $request->description, 'short_description' => $request->short_description, 'city_id' => $request->city_id, 'type' => 2,]);
    
    $kindshotel = collect($request->kindshotel);
    
    
    //descartamos los kindshotel que tengan cantidad 0
    foreach($kindshotel as $key => $item){
      if($item['quantity'] == 0){
        $kindshotel->pull($key);
      }
    }
    
    
    //sincronizamos los tipos de cama con el hotel
    Product::find($activity->id)->kindsHotel()->sync($kindshotel->toArray());
    
    Product::find($activity->id)->features()->attach($request->features);
    
    if($request->file('img')){
      foreach($request->file('img') as $key => $img){
        $path = 'img/hotels/' . str_random(10) . '.png';
        Image::make($img)->fit(1200, 600)->save($path, 50);
        Photo::create(['product_id' => $activity->id, 'img' => $path, 'order' => $key,]);
      }
    }
    
    Session::flash('mensaje', 'Hotel creado con exito');
    
    return redirect('admin/hotels');
  }
  
  /**
   * Display the specified resource.
   *
   * @param  int $id
   *
   * @return \Illuminate\Http\Response
   */
  public function show($url){
    //
    $item = Product::where('slug_url', $url)->firstOrFail();
    Session::put('url', 'hotel');
    
    return view('app.product-item', compact('item'));
  }
  
  /**
   * Show the form for editing the specified resource.
   *
   * @param  int $id
   *
   * @return \Illuminate\Http\Response
   */
  public function edit($id){
    //
    $package = Product::with('photos', 'kindsHotel')->whereId($id)->first();
    
    
    $kindshotel = kindsHotel::all();
    
    return view('admin.hotels.hotels_edit', compact('package', 'kindshotel'));
  }
  
  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request $request
   * @param  int $id
   *
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id){
    //
    
    if($request->hotel_role == 1){
      $kindshotel = collect($request->kindshotel);
      
      
      Product::find($id)->kindsHotel()->sync($kindshotel->toArray());
      Session::flash('mensaje', 'Hotel Actualizado con exito');
      
      return redirect('admin/hotels');
    }else {
      Product::find($id)->update(['tittle' => $request->tittle, 'slug_url' => str_slug($request->slug_url, '-'), 'meta_description' => $request->meta_description, 'keywords' => $request->keywords, 'status' => $request->status, 'local' => $request->local, 'itinerary' => $request->itinerary, 'include' => $request->include, 'suggestion' => $request->suggestion, 'description' => $request->description, 'short_description' => $request->short_description, 'city_id' => $request->city_id,]);
      
      $kindshotel = collect($request->kindshotel);
      
      Product::find($id)->features()->sync($request->features);
      Product::find($id)->kindsHotel()->sync($kindshotel->toArray());
      
      
      if($request->file('img')){
        foreach($request->file('img') as $key => $img){
          $path = 'img/hotels/' . str_random(10) . '.png';
          Image::make($img)->fit(1200, 600)->save($path, 50);
          Photo::create(['product_id' => $id, 'img' => $path, 'order' => $key,]);
        }
      }
      
      Session::flash('mensaje', 'Hotel Actualizado con exito');
      
      return redirect('admin/hotels');
    }
    
    
  }
  
  /**
   * Remove the specified resource from storage.
   *
   * @param  int $id
   *
   * @return \Illuminate\Http\Response
   */
  public function destroy($id){
    //
    Product::destroy($id);
  }
  
  /**
   * Delete the activity photo.
   * Elimina la foto de la actividad.
   *
   * @param $id
   */
  public function delete_photo($id){
    $photo = Photo::findorfail($id);
    File::delete($photo->img);
    
    $photo->delete();
  }
  
  
  /**
   * Update the order of activity photos.
   * Actualiza el orden de las fotos de la actividad.
   *
   * @param Request $request
   * @param         $id
   *
   * @return mixed
   */
  public function update_order_photo(Request $request, $id){
    $photo = Photo::find($id);
    $photo->order = $request->order;
    $photo->save();
    
    return $request->order;
  }
}
