<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Illuminate\Support\Str;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'password', 'username', 'roles',
        'address', 'city_id', 'province_id', 'phone', 'avatar', 'status'
       ];       

       public function generateToken()
        {
            $this->api_token = Str::random(60);
            $this->save();
            return $this->api_token;
        }
}
