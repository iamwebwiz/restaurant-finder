<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * User has one Restaurant.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function restaurant()
    {
        // hasOne(RelatedModel, foreignKeyOnRelatedModel = user_id, localKey = id)
        return $this->hasOne(Restaurant::class);
    }
}
