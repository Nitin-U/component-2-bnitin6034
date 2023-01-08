<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cd extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'name', 'band', 'price', 'description', 'playlength', 'image'];
    protected $guarded = ['id'];
}
