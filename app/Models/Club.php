<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;

    public function certifications(){
        return $this->hasMany(certification::class);
    }
    public function competition(){
        return $this->hasMany(competition::class);
    }
    public function evenements(){
        return $this->hasMany(evenement::class);
    }
    public function formations(){
        return $this->hasMany(formation::class);
    }
}
