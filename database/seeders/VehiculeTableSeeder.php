<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehiculeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 10; $i++) {
            $immatriculation = $faker->numberBetween(100, 240)
                . ' TUNIS '
                . str_pad($faker->numberBetween(1, 9999), 4, '0', STR_PAD_LEFT);

            DB::table("vehicules")->insert([
                'immatriculaion' => $immatriculation,
                'marque' => $faker->randomElement(['BMW', 'Audi','Ford','Opel', 'Dacia', 'KIA', 'Citroen', 'Toyota','Peugeot','Volkswagen']),
                'modele' => $faker->randomElement(['M1', 'M2','M3', 'M4','M5', 'M6','M7', 'M8','M8']),
                'couleur' => $faker->colorName,
                'annee' => $faker->numberBetween(2000, 2023),
                'kilometrage' => $faker->numberBetween(0, 500000),
                'carosserie' => $faker->randomElement(['conduite intérieure', 'cabriolet', 'break', 'commerciale', 'handicapés', 'divers']),
                'energie' => $faker->randomElement(['Essence', 'Diesel', 'Electrique']),
                //'energie' => $faker->vehicleFuelType,
                'boite' => $faker->randomElement(['Manuelle', 'Automatique']),

            ]);
        }

        //\App\Models\Vehicule::factory(20)->create();
    }
}
