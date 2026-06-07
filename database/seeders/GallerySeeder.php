<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    public function run(): void
    {
        Gallery::truncate();

        $items = [
            ['image_path' => 'images/gallery_1.jpg', 'categorie' => 'Villas'],
            ['image_path' => 'images/gallery_2.jpg', 'categorie' => 'Villas'],
            ['image_path' => 'images/gallery_3.jpg', 'categorie' => 'Riads'],
            ['image_path' => 'images/gallery_4.jpg', 'categorie' => 'Riads'],
            ['image_path' => 'images/gallery_5.jpg', 'categorie' => 'Hôtels'],
            ['image_path' => 'images/gallery_6.jpg', 'categorie' => 'Hôtels'],
        ];

        foreach ($items as $item) {
            Gallery::create($item);
        }
    }
}
