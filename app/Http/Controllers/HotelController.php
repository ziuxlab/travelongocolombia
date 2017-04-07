<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    
    /**
     * ActivityController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth')->except('show');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::where('type', 2)->paginate(1);
    
        return view('admin.activities.activities_index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.activities.activities_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'slug_url' => 'unique:products',
        ]);
    
        $itinerary = '';
        foreach ($request->itinerary as $i) {
            $itinerary = $itinerary . $i . ',';
        }
        
        $activity = Product::create([
            'tittle'           => $request->tittle,
            'description'      => $request->description,
            'slug_url'         => str_slug($request->slug_url, '-'),
            'days'             => 1,
            'price_adults'     => $request->price_adults,
            'price_children'   => $request->price_children,
            'discount'         => $request->discount,
            'meta_description' => $request->meta_description,
            'keywords'         => $request->keywords,
            'status'           => $request->status,
            'local'            => $request->local,
            'itinerary'        => $itinerary,
            'type'             => 1,
        ]);
    
        if ($request->hasFile('img')) {
            foreach ($request->file('img') as $key => $img) {
                $path = 'img/activities/' . str_random(10) . '.png';
                Image::make($img)->fit(1200, 600)->save($path, 50);
                Photo::create([
                    'product_id' => $activity->id,
                    'img'        => $path,
                    'order'      => $key,
                ]);
            }
        }
    
        return redirect('admin/activities');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($url)
    {
        //
        
        $item = Product::where('slug_url', $url)->firstOrFail();
        return view('app.product-item', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
