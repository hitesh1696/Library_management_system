<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Department;
use App\Models\Book;
use App\Models\Student;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::factory()->create([
            'name' => 'Hitesh',
            'email' => 'abc@gmail.com',
        ]);

        $department = Department::factory()->create([
            'name' => 'Computer',
        ]);

        Student::factory(10)->create(['department_id'=> $department->id]);
        Book::factory(10)->create();
    }
}
