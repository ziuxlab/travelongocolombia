<?php

namespace App\Http\Controllers;

use App\suscriptores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SubscriptionController extends Controller
{
    //
	public function __construct() {
		$this->middleware( 'auth' )->except(['store']);
	}
	
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		//
		$suscriptores = suscriptores::paginate( 10 );
		
		return view( 'admin.suscriptores.suscriptores_index', compact( 'suscriptores' ) );
		
	}
	
	
	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function store( Request $request ) {
		
		suscriptores::create( $request->all() );
		
		Session::flash( 'mensaje', 'Te has suscrito con exito' );
		
		return back();
		
	}
	
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function destroy( $id ) {
		//
		
		suscriptores::find( $id )
		       ->delete();
		
	}
}
