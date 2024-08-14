<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Room::create([
            'name' => 'Ruang Wilis',
            'floor' => 1,
            'capacity' => 100,
            'image' => 'https://placeimg.com/100/100/any?' . rand(1, 100),
        ]);
        
        Room::create([
            'name' => 'Ruang Anjasmoro',
            'floor' => 2,
            'capacity' => 50,
            'image' => 'https://placeimg.com/100/100/any?' . rand(1, 100),
        ]);
        
        Room::create([
            'name' => 'Ruang Panderman',
            'floor' => 3,
            'capacity' => 200,
            'image' => 'https://placeimg.com/100/100/any?' . rand(1, 100),
        ]);
        
        Room::create([
            'name' => 'Ruang Argopuro',
            'floor' => 3,
            'capacity' => 100,
            'image' => 'https://placeimg.com/100/100/any?' . rand(1, 100),
        ]);
        
        Room::create([
            'name' => 'Ruang Command Center',
            'floor' => 2,
            'capacity' => 100,
            'image' => 'https://placeimg.com/100/100/any?' . rand(1, 100),
        ]);
    }
}
