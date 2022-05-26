<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Website;
class Website extends Model
{
    
    public function websites()
    {
        return $this->belongsToMany(User::class);
    }
    
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }

}
