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
    
        protected $dates = ['trial_ends_at', 'subscription_ends_at'];
        
        /**
         * The attributes that should be hidden for arrays.
         *
         * @var array
         */
        protected $hidden = [
            'password',
            'remember_token',
        ];
        
        
    }
