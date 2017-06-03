<?php
	/**
	 * Created by PhpStorm.
	 * User: mauriciosuarez
	 * Date: 3/06/17
	 * Time: 4:04 PM
	 */
	
	namespace App\Listeners;
	
	use Illuminate\Auth\Events\Logout;
	
	class LogSuccessfulLogout {
		
		public function handle(Logout $event)
		{
			// Access the order using $event->order...
			$event->user->touch();
		}
	}