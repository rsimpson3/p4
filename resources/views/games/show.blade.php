@extends('layouts.master_game')

@section('head')

@stop

@section('title')
    Load Launch Information for Wheel of Vernier Game
@stop

@section('content')

    <h1 id="main-headline">Would you like to play Wheel of Vernier?</h1>

    <div data-role="page" data-theme="b">
        <div role="main" class="ui-content">
    		<div id="holder">
                <div id="spinner">
                    <img id="image" src="/images/wheel_vernier.png">
                    <img id="arrow" src="/images/arrow.png">
                </div>
            </div>
    	</div><!-- /wheet content -->

    <h2 id="user-name"> {{ Auth::user()->first_name }} </h2>

    <div id="player-info">
        <p>
        There are 24 tasks in the Wheel of Vernier game.<br>
        Your current skill level based on game results is {{ Auth::user()->skill_level_earned }}.<br> <br >

        Select your skill level.</p>
    </div>

        <form method='POST' action='/games/create'>

            {{ csrf_field() }}

            <div class="player-level">
                <div class='form-group'>
                    <fieldset>
                        <legend>Skill Level:</legend>
                        <label>
                        <input
                            type='radio'
                            value='beginning'
                            name='skill_level'
                        >
                        Beginning
                        </label>
                        <label>
                        <input
                            type='radio'
                            value='novice'
                            name='skill_level'
                        >
                        Novice
                        </label>
                        <label>
                        <input
                            type='radio'
                            value='proficient'
                            name='skill_level'
                        >
                        Proficient
                        </label>
                        <label>
                        <input
                            type='radio'
                            value='Advanced'
                            name='skill_level'
                        >
                        Advanced
                        </label>
                    </fieldset>
                </div>

            <button type='submit'> PLAY </button>

            <div class='error'>
                @if(count($errors) > 0)
                    Please correct the errors above and try again.
                @endif
            </div>

        </form>

            </div>
    </div>

@stop
