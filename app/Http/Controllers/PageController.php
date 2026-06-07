<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Gallery;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function index()
    {
        $services = Service::all();
        $images = Gallery::all();
        
        // Static array of products
        $products = [
            (object) [
                'name' => 'Pompe de circulation',
                'image_url' => asset('images/pompe-circulation-piscine.png')
            ],
            (object) [
                'name' => 'Filtre à sable',
                'image_url' => asset('images/filtres-sable-gamme.png')
            ],
            (object) [
                'name' => 'Projecteur LED',
                'image_url' => asset('images/projecteur-led-piscine.png')
            ],
            (object) [
                'name' => 'Chlore lent AstralPool',
                'image_url' => asset('images/chlore-lent-astralpool-seau.png')
            ],
            (object) [
                'name' => 'Glasmedia 25kg',
                'image_url' => asset('images/glasmedia-astralpool-25kg.png')
            ],
            (object) [
                'name' => 'Aquazaj Verre Filtrant',
                'image_url' => asset('images/aquazaj-verre-filtrant-25kg.png')
            ],
            (object) [
                'name' => 'Aspirateur de piscine',
                'image_url' => asset('images/aspirateur-piscine-utilisation.png')
            ],
            (object) [
                'name' => 'Brosse rouleau',
                'image_url' => asset('images/brosse-rouleau-piscine.png')
            ]
        ];
        
        // Visitor Counter logic
        $visitorCount = DB::table('site_counters')->where('key', 'visitors')->value('value');
        if ($visitorCount === null) {
            DB::table('site_counters')->insert([
                'key' => 'visitors',
                'value' => 1245,
                'created_at' => now(),
                'updated_at' => now()
            ]);
            $visitorCount = 1245;
        } else {
            DB::table('site_counters')->where('key', 'visitors')->increment('value');
            $visitorCount++;
        }

        return view('index', compact('services', 'images', 'products', 'visitorCount'));
    }

    public function services()
    {
        return view('services');
    }
}
