<?php

use Illuminate\Database\Seeder;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'points_earned' => 150,
        'tasks_completed' => 1,
        'user_id' => 1,
        ]);

        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'points_earned' => 900,
        'tasks_completed' => 3,
        'user_id' => 2,
        ]);

        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'points_earned' => 1500,
        'tasks_completed' => 3,
        'user_id' => 3,
        ]);

        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'points_earned' => 1150,
        'tasks_completed' => 3,
        'user_id' => 2,
        ]);

        DB::table('games')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'points_earned' => 800,
        'tasks_completed' => 4,
        'user_id' => 1,
        ]);
    }
}
