<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Game;

class GameController extends Controller {

    /**
     * Responds to requests to GET /games/show/
     * Only logged in players see route
     */
    public function getShow() {

        # pull skills from skills dbase - collection object
        // $skills = \DB::table('skills')->get();

        //dd($skills);

        $skills_for_radiobuttons = \App\Skill::getSkillsForRadiobuttons();

        # skill level int pulled from Users dbase
        $skillLevelNum = \Auth::user()->skill_level_earned;

        # grab skill level name for Auth user using Skill model

        if ($skillLevelNum != 0 ) {
            $skillLevelName = \App\Skill::find($skillLevelNum);

            $skillLevelName = $skillLevelName->skill_level;
            }
        else {
            $skillLevelName = 'New player, need to select skill level.';
        }

        //dd($skillLevelName);

        # pass skills object, Auth::user skill level name & skilllevelNum
        return view('games.show')
            ->with('skills_for_radiobuttons',$skills_for_radiobuttons)
            ->with('skillLevelName',$skillLevelName)
            ->with('skillLevelNum',$skillLevelNum);
    }

    /**
     * Responds to requests to POST /games/show/
     */
    public function postShow() {

        # loads first view of wheel
        # user must be logged in to play/spin wheel
        return view('Ready to Play,');
    }

    public function getCreate() {

        # use Task model
        $tasks = \App\Task::all();

        # loads first view of wheel
        # user must be logged in to play/spin wheel
        return view('games.create');
    }

    public function postCreate(Request $request) {

        # use Task model
        $tasks = \App\Task::all()->toArray();
        //dd($tasks);

        // Validate the request data
       $this->validate($request, [
           'skill_level' => 'required',
       ]);

       //return 'Skill level:'.$request->input('skill_level');

        # loads first view of wheel
        # user must be logged in to play/spin wheel
        return view('games.create')->with('tasks',$tasks);

    }


}
