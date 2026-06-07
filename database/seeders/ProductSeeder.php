<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * Images: drop your files into public/images/products/
     * and set image_path to 'images/products/filename.jpg'.
     * If the path starts with http(s), it is used as-is (Unsplash fallback).
     */
    public function run(): void
    {
        Product::query()->delete();

        $products = [
            [
                'name'        => 'Pompe de filtration',
                'description' => 'Performance maximale pour une eau cristalline et un débit maîtrisé avec moteur basse consommation. Idéale pour les piscines de 30 à 150 m³.',
                'image_path'  => 'https://images.unsplash.com/photo-1560749003-a4b1e97de6d3?auto=format&fit=crop&w=600&q=80',
                'price'       => 4500.00,
            ],
            [
                'name'        => 'Système de chauffage',
                'description' => 'Maintenez une température idéale toute l\'année grâce à notre pompe à chaleur ultra-silencieuse. COP jusqu\'à 14. Installation et garantie incluses.',
                'image_path'  => 'https://images.unsplash.com/photo-1534237710431-e2fc698436d0?auto=format&fit=crop&w=600&q=80',
                'price'       => 12500.00,
            ],
            [
                'name'        => 'Robot nettoyeur',
                'description' => 'Maintenance simplifiée pour un bassin impeccable sans effort. Nettoie fond, parois et ligne d\'eau avec cartographie intelligente.',
                'image_path'  => 'https://images.unsplash.com/photo-1584622650111-993a426fbf0a?auto=format&fit=crop&w=600&q=80',
                'price'       => 8900.00,
            ],
            [
                'name'        => 'Traitement chimique premium',
                'description' => 'Kit complet professionnel : chlore stabilisé, pH moins, anti-algues et floculant pour une qualité d\'eau irréprochable toute la saison.',
                'image_path'  => 'https://images.unsplash.com/photo-1608571423902-eed4a5ad8108?auto=format&fit=crop&w=600&q=80',
                'price'       => 750.00,
            ],
            [
                'name'        => 'Couverture de piscine',
                'description' => 'Protection efficace, sécurité renforcée pour les enfants et esthétique soignée. Préserve la chaleur et réduit l\'évaporation jusqu\'à 70%.',
                'image_path'  => 'https://images.unsplash.com/photo-1576013551627-0cc20b96c2a7?auto=format&fit=crop&w=600&q=80',
                'price'       => 15000.00,
            ],
            [
                'name'        => 'Éclairage LED subaquatique',
                'description' => 'Ambiance lumineuse d\'exception avec technologie LED couleur économe en énergie, pilotable à distance via smartphone. 16 millions de couleurs.',
                'image_path'  => 'https://images.unsplash.com/photo-1519167758481-83f550bb49b3?auto=format&fit=crop&w=600&q=80',
                'price'       => 2200.00,
            ],
            [
                'name'        => 'Filtre à sable',
                'description' => 'Filtration haute performance avec vanne multivoies 6 positions. Cuve en polyester renforcé résistante aux UV et aux produits chimiques.',
                'image_path'  => 'https://images.unsplash.com/photo-1562184552-997c461abbe6?auto=format&fit=crop&w=600&q=80',
                'price'       => 3200.00,
            ],
            [
                'name'        => 'Régulateur pH automatique',
                'description' => 'Contrôle et correction automatique du pH et du chlore en continu. Garantit un bain toujours sûr, confortable et protège vos équipements.',
                'image_path'  => 'https://images.unsplash.com/photo-1581094288338-2314dddb7ece?auto=format&fit=crop&w=600&q=80',
                'price'       => 5800.00,
            ],
            [
                'name'        => 'Liner de piscine sur-mesure',
                'description' => 'Revêtement intérieur en PVC armé 75/100ème fabriqué sur-mesure. Résistant aux UV, aux algues et aux produits chimiques. Pose professionnelle incluse.',
                'image_path'  => 'https://images.unsplash.com/photo-1571902943202-507ec2618e8f?auto=format&fit=crop&w=600&q=80',
                'price'       => 18000.00,
            ],
            [
                'name'        => 'Skimmer & bonde de fond',
                'description' => 'Ensemble complet de reprise d\'eau en surface et au fond pour une filtration optimale. Compatible avec toutes les pompes du marché.',
                'image_path'  => 'https://images.unsplash.com/photo-1575429198097-0414ec08e8cd?auto=format&fit=crop&w=600&q=80',
                'price'       => 1200.00,
            ],
            [
                'name'        => 'Aspirateur manuel de piscine',
                'description' => 'Kit complet avec tête d\'aspiration, flexible 9m et télescopique aluminium anodisé. Nettoyage précis des zones inaccessibles au robot.',
                'image_path'  => 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?auto=format&fit=crop&w=600&q=80',
                'price'       => 650.00,
            ],
            [
                'name'        => 'Échelle inox double entrée',
                'description' => 'Accès sécurisé en acier inoxydable 316L anti-corrosion, marches antidérapantes et fixations réglables. Disponible en 2, 3 et 4 marches.',
                'image_path'  => 'https://images.unsplash.com/photo-1540555700478-4be289fbecef?auto=format&fit=crop&w=600&q=80',
                'price'       => 2800.00,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }

        $count = Product::count();
        $this->command->info("✅ {$count} produits insérés avec succès !");
    }
}
