<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class User extends Model
{
    use Notifiable;
    protected $fillable=[
      'fullname','phone','password'
    ];
    protected $hidden = [
        'password',
    ];
}
