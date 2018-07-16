<?php

namespace App;
use Laravel\Passport\HasApiTokens;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens , Notifiable;
    protected $fillable=[
      'fullname','phone','password'
    ];
    protected $hidden = [
        'password',
    ];
}
