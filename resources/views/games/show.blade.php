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
        There are 24 tasks in the Wheel of Vernier game.

        @if ($skillLevelNum != 0)
            Your skill level is {{ $skillLevelName }} <br>
            Select PLAY to begin a game.
        @else
            You are a new player. Select what you believe is your skill level.
        @endif
        </p>
    </div>

        <form method='POST' action='/games/create'>

            {{ csrf_field() }}

            <div class="player-level">
                <div class='form-group'>

                    <fieldset>
                        <legend>Skill Level:</legend>

                            @foreach($skills_for_radiobuttons as $skills_for_radiobutton)
                                <label>
                                <input
                                    type='radio'
                                    value='{{ $skills_for_radiobutton }}'
                                    name='skill_level'
                                    {{ ($skillLevelName == $skills_for_radiobutton) ? 'CHECKED' : '' }}
                                >
                                {{ $skills_for_radiobutton }}
                                </label>
                            @endforeach
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
