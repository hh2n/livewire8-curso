<?php

namespace App\Models;

use App\Models\Posts;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function posts()
    {
        return $this->hasMany(Posts::class);
    }

    public function getExcerptAttribute()
    {
        return substr($this->description, 0, 80) . "...";
    }
}
