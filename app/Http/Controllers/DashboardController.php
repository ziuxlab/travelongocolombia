<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;

class DashboardController extends Controller
{

    /**
     * DashboardController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display the account dashboard.
     * Muestra el tablero de la cuenta.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.dashboard');
    }


    /**
     * Show the form for editing the profile information.
     * Muestra el formulario para editar la información del perfil.
     *
     * @return \Illuminate\Http\Response
     */
    public function editProfile()
    {
        return view('user.edit_profile');
    }


    /**
     * Update the profile informarion.
     * Actualiza la información del perfil.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function updateProfile(Request $request)
    {
        $this->validate($request, [
            'image' => 'mimes:jpeg,png,jpg',
            'name'  => 'required|min:6',
            'email' => 'email|required|min:6'
        ]);

        $auth_user = Auth::user();

        $auth_user->name  = $request->name;
        $auth_user->email = $request->email;

        if ($request->hasFile('image')) {
            $path = 'img/avatars/' . str_random(10) . '.png';
            Image::make($request->file('image'))->fit(256, 256)->save($path, 50);
            $auth_user->img = $path;
        }

        $auth_user->save();

        return view('user.edit_profile');
    }


    /**
     * Show the form for change the password.
     * Muestra el formulario para cambiar la contraseña.
     *
     * @return \Illuminate\Http\Response
     */
    public function changePassword()
    {
        return view('user.change_password');
    }


    /**
     * Change the password.
     * Cambia la contraseña.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function storePassword(Request $request)
    {

        $this->validate($request, [
            'current'               => 'required|min:6',
            'password'              => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6'
        ]);

        $auth_user = Auth::user();

        if (Hash::check($request->current, $auth_user->password)) {
            $auth_user->password = bcrypt($request->password);
        }

        $auth_user->save();

        return view('user.change_password');
    }


    /**
     * Display a listing of the booking history.
     * Muestra una lista del historial de reservas.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexBookingHistory()
    {
        return view('user.booking_history');
    }


    /**
     * Display a listing of the payment history.
     * Muestra una lista del historial de pagos.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexPaymentHistory()
    {
        return view('user.payment_history');
    }

}
