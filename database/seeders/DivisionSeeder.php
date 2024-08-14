<?php

namespace Database\Seeders;

use App\Models\Division;
use Illuminate\Database\Seeder;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Division::create([
            'name' => 'Bidang Data dan Statistik',
        ]);

        Division::create([
            'name' => 'Bidang Aplikasi Informatika',
        ]);
        Division::create([
            'name' => 'Bidang Informasi Publik',
        ]);
        Division::create([
            'name' => 'Bidang Komunikasi Publik',
        ]);
        Division::create([
            'name' => 'Bidang Infrastruktur TIK',
        ]);
        Division::create([
            'name' => 'Sekretariat',
        ]);
    }
}
