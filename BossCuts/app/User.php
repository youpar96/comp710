<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    /************************************************
     * Constants for admin login
     */
    const ADMIN_TYPE = 'admin';
    const DEFAULT_TYPE = 'default';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'type',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    /**************************************************
     * User is admin returns a boolean
     */
    public function isAdmin()    {        
        return $this->type === self::ADMIN_TYPE;    
    }

}
