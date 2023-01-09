<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'firstname', 'surname', 'price', 'description', 'pages', 'image'];
    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters)
    {
        if($filters['search'] ?? false)
        {
            $query->where('title','like','%'.$filters['search'].'%');
        }
        else {
            return $query->whereRaw('1 = 0');
        }
    }
}
