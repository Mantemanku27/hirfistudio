<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class User.
 * @package App\Domain\Entities
 */
class User extends Entities
{

    // use SoftDeletes;

    /**
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password', 'level', 'pin',
    ];

    protected $table ='user';

}
