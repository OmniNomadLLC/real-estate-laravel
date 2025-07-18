<?php

namespace Database\Seeders;

use App\Models\PropertyType;
use Illuminate\Database\Seeder;

class PropertyTypeSeeder extends Seeder
{
    public function run()
    {
        $types = [
            ['name' => 'House', 'slug' => 'house', 'description' => 'Single family houses'],
            ['name' => 'Apartment', 'slug' => 'apartment', 'description' => 'Multi-unit apartments'],
            ['name' => 'Condo', 'slug' => 'condo', 'description' => 'Condominium units'],
            ['name' => 'Villa', 'slug' => 'villa', 'description' => 'Luxury villas'],
            ['name' => 'Office', 'slug' => 'office', 'description' => 'Commercial office spaces'],
            ['name' => 'Commercial', 'slug' => 'commercial', 'description' => 'Commercial properties'],
        ];

        foreach ($types as $type) {
            PropertyType::create($type);
        }
    }
}