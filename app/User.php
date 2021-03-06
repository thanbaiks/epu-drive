<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function tasks(){
        return $this->hasMany('App\Task');
    }

    public function getProfileUrlAttribute(){
        return action('UserController@getDetail', ['id'=>$this->id]);
    }
    
    /**
     * SCOPES
     */
    public function scopeStudent($query) {
        return $query->where('teacher', false)->where('admin', false)->where('actived', true);
    }
}
