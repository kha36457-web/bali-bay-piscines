<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::query()->delete();

        $services = [
            [
                'titre' => 'Réparation Équipement',
                'slug' => 'reparation-equipement',
                'description' => 'Détection de fuites, pompes, projecteurs LED...',
                'image_path' => null,
            ],
            [
                'titre' => 'Inspection des Piscines',
                'slug' => 'inspection-piscines',
                'description' => 'Analyse de structure, étanchéité, check-up complet...',
                'image_path' => null,
            ],
            [
                'titre' => "L'entretien des Piscines / Nettoyage",
                'slug' => 'entretien-nettoyage',
                'description' => "Traitement de l'eau, pH, aspiration 7j/7...",
                'image_path' => null,
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
