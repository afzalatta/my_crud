<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $fillable = [
        'name',
        'email',
        'class',
    ];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = "Mr."." ". $value;
    }
    public function getNameAttribute($value)
    {
        return ucfirst($value);
    }


    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function class()
    {
        return $this->hasMany(Classs::class);
    }

}

