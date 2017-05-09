<?php

namespace App\Http\Controllers;

use App\booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

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
        $vista = 'app.user.dashboard';
        return view('app.user', compact('vista'));
    }


    /**
     * Show the form for editing the profile information.
     * Muestra el formulario para editar la información del perfil.
     *
     * @return \Illuminate\Http\Response
     */
    public function editProfile()
    {
        $vista = 'app.user.edit_profile';
        return view('app.user', compact('vista'));
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
        Session::flash('mensaje','the personal information was changed correctly');
        $auth_user->save();
    
     
        return redirect('account/edit-profile');
    }


    /**
     * Show the form for change the password.
     * Muestra el formulario para cambiar la contraseña.
     *
     * @return \Illuminate\Http\Response
     */
    public function changePassword()
    {
        $vista = 'app.user.change_password';
        return view('app.user', compact('vista'));
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
            Session::flash('mensaje','the password changed correctly');
        }else{
            Session::flash('error','the password don´t changed try again');
        }

        $auth_user->save();

        return redirect('account/change-password');
    }


    /**
     * Display the view My bookings.
     * Muestra la vista Mis reservas.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexBookingHistory()
    {
        $vista = 'app.user.booking_history';
        $bookings = booking::with('contacts','details')->where('user_id',Auth::user()->id)->paginate(5);
        return view('app.user', compact('vista','bookings'));
       
    }


    /**
     * Display the view My payments.
     * Muestra la vista Mis pagos.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexPaymentHistory()
    {
    
        $vista = 'app.user.payment_history';
        $bookings_payments = Auth::user()->bookingsPayments()->paginate(5);
        return view('app.user', compact('vista','bookings_payments'));
        
    }
    

}
