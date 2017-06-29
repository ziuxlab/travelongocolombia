<?php
    
    namespace App\Http\Controllers;


    use App\Config;
    use App\Mail\Contact_form;
    use App\Mail\joinmail;
    use App\message;
    use App\Page;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\App;
    use Illuminate\Support\Facades\Mail;
    use Illuminate\Support\Facades\Session;


    class HomeController extends Controller
    {
        /**
         * Create a new controller instance.
         *
         * @return void
         */
        public function __construct()
        {
            //$this->middleware('auth');
        }
        
        /**
         * Show the application dashboard.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {

            $config = Config::findorfail(1);
            if ($config->status == 1) {
                
                $menu = Page::whereLocal(App::getLocale())
                            ->whereMenu(1)
                            ->orderBy('menu_order')
                            ->get()
                ;
                
                $item = Page::where('slug_url', '')
                            ->firstOrFail()
                ;
	            
                return view('app.home', compact('item', 'menu'));
                
            }
            
            return view('proximamente');
            
            
        }
        
        public function home()
        {
            return redirect('/');
            
        }
    
        public function contact(Request $request)
        {
          
            $mensaje = message::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'country'=>$request->country,
                'message'=>$request->text,
            ]);
            
            
            Mail::to(env('MAIL_TO'))->send(new Contact_form($mensaje));
            
            Session::flash('mensaje','the message was send it correctly');
            
            //enviar correo obligatorio
            return back();
        
        }

        public function join(Request $request)
        {


            $file = $request->file('form');

            Mail::to(env('MAIL_TO'))->send(new joinmail($file));

            Session::flash('mensaje','the message was send it correctly');

            //enviar correo obligatorio
            return back();

        }

        public function language($locale){

                App::setLocale($locale);
                session(['locale' => $locale]);

                if ($locale == 'es') {
                    return redirect('inicio');
                }
                return redirect('/');

        }
	    
        
    }
