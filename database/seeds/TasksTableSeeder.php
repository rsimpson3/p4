<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'task' => 'Ask for Help',
        'description' => 'Ask someone to teach you a skill.',
        'task_points' => 200,
        'skill_level' => 1,
        'allotted_time' => '00:02:00',
        ]);

        DB::table('tasks')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'task' => 'Export by WiFi',
        'description' => 'Send a data file using a WiFi connection.',
        'task_points' => 450,
        'skill_level' => 4,
        'allotted_time' => '00:02:00',
        ]);

        DB::table('tasks')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'task' => 'Run',
        'description' => 'Start a run.',
        'task_points' => 150,
        'skill_level' => 1,
        'allotted_time' => '00:01:00',
        ]);

        DB::table('tasks')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'task' => 'Connect 2 Sensors',
        'description' => 'Plug in 2 sensors. Confirm valid response from each one.',
        'task_points' => 400,
        'skill_level' => 2,
        'allotted_time' => '00:01:30',
        ]);

        DB::table('tasks')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'task' => 'Connect sensor',
        'description' => 'Plug in 1 sensor. Confirm a valid response.',
        'task_points' => 100,
        'skill_level' => 1,
        'allotted_time' => '00:01:30',
        ]);

        DB::table('tasks')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'task' => 'Free Teach',
        'description' => 'Teach your partner a new skill. It does not need to be a wheel task.',
        'task_points' => 800,
        'skill_level' => 3,
        'allotted_time' => '00:03:30',
        ]);

        DB::table('tasks')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'task' => 'Set Rate',
        'description' => 'Set experimental rate for run.',
        'task_points' => 200,
        'skill_level' => 2,
        'allotted_time' => '00:01:30',
        ]);

        DB::table('tasks')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'task' => 'Autoscale',
        'description' => 'Use autoscale function to adjust the y-axis during a run.',
        'task_points' => 300,
        'skill_level' => 3,
        'allotted_time' => '00:02:00',
        ]);

        DB::table('tasks')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'task' => 'Read Lab Instruction',
        'description' => 'Access a saved copy of any Vernier Labquest experiment.',
        'task_points' => 200,
        'skill_level' => 2,
        'allotted_time' => '00:01:30',
        ]);

        DB::table('tasks')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'task' => 'Select Region',
        'description' => 'Select a region of data from a saved run.',
        'task_points' => 500,
        'skill_level' => 3,
        'allotted_time' => '00:02:30',
        ]);

        DB::table('tasks')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'task' => 'View Graph',
        'description' => 'View a Labquest graph.',
        'task_points' => 100,
        'skill_level' => 1,
        'allotted_time' => '00:01:00',
        ]);

        DB::table('tasks')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'task' => 'Set Duration',
        'description' => 'Set the time duration for experiment.',
        'task_points' => 200,
        'skill_level' => 2,
        'allotted_time' => '00:01:30',
        ]);

        DB::table('tasks')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'task' => 'Export by USB',
        'description' => 'Export an experimental data file using USB cable to a commputer.',
        'task_points' => 300,
        'skill_level' => 3,
        'allotted_time' => '00:02:30',
        ]);

        DB::table('tasks')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'task' => 'Label Run',
        'description' => 'Add a descriptive name to a data run.',
        'task_points' => 250,
        'skill_level' => 2,
        'allotted_time' => '00:01:30',
        ]);

        DB::table('tasks')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'task' => 'Strike Data',
        'description' => 'Strike data from a saved run.',
        'task_points' => 750,
        'skill_level' => 4,
        'allotted_time' => '00:02:30',
        ]);

        DB::table('tasks')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'task' => '3 in a Row',
        'description' => 'Demonstrate a sequence of 3 different skills.',
        'task_points' => 900,
        'skill_level' => 4,
        'allotted_time' => '00:02:30',
        ]);

        DB::table('tasks')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'task' => 'Reboot',
        'description' => 'Reboot the Labquest unit',
        'task_points' => 300,
        'skill_level' => 3,
        'allotted_time' => '00:03:30',
        ]);

        DB::table('tasks')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'task' => 'Linear Fit',
        'description' => 'Perform a linear fit on a graph.',
        'task_points' => 250,
        'skill_level' => 2,
        'allotted_time' => '00:02:00',
        ]);

        DB::table('tasks')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'task' => 'Create Local Network',
        'description' => 'Setup a local Wifi network from Labquest unit, give it a name and confirm from another WiFi enabled device.',
        'task_points' => 600,
        'skill_level' => 4,
        'allotted_time' => '00:03:30',
        ]);

        DB::table('tasks')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'task' => 'Connect WiFi',
        'description' => 'Connect Labquest unit to a WiFi network.',
        'task_points' => 400,
        'skill_level' => 3,
        'allotted_time' => '00:02:30',
        ]);

        DB::table('tasks')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'task' => 'View Table',
        'description' => 'View data in table view.',
        'task_points' => 150,
        'skill_level' => 1,
        'allotted_time' => '00:01:30',
        ]);

        DB::table('tasks')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'task' => 'Overlay Runs',
        'description' => 'Overlay 2 separate runs on one graph.',
        'task_points' => 200,
        'skill_level' => 2,
        'allotted_time' => '00:01:30',
        ]);

        DB::table('tasks')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'task' => 'Save File',
        'description' => 'Save file, must give it a descriptive name.',
        'task_points' => 250,
        'skill_level' => 2,
        'allotted_time' => '00:02:30',
        ]);

        DB::table('tasks')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'task' => 'Download to LoggerPro',
        'description' => 'Download data file to Labquest LoggerPro software on a computer.',
        'task_points' => 400,
        'skill_level' => 4,
        'allotted_time' => '00:03:30',
        ]);
    }
}
