<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salutation extends Model
{
    protected $table = 'salutations';
    protected $fillable = [
        'skill'
    ];

    public function users(){
        return $this->hasMany(User::class, 'salutation_id');
    }
}
