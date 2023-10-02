<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class add_to_Users_tables extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            'name' => 'Virgo Fajar Pamungkas',
            'email' => 'virgofajar123@gmail.com',
            'password' => bcrypt('Batassuci123'),
        ]);
    }
}
