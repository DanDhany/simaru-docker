<?php

namespace Database\Seeders;

use App\Models\Facility;
use Illuminate\Database\Seeder;

class FacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Facility::create([
            'name' => 'Kursi',
        ]);

        Facility::create([
            'name' => 'Komputer',
        ]);

        Facility::create([
            'name' => 'Vide Wall',
        ]);

        Facility::create([
            'name' => 'Meja Kerja',
        ]);
        Facility::create([
            'name' => 'Set Sound System',
        ]);
        Facility::create([
            'name' => 'Microphone Kabel',
        ]);
        Facility::create([
            'name' => 'Meja Rapat',
        ]);
        Facility::create([
            'name' => 'Meja Rapat Pimpinan',
        ]);
        Facility::create([
            'name' => 'Podium',
        ]);
        Facility::create([
            'name' => 'Lambang garuda',
        ]);
        Facility::create([
            'name' => 'LED Monitor',
        ]);
        Facility::create([
            'name' => 'Kursi Pimpinan',
        ]);
        Facility::create([
            'name' => 'Set LCD Proyektor',
        ]);
        Facility::create([
            'name' => 'Elektone',
        ]);
        Facility::create([
            'name' => 'Keyboard',
        ]);
        Facility::create([
            'name' => 'Demung',
        ]);
        Facility::create([
            'name' => 'Gong',
        ]);
        Facility::create([
            'name' => 'Kendang Ciblon',
        ]);
        Facility::create([
            'name' => 'Set Kendang Jaipong',
        ]);
        Facility::create([
            'name' => 'Saron',
        ]);
        Facility::create([
            'name' => 'Peking',
        ]);
        Facility::create([
            'name' => 'TV LED + Bracket',
        ]);
        Facility::create([
            'name' => 'Sound Card',
        ]);
        Facility::create([
            'name' => 'Panaboard',
        ]);
        Facility::create([
            'name' => 'Power Supply',
        ]);
        Facility::create([
            'name' => 'Web Kamera',
        ]);
    }
}
