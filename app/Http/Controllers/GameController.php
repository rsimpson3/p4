<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Game;

class GameController extends Controller {

    /**
     * Responds to requests to GET /games/show/
     */
    public function getShow() {

        # find current user logged in
        //$first_name = \Auth::get('first_name');

        //dd($first_name);

        # collection object
        $skill = \App\User::where('id', '=', '1')->get();

        //dd($skill);

        return view('games.show')->with('skill',$skill);
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
