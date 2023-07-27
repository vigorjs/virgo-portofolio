<?php

namespace Database\Seeders;

use App\Models\SectionProfile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class add_to_Section_Profile_tables extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SectionProfile::insert([
            'name' => 'Virgo Fajar Pamungkas',
            'phone' => '+62 822-4301-9049',
            'email' => 'virgofajar123@gmail.com',
            'address' => 'Jl. Paving RT 02/RW 05, Mulyoharjo, Jepara 59431, Jawa Tengah',
            'description' => 'As an undergraduate Informatic Engineering student at Universitas Dian Nuswantoro, I have around 6 months of industry experience. I love to work and have proficiency in PHP and Data Analytics, but I am also open to exploring other technologies as well. In the industry, I have always believed that I need to do what I love. I enjoy solving problems, creating great things, and making meaningful contributions.',
        ]);
    }
}
