<?php

namespace App\Http\Controllers;

use App\Activity;
use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class ActivityController extends Controller
{

    /**
     * ActivityController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth')->except('show');
    }


    /**
     * Display a listing of the activities.
     * Muestra una lista de las actividades.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $activities = Activity::all();

        return view('admin.activities.activities_index', compact('activities'));
    }

    /**
     * Display a listing of the activities for the public.
     * Muestra una lista de las actividades para el público.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexPublic()
    {

        $activities = Activity::all();

        return view('app.activities', compact('activities'));
    }


    /**
     * Show the form for creating a new activity.
     * Muestra el formulario para crear una nueva actividad.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.activities.activities_create');
    }


    /**
     * Store a newly created activity.
     * Guarda una nueva actividad.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'slug_url' => 'unique:activities',
        ]);

        $activity = Activity::create([
            'tittle'           => $request->tittle,
            'description'      => $request->description,
            'duration'         => $request->duration,
            'slug_url'         => str_slug($request->slug_url, '-'),
            'price_adults'     => $request->price_adults,
            'price_children'   => $request->price_children,
            'discount'         => $request->discount,
            'itinerary'        => $request->itinerary,
            'meta_description' => $request->meta_description,
            'keywords'         => $request->keywords,
            'status'           => $request->status,
            'local'            => $request->local,
        ]);

        if ($request->hasFile('img')) {
            foreach ($request->file('img') as $key => $img) {
                $path = 'img/activities/' . str_random(10) . '.png';
                Image::make($img)->fit(1200, 600)->save($path, 50);
                Photo::create([
                    'type'        => '1',
                    'activity_id' => $activity->id,
                    'img'         => $path,
                    'order'       => $key,
                ]);
            }
        }

        return redirect('admin/activities');
    }


    /**
     * Display the specified activity.
     * Muestra la actividad especificada.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($url)
    {
        $item = Activity::where('slug_url', $url)->firstOrFail();

        return view('app.activities-item', compact('item'));
    }


    /**
     * Show the form for editing the activity.
     * Muestra el formulario para editar la actividad.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $activity = Activity::with('photos')->whereId($id)->first();

        return view('admin.activities.activities_edit', compact('activity'));
    }


    /**
     * Update the activity.
     * Actualiza la actividad.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $activity = Activity::find($id)->update([
            'tittle'           => $request->tittle,
            'description'      => $request->description,
            'duration'         => $request->duration,
            'slug_url'         => str_slug($request->slug_url, '-'),
            'price_adults'     => $request->price_adults,
            'price_children'   => $request->price_children,
            'discount'         => $request->discount,
            'itinerary'        => $request->itinerary,
            'meta_description' => $request->meta_description,
            'keywords'         => $request->keywords,
            'status'           => $request->status,
            'local'            => $request->local,
        ]);

        if ($request->hasFile('img')) {
            foreach ($request->file('img') as $key => $img) {
                $path = 'img/activities/' . str_random(10) . '.png';
                Image::make($img)->fit(1200, 600)->save($path, 50);
                Photo::create([
                    'type'        => '1',
                    'activity_id' => $id,
                    'img'         => $path,
                    'order'       => $key,
                ]);
            }
        }

        return redirect('admin/activities');
    }


    /**
     * Delete the activity.
     * Elimina la actividad.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Activity::destroy($id);
    }


    /**
     * Delete the activity photo.
     * Elimina la foto de la actividad.
     *
     * @param $id
     */
    public function delete_photo($id)
    {
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
    public function update_order_photo(Request $request, $id)
    {
        $photo        = Photo::find($id);
        $photo->order = $request->order;
        $photo->save();

        return $request->order;
    }
}