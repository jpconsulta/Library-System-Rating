<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LibraryService extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'avg_rating',
    ];

    protected function casts(): array
    {
        return [
            'avg_rating' => 'float',
        ];
    }
    
    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }
}
