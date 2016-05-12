<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    $user = \App\User::firstOrCreate(['email' => 'jill@harvard.edu']);
    $user->first_name = 'Jill';
    $user->last_name = 'Foo';
    $user->school = 'Other';
    $user->email = 'jill@harvard.edu';
    $user->skill_level_earned = 2;
    $user->password = \Hash::make('helloworld');
    $user->save();

    $user = \App\User::firstOrCreate(['email' => 'jamal@harvard.edu']);
    $user->first_name = 'Jamal';
    $user->last_name = 'Foo';
    $user->school = 'Other';
    $user->email = 'jamal@harvard.edu';
    $user->skill_level_earned = 2;
    $user->password = \Hash::make('helloworld');
    $user->save();

    $user = \App\User::firstOrCreate(['email' => 'robert_simpson@hms.harvard.edu']);
    $user->first_name = 'Robert';
    $user->last_name = 'Simpson';
    $user->school = 'Other';
    $user->email = 'robert_simpson@hms.harvard.edu';
    $user->skill_level_earned = 3;
    $user->password = \Hash::make('helloworld');
    $user->save();

    }
}
