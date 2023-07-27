<?php

namespace Database\Seeders;

use App\Models\Social;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class add_to_Socials_tables extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Social::insert([
            'profile_id' => '1',
            'linkedin' => 'https://www.linkedin.com/in/virgofajar',
            'github' => 'https://github.com/vigorjs',
            'twitter' => 'https://twitter.com/Goddamnneddd',
            'instagram' => 'https://www.instagram.com/vigorjs',
            'gmail' => 'mailto:virgofajar123@gmail.com',
        ]);
    }
}
