@extends('layouts.master_game')

@section('head')

@stop

@section('title')
    Load Launch Information for Wheel of Vernier Game
@stop

@section('content')

    <h1>Would you like to play Wheel of Vernier?</h1>

    <div data-role="page" data-theme="b">
        <div role="main" class="ui-content">
    		<div id="holder">
                <div id="spinner">
                    <img id="image" src="/images/wheel_vernier.png">
                    <img id="arrow" src="/images/arrow.png">
                </div>
            </div>
    	</div><!-- /content -->
        <div class="player-info">
            <p>
                There are 24 tasks on the Wheel of Vernier.<br>
                Would you like to Play?
            </p>
            <button type='submit' action='/games/spin'> Yes </button>
        </div>
    </div>

@stop
