<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)->create();

        // Product::factory(10)->create();

        Product::create([
            'title' => 'Luxury Yacht',
            'ship_name' => 'Serenity',
            'company' => 'Oceanic Ventures',
            'location' => 'Miami, FL',
            'email' => 'contact@oceanicventures.com',
            'description' => 'A luxurious yacht with modern amenities and a sleek design, perfect for leisure and business trips on the sea.',
            'price' => 5000000,
        ]);
        
        Product::create([
            'title' => 'Fishing Boat',
            'ship_name' => 'CatchMaster 3000',
            'company' => 'Fishing Pros Inc.',
            'location' => 'Seattle, WA',
            'email' => 'sales@fishingpros.com',
            'description' => 'A high-quality fishing boat equipped with the latest technology for a successful and enjoyable fishing experience.',
            'price' => 75000,
        ]);
        
        Product::create([
            'title' => 'Sailing Boat',
            'ship_name' => 'Wind Rider',
            'company' => 'Sail Away Co.',
            'location' => 'San Diego, CA',
            'email' => 'info@sailaway.com',
            'description' => 'An elegant sailing boat designed for both competitive racing and leisurely cruises along the coastline.',
            'price' => 120000,
        ]);
        
        Product::create([
            'title' => 'Speed Boat',
            'ship_name' => 'Wave Breaker',
            'company' => 'Speed Marine',
            'location' => 'Miami, FL',
            'email' => 'sales@speedmarine.com',
            'description' => 'A powerful speed boat that offers thrilling performance and unmatched speed for water sports enthusiasts.',
            'price' => 90000,
        ]);
        
        Product::create([
            'title' => 'House Boat',
            'ship_name' => 'Aqua Home',
            'company' => 'Floating Homes Ltd.',
            'location' => 'Lake Tahoe, NV',
            'email' => 'contact@floatinghomes.com',
            'description' => 'A spacious house boat featuring all the comforts of home, perfect for long stays on the water.',
            'price' => 300000,
        ]);
        
        Product::create([
            'title' => 'Cargo Ship',
            'ship_name' => 'TransAtlantic Carrier',
            'company' => 'Global Shipping Co.',
            'location' => 'New York, NY',
            'email' => 'shipping@globalshipping.com',
            'description' => 'A large cargo ship designed for transporting goods across oceans with maximum efficiency and safety.',
            'price' => 15000000,
        ]);
        
        Product::create([
            'title' => 'Cruise Ship',
            'ship_name' => 'Ocean Dream',
            'company' => 'Luxury Cruises Inc.',
            'location' => 'Fort Lauderdale, FL',
            'email' => 'bookings@luxurycruises.com',
            'description' => 'A magnificent cruise ship offering world-class amenities and unforgettable travel experiences.',
            'price' => 80000000,
        ]);
        
        Product::create([
            'title' => 'Submarine',
            'ship_name' => 'Deep Explorer',
            'company' => 'Submarine Ventures',
            'location' => 'San Francisco, CA',
            'email' => 'explore@submarineventures.com',
            'description' => 'A state-of-the-art submarine designed for deep-sea exploration and scientific research.',
            'price' => 25000000,
        ]);
        
        Product::create([
            'title' => 'Patrol Boat',
            'ship_name' => 'Guardian',
            'company' => 'Marine Security',
            'location' => 'Los Angeles, CA',
            'email' => 'security@marinesecurity.com',
            'description' => 'A robust patrol boat equipped with advanced technology for ensuring maritime safety and security.',
            'price' => 350000,
        ]);
        
        Product::create([
            'title' => 'Research Vessel',
            'ship_name' => 'Discovery',
            'company' => 'Ocean Research Institute',
            'location' => 'Boston, MA',
            'email' => 'info@oceanresearch.org',
            'description' => 'A highly specialized research vessel designed for conducting oceanographic and marine biology studies.',
            'price' => 22000000,
        ]);
    }
}
