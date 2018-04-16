<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'countries';
    protected $fillable = [
        'country_name'
    ];

    public function users(){
        return $this->hasMany(User::class, 'country_id');
    }

    public function provinces(){
        return $this->hasMany(Province::class, 'country_id');
    }
}
