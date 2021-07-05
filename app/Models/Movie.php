<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'descricao',
        'img_url',
        'ano',
        'tag',
        'estrelas',
        'category_id',
    ];

    public function category() {
        return $this->belongsTo(ProductCategory::class, 'category_id', 'id');
    }
}
