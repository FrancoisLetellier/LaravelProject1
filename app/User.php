<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * @property mixed firstname
 * @property mixed lastname
 * @property mixed email
 * @property mixed role
 * @property mixed language
 * @property mixed group_id
 * @property mixed password
 */
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'lastname', 'email', 'role', 'language','password', 'group_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

    public function group()
    {
    	return $this->belongsTo(Group::class);
    }

    public function projects()
    {
    	return $this->belongsToMany(Project::class);
    }
}
