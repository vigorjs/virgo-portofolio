<?php

namespace Database\Seeders;

use App\Models\Portofolio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class add_to_Portofolios_tables extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Portofolio::insert([
            'title' => 'Pegadaian Sistem Inventaris',
            'description' => 'Web Inventory gudang qrcode menggunakan Bootstrap dan php native',
            'image' => 'image.jpg',
            'category' => 'profesional',
            'detail' => 'detail.jpg',
            'url' => 'https://github.com/vigorjs/PESIRIS',
        ]);
    }
}
