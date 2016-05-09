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
        return view('games.index');
    }
}
