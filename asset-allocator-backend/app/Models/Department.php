<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'content',
        'icon_path',
        'image_path',
        'is_active',
        'order',
        'slug'
          
    ];

    /**
     * Get the URL for the department icon
     *
     * @return string
     */
    public function getIconUrlAttribute()
    {
        return asset('storage/' . $this->icon_path);
    }

    /**
     * Get the URL for the department image
     *
     * @return string
     */
    public function getImageUrlAttribute()
    {
        return asset('storage/' . $this->image_path);
    }

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'icon_url',
        'image_url'
    ];
}