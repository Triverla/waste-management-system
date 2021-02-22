<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
//    relationship with client
    public function client()
    {
        return $this->hasOne('App\Client');
    }

    //relationship with admin
    public function admin()
    {
        return $this->hasOne('App\Admin');
    }

    public function user_complaints(){
        return $this->hasMany('App\UserComplaint');
    }

    public function complaint_reply()
    {
        return $this->hasMany('App\ComplaintReply');
    }

    public function transactions()
    {
        return $this->hasMany('App\Transaction');
    }

    public function checkSubscription(){
        $user = auth()->user();
        $check = Transaction::where('user_id', $user->id)->where('month', date()->format('M'))->where('year',date()->format('Y'))->first();
    }
}
