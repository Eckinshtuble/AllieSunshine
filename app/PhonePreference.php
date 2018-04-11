<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhonePreference extends Model
{
    protected $table = 'phone_preferences';
    protected $fillable = [
        'phone_preference'
    ];

    public function users(){
        return $this->hasMany(User::class, 'phone_preference_id');
    }
}
