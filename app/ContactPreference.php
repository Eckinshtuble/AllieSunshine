<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactPreference extends Model
{
    protected $table = 'contact_preferences';
    protected $fillable = [
        'contact_preference'
    ];

    public function users(){
        return $this->hasMany(User::class, 'contact_preference_id');
    }
}
