<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProjectsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('projects')->insert([
            [
                'title' => 'Student Portfolio Website',
                'description' => 'Personal portfolio built with Laravel showcasing projects, skills and contact information. Role: Software Engineer Student (Year 4).',
                'tech_stack' => 'Laravel, PHP, MySQL, Bootstrap',
                'link' => null,
                'year' => '2026',
                'image_url' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Course Management Tool (Prototype)',
                'description' => 'A prototype web app to manage coursework and assignments used in university projects.',
                'tech_stack' => 'Laravel, Vue, Tailwind',
                'link' => null,
                'year' => '2025',
                'image_url' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
