<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use HttpOz\Roles\Traits\HasRole;
use HttpOz\Roles\Contracts\HasRole as HasRoleContract;
use Laravel\Cashier\Billable;


class User extends Authenticatable implements HasRoleContract
{
    use Notifiable, HasRole, Billable;

        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $fillable = [
        'name',
        'email',
        'password',
        'img'
        ];
        
        
        /**
         * The attributes that should be hidden for arrays.
         *
         * @var array
         */
        protected $hidden = [
        'password',
        'remember_token',
        ];

        public function bookings()
        {
            return $this->hasMany('App\booking', 'user_id');
        }

        public function bookingsPayments()
        {
            return  $this->bookings()->with('payments')->get();
        }
        
    }
