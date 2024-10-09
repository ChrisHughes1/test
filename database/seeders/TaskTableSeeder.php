<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $a = new Task();
        $a->title = 'Task 1';
        $a->description = 'A Random description';
        $a->status = 'pending';
        $a->due_date = '2024-10-09';
        $a->assigned_to = 'John Doe';
        $a->save();

        Task::factory()->count(50)->create();
    }
}
