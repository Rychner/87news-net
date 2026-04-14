<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class ArticleNews extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'subjudul',
        'slug',
        'thumbnail',
        'content',
        'category_id',
        'is_featured',
    ];

    public function category(): BelongsTo 
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
}
