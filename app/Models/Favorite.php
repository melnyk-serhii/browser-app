<?php

namespace App\Models;

use App\Models\Browser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    protected $fillable = ['user_id', 'browser_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function browser()
    {
        return $this->belongsTo(Browser::class, 'browser_id');
    }
}
