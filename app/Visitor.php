<?php
//
//    namespace App;
//
//    use Illuminate\Notifications\Notifiable;
//    use Illuminate\Foundation\Auth\User as Authenticatable;
//
//    class Visitor extends Authenticatable
//    {
//        use Notifiable;
//
//        protected $guard = 'visitor';
//
//        protected $fillable = [
//            'first_name', 'last_name', 'email', 'password', 'phone', 'address',
//        ];
//
//        protected $hidden = [
//            'password', 'remember_token',
//        ];
//    }

//<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Visitor extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
//    protected $fillable = [
//        'name', 'email', 'password',
//    ];

    protected $guarded = ['id'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
