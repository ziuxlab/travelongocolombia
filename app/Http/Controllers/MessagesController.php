<?php
    
    namespace App\Http\Controllers;
    
    use App\message;
    use Illuminate\Http\Request;
    
    class MessagesController extends Controller
    {
        //
        public function __construct()
        {
            $this->middleware('auth');
        }
        
        public function index()
        {
            //
            $messages = message::paginate(10);
            
            return view('admin.messages.messages_index', compact('messages'));
        }
        
        public function show($id)
        {
            //
            $message = message::findorfail($id);
            return view('admin.messages.messages_show', compact('message'));
        }
        
        public function destroy($id)
        {
            //
            message::destroy($id);
        }
        
        
    }
