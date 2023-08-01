<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class add_to_Skills_tables extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Skill::insert([
            [
                'skill' => 'laravel',
                'proficient' => 85,
            ],
            [
                'skill' => 'mysql',
                'proficient' => 75,
            ],
            [
                'skill' => 'javascript',
                'proficient' => 60,
            ],
            [
                'skill' => 'canva',
                'proficient' => 85,
            ],
            [
                'skill' => 'trello',
                'proficient' => 80,
            ],
            [
                'skill' => 'git',
                'proficient' => 80,
            ],
            [
                'skill' => 'php',
                'proficient' => 85,
            ],
            [
                'skill' => 'wordpress/cms',
                'proficient' => 80,
            ],
            [
                'skill' => 'acure cloud',
                'proficient' => 60,
            ],
            [
                'skill' => 'audacity',
                'proficient' => 75,
            ],
            [
                'skill' => 'computer network',
                'proficient' => 75,
            ],
            [
                'skill' => 'ms. office',
                'proficient' => 90,
            ],
        ]);
    }
}
