<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'name', 'console', 'price', 'description', 'pegi', 'image'];
    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters)
    {
        if($filters['search'] ?? false)
        {
            $query->where('title','like','%'.$filters['search'].'%')
            ->orWhere('name','like','%'.$filters['search'].'%')
            ->orWhere('console','like','%'.$filters['search'].'%')
            ->orWhere('category','like','%'.$filters['search'].'%');
        }
        else {
            return $query->whereRaw('1 = 0');
        }
        
    }
}
