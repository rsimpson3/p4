<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GameController extends Controller {

    /**
     * Responds to requests to GET /games/show/
     */
    public function getShow() {

        # loads first view of wheel
        # user must be logged in to play/spin wheel
        return view('games.show');
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

        //dd($request->all());

        // Validate the request data
       $this->validate($request, [
           'skill_level' => 'required',
       ]);

       //return 'Skill level:'.$request->input('skill_level');

        # loads first view of wheel
        # user must be logged in to play/spin wheel
        return view('games.create');
    }


}
