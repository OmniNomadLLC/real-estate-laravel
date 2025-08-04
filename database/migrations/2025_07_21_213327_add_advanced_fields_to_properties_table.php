<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('properties', function (Blueprint $table) {
            // Detailed Information fields
            $table->string('property_id')->nullable()->after('address');
            $table->decimal('floor_size', 10, 2)->nullable()->after('property_id');
            $table->decimal('land_size', 10, 2)->nullable()->after('floor_size');
            $table->enum('garage', ['yes', 'no'])->default('no')->after('land_size');
            $table->string('garage_size')->nullable()->after('garage');
            $table->integer('year_built')->nullable()->after('garage_size');
            $table->enum('condition', ['excellent', 'good', 'fair', 'needs_work'])->nullable()->after('year_built');
            $table->json('features')->nullable()->after('condition');
            
            // Media fields
            $table->string('featured_image')->nullable()->after('features');
            $table->json('images')->nullable()->after('featured_image');
            $table->json('floor_plans')->nullable()->after('images');
            $table->string('video_url')->nullable()->after('floor_plans');
            $table->string('virtual_tour_url')->nullable()->after('video_url');
            
            // Contact Information
            $table->string('agent_name')->nullable()->after('virtual_tour_url');
            $table->string('agent_phone')->nullable()->after('agent_name');
            $table->string('agent_email')->nullable()->after('agent_phone');
            $table->string('agency_name')->nullable()->after('agent_email');
            
            // Additional Information
            $table->json('nearby_places')->nullable()->after('agency_name');
            $table->json('room_details')->nullable()->after('nearby_places');
            $table->text('additional_notes')->nullable()->after('room_details');
            
            // Add rent price field
            $table->decimal('rent_price', 15, 2)->nullable()->after('price');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('properties', function (Blueprint $table) {
            $table->dropColumn([
                'property_id',
                'floor_size',
                'land_size',
                'garage',
                'garage_size',
                'year_built',
                'condition',
                'features',
                'featured_image',
                'images',
                'floor_plans',
                'video_url',
                'virtual_tour_url',
                'agent_name',
                'agent_phone',
                'agent_email',
                'agency_name',
                'nearby_places',
                'room_details',
                'additional_notes',
                'rent_price'
            ]);
        });
    }
};