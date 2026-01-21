<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    /** @use HasFactory<\Database\Factories\EmployerFactory> */
    use HasFactory;

    public function jobs(){
        return $this->hasMany(Job::class); // hasMany return a collection, A Collection is an object wrapper around an array with powerful helper methods like all() first() etc ...
    }

    public function user()
    {
    return $this->belongsTo(User::class);
    }

}
