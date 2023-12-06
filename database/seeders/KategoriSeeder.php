<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $classes = [
            [
                'kategori' => 'hewan',
            ],
            [
                'kategori' => 'tumbuhan',
            ],
            [
                'kategori' => 'manusia',
            ]
        ];

        foreach ($classes as $type) {
            $class = new kategori();

            $class->kategori = $type['kategori'];

            $class->save();
        }
    }
}
