<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    public static function getSkillsForRadiobuttons () {

        # pull skills from skills dbase - collection object
        $skills = \DB::table('skills')->get();

        # create blank array
        $skills_for_radiobuttons = [];

        # add skill_level text to array
        foreach ($skills as $skill) {
            $skills_for_radiobuttons[] = $skill->skill_level;
        }

        # pass array
        return $skills_for_radiobuttons;
    }
}
