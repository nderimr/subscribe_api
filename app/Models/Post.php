<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Website;
class Post extends Model
{
    use HasFactory;
    public function websites()
    {
        return $this->belongsToMany(Website::class);
    }
}
