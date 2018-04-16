<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salutation extends Model
{
    protected $table = 'salutations';
    protected $fillable = [
        'salutation'
    ];

    public function users(){
        return $this->hasMany(User::class, 'salutation_id');
    }
}
