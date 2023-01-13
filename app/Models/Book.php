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
            $query->where('title','like','%'.$filters['search'].'%')
            ->orWhere('firstname','like','%'.$filters['search'].'%')
            ->orWhere('surname','like','%'.$filters['search'].'%')
            ->orWhere('category','like','%'.$filters['search'].'%');

            if($filters['sort'] ?? false) {
                $sort = explode("-", $filters['sort']);
                $query->orderBy($sort[0],$sort[1]);
            }
        }
        else {
            return $query->whereRaw('1 = 0');
        }
    }
}