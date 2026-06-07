<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'image_path',
        'price',
    ];



    /**
     * Get the dynamic URL for the product image.
     * This provides a clean interface for image storage / fallback logic.
     *
     * @return string
     */
    public function getImageUrlAttribute()
    {
        if (empty($this->image_path)) {
            return 'https://via.placeholder.com/300x200?text=' . urlencode($this->name);
        }

        // If it's a full URL, return it directly
        if (Str::startsWith($this->image_path, ['http://', 'https://'])) {
            return $this->image_path;
        }

        // Otherwise, resolve via public storage (enabling standard image storage)
        return asset('storage/' . $this->image_path);
    }
}
