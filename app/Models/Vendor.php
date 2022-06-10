<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Vendor extends Authenticatable
{
    use HasFactory;
    use Notifiable;
    protected $guard = 'admin';

    protected  $table = 'vendors';

    protected $fillable = [
        'name', 'email', 'password'
    ];
}
