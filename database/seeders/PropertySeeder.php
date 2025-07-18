<?php

namespace Database\Seeders;

use App\Models\Property;
use App\Models\PropertyType;
use App\Models\User;
use Illuminate\Database\Seeder;

class PropertySeeder extends Seeder
{
    public function run()
    {
        $houseType = PropertyType::where('slug', 'house')->first();
        $apartmentType = PropertyType::where('slug', 'apartment')->first();
        $condoType = PropertyType::where('slug', 'condo')->first();
        
        $agent1 = User::where('email', 'john@realestate.com')->first();
        $agent2 = User::where('email', 'sarah@realestate.com')->first();

        $properties = [
            [
                'title' => 'Beautiful Family House',
                'description' => 'Spacious 4-bedroom family home with modern amenities, large backyard, and attached garage. Perfect for growing families.',
                'price' => 485000,
                'status' => 'for_sale',
                'property_type_id' => $houseType->id,
                'bedrooms' => 4,
                'bathrooms' => 3,
                'area' => 2400,
                'garage' => true,
                'address' => '123 Maple Street',
                'city' => 'Springfield',
                'state' => 'CA',
                'zip_code' => '90210',
                'featured' => true,
                'agent_id' => $agent1->id,
            ],
            [
                'title' => 'Luxury Downtown Apartment',
                'description' => 'Modern luxury apartment in the heart of downtown. Floor-to-ceiling windows, high-end finishes, and building amenities.',
                'price' => 3200,
                'status' => 'for_rent',
                'property_type_id' => $apartmentType->id,
                'bedrooms' => 2,
                'bathrooms' => 2,
                'area' => 1200,
                'garage' => false,
                'address' => '456 Downtown Plaza',
                'city' => 'Springfield',
                'state' => 'CA',
                'zip_code' => '90211',
                'featured' => true,
                'agent_id' => $agent2->id,
            ],
            [
                'title' => 'Oceanview Condo',
                'description' => 'Stunning oceanview condominium with private balcony. Resort-style amenities including pool and fitness center.',
                'price' => 750000,
                'status' => 'for_sale',
                'property_type_id' => $condoType->id,
                'bedrooms' => 3,
                'bathrooms' => 2,
                'area' => 1800,
                'garage' => true,
                'address' => '789 Ocean Drive',
                'city' => 'Coastal City',
                'state' => 'CA',
                'zip_code' => '90212',
                'featured' => false,
                'agent_id' => $agent1->id,
            ],
            [
                'title' => 'Cozy Starter Home',
                'description' => 'Perfect starter home for first-time buyers. Recently updated kitchen and bathrooms, quiet neighborhood.',
                'price' => 320000,
                'status' => 'for_sale',
                'property_type_id' => $houseType->id,
                'bedrooms' => 3,
                'bathrooms' => 2,
                'area' => 1400,
                'garage' => true,
                'address' => '321 Oak Avenue',
                'city' => 'Springfield',
                'state' => 'CA',
                'zip_code' => '90213',
                'featured' => false,
                'agent_id' => $agent2->id,
            ],
        ];

        foreach ($properties as $property) {
            Property::create($property);
        }
    }
}