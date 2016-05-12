@extends('layouts.master_game')

@section('head')

@stop

@section('title')
    Load Wheel of Vernier Game
@stop

@section('content')
    <div data-role="page" data-theme="b">
        <!-- <div data-role="header">
            <h1>Tap to Spin</h1>
        </div> -->
    	<div role="main" class="ui-content">
    		<div id="holder">
                <div id="spinner">
                    <img id="image" src="/images/wheel_vernier.png">
                    <img id="arrow" src="/images/arrow.png">
                </div>

                <div id="task-viewer">
                    Tasks
                    <div id="dom-target" style="display: none;">

                    </div>
                </div>

                <button id="spinbutton">
                Spin
                </button>

                <p class="player-info">
                Foo Wheel <br>
                </p>
            </div>
    	</div><!-- /content -->
    </div><!-- /page -->


    <script>
    // add 7 degrees to offset arrow to middle of wheel slice
    var value = 7;
    // set variable for spin counts
    var spin_count = 1;
    // set initial variable for tasks
    var task_index = 0;
    // set variable to save last task index
    var last_task_index = 0;
    // bind clickhandler to button using jQuerymobile methods
    jq('#spinbutton').rotate({
        bind:
        {
            "click":function(){
                // 360 degrees / 24 = 15 degree per wheel piece
                var rot = Math.floor (Math.random() *24 ) * 15;
                // always require 1 revolution
                value += rot+360;
                // rotate wheel using cumlative degrees
                jq('#image').rotate({ animateTo:value})

                // calculate wheel task index 1 - 24
                if (last_task_index != 0) {
                    // remainder operator resets counter
                    task_index = (last_task_index + (rot/15))%24;
                } else {
                    // first spin
                    task_index = (rot/15);
                }
                // call task index from dbase & display task
                // attach text to taskviewer div
                jq("p").append("Count: "+ spin_count +" Rot = "+ rot +" task_index: "+ task_index+ "<br>");

                //$( "div.taskviewer" ).replaceWith( "task: "+ task_index );
                //save last task index, player spins where wheel landed
                last_task_index = task_index;
                // increment spin counter
                spin_count++;
            }
        }
    });
    </script>

@stop
