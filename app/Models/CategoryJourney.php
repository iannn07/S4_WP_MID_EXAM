<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CategoryJourney extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function journey(): HasMany
    {
        return $this->hasMany(Journey::class, 'category_id', 'id');
    }
}
