<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Browser extends Model
{
    protected $fillable = ['name', 'photo', 'information'];

    public function users()
    {
        return $this->belongsToMany(User::class, 'favorites');
    }

}