<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];
    public function setNameAttribute($name){
        $this->attributes['name'] = strtoupper($name);
    }

    public function sectors(){
        return $this->hasMany(Sector::class);
    }
}
