<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Klaravel\Ntrust\Traits\NtrustUserTrait;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use NtrustUserTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected static $roleProfile = 'user';

    public static function getStatus($index)
    {
        $status = ['1'=>'Active','0'=>'Deactive','2'=>'Deleted'];
        return $status[$index];
    }

    public function member()
    {
        return $this->hasOne('App\Models\Member', 'user_id');
    }
}
