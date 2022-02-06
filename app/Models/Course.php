<?php

namespace App\Models;

use App\Models\Posts;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
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

    public function similar(){
        return $this->where('category_id', $this->category_id)->with('user')->take(2)->get();
    }
}
