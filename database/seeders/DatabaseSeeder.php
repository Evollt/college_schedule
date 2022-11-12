<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Estimation;
use App\Models\Group;
use App\Models\Homework;
use App\Models\Role;
use App\Models\Schedule;
use App\Models\Subject;
use App\Models\User;
use App\Models\WeekDay;
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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Role::factory(1)->create();

        Group::factory(1)->create();

        WeekDay::factory(1)->create();
        Homework::factory(1)->create();

        User::factory(1)->create();

        Subject::factory(3)->create();
        Estimation::factory()->create();
        Schedule::factory(1)->create();
    }
}
