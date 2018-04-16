<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = 'provinces';
    protected $fillable = [
        'province_name',
        'province_abbreviation',
        'country_id'
    ];

    public function users(){
        return $this->hasMany(User::class, 'province_id');
    }

    public function countries(){
        return $this->belongsTo(Country::class, 'country_id');
    }
}
