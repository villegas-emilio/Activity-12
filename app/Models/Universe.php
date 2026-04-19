<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasMany;

class Universe extends Model
{

    protected $fillable = [
        'universe',
        'company',
        'age'
    ];


    public function superheroes()
    {
        return $this->hasMany(Superheroes::class, 'id_universe');
    }

}