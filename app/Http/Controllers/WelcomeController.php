<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WelcomeController extends Controller {

    /**
    * Responds to requests to GET /
    */
    public function getIndex() {

        # Logged in users should not see the welcome page, send them to the books index instead.
        // if(\Auth::check()) {
        //     return redirect('/books');
        // }

        return view('welcome.guest');
    }

    /**
    * Responds to requests to GET /
    */
    public function getRules() {

        # Logged in users should not see the welcome page, send them to the books index instead.
        // if(\Auth::check()) {
        //     return redirect('/books');
        // }

        return view('welcome.rules');
    }

    /**
    * Responds to requests to GET /
    */
    public function getRubric() {

        # Logged in users should not see the welcome page, send them to the books index instead.
        // if(\Auth::check()) {
        //     return redirect('/books');
        // }

        return view('welcome.rubric');
    }

    /**
    * Responds to requests to GET /
    */
    public function getPoints() {

        # Logged in users should not see the welcome page, send them to the books index instead.
        // if(\Auth::check()) {
        //     return redirect('/books');
        // }

        return view('welcome.points');
    }

}
