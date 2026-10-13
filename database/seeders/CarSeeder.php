<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('cars')->insert([
            [
                'car_name' => 'Toyota Corolla',
                'brand' => 'Toyota',
                'model' => 'Corolla',
                'image' => 'b-1.png',
                'price' => 200.00,
                'location' => 'Islamabad',
                'status' => 'available',
            ],
            [
                'car_name' => 'Honda Civic',
                'brand' => 'Honda',
                'model' => 'Civic',
                'image' => 'b-2.png',
                'price' => 250.00,
                'location' => 'Islamabad',
                'status' => 'available',
            ],
            [
                'car_name' => 'Toyota Yaris',
                'brand' => 'Toyota',
                'model' => 'Yaris',
                'image' => 'b-3.png',
                'price' => 180.00,
                'location' => 'Rawalpindi',
                'status' => 'available',
            ],
            [
                'car_name' => 'Suzuki Swift',
                'brand' => 'Suzuki',
                'model' => 'Swift',
                'image' => 'book-car.png',
                'price' => 150.00,
                'location' => 'Islamabad',
                'status' => 'available',
            ],
            [
                'car_name' => 'Honda City',
                'brand' => 'Honda',
                'model' => 'City',
                'image' => 'c-1.png',
                'price' => 170.00,
                'location' => 'Rawalpindi',
                'status' => 'available',
            ],
            [
                'car_name' => 'Toyota Fortuner',
                'brand' => 'Toyota',
                'model' => 'Fortuner',
                'image' => 'c-2.png',
                'price' => 400.00,
                'location' => 'Islamabad',
                'status' => 'available',
            ],
        ]);
    }
}
