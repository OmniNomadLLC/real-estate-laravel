<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Agent;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Create roles
        Role::firstOrCreate(['name' => 'admin']);
        Role::firstOrCreate(['name' => 'agent']);
        Role::firstOrCreate(['name' => 'user']);

        // Create admin user
        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@realestate.com',
            'password' => Hash::make('password'),
        ]);
        $admin->assignRole('admin');

        // Create agent users
        $agent1 = User::create([
            'name' => 'John Smith',
            'email' => 'john@realestate.com',
            'password' => Hash::make('password'),
        ]);
        $agent1->assignRole('agent');

        Agent::create([
            'user_id' => $agent1->id,
            'phone' => '+1 (555) 123-4567',
            'bio' => 'Experienced real estate agent with 8+ years helping families find their dream homes.',
        ]);

        $agent2 = User::create([
            'name' => 'Sarah Johnson',
            'email' => 'sarah@realestate.com',
            'password' => Hash::make('password'),
        ]);
        $agent2->assignRole('agent');

        Agent::create([
            'user_id' => $agent2->id,
            'phone' => '+1 (555) 987-6543',
            'bio' => 'Luxury property specialist focusing on high-end residential and commercial properties.',
        ]);

        // Create regular user
        $user = User::create([
            'name' => 'Regular User',
            'email' => 'user@realestate.com',
            'password' => Hash::make('password'),
        ]);
        $user->assignRole('user');
    }
}