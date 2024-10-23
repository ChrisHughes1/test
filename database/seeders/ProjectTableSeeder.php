<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $a = new Project();
        $a->name = 'Project 1';
        $a->description = 'A Random description';
        $a->status = 'in_progress';
        $a->start_date = '2024-10-08';
        $a->end_date = '2024-10-09';
        $a->save();

        Project::factory()->count(10)->create();
    }
}
