<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**\\
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'password',
        'first_name',
        'last_name',
        'salutation_id',
        'title',
        'profile_picture',
        'address',
        'city',
        'province_id',
        'country_id',
        'postal_code',
        'email',
        'phone',
        'phone_preference_id',
        'contact_preference_id',
        'casl_agreement'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function socialProviders()
    {
        return $this->hasMany(SocialProvider::class);
    }

    public function salutation(){
        return $this->belongsTo(Salutation::class, 'salutation_id');
    }

    public function province(){
        return $this->belongsTo(Province::class, 'province_id');
    }

    public function country(){
        return $this->belongsTo(Country::class, 'country_id');
    }

    public function phonePreference(){
        return $this->belongsTo(PhonePreference::class, 'phone_preference_id');
    }

    public function contactPreference(){
        return $this->belongsTo(ContactPreference::class, 'contact_preference_id');
    }

    public function admin() {
        if (Auth::check() && Auth::user()->is_admin == 1) {
            return true;
        } else {
            return false;
        }
    }
}
