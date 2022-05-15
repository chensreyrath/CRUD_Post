<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public static $registerRules = [
        'name' => 'required|min:3',
        'email' => 'required',
        'password' => 'required|min:8'
    ];

    public static $loginRules = [
        'email' => 'required',
        'password' => 'required|min:8'
    ];
    
    public function isAdmin(){
        //return ($this->admin == 1);
        $user_login=User::where('id',Auth::id())->first();
        if($user_login['email'] =='admin@gmail.com'){
            return true;
        }
        //return $this->where('name', 'Admin')->exists();
    }
    
    // public function roles() {
    //     return $this->belongsToMany(Role::class);
    //  }
    //  public function isAdmin() {
    //     return $this->roles()->where('name', 'Admin')->exists();
    //  }

}
