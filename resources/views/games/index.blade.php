@extends('layouts.master_game')

@section('head')

    <script type="text/javascript">

    </script>

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

                <button id="spinbutton">
                Spin
                </button>

                <p id="foo">
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
    $('#spinbutton').rotate({
        bind:
        {
            "click":function(){
                // 360 degrees / 24 = 15 degree per wheel piece
                var rot = Math.floor (Math.random() *24 ) * 15;
                // always require 1 revolution
                value += rot+360;
                // rotate wheel using cumlative degrees
                $('#image').rotate({ animateTo:value})

                // calculate wheel task index 1 - 24
                if (last_task_index != 0) {
                    // remainder operator resets counter
                    task_index = (last_task_index + (rot/15))%24;
                } else {
                    // first spin
                    task_index = (rot/15);
                }
                //
                $("p").append("Count: "+ spin_count +" Rot = "+ rot +" task_index: "+ task_index+ "<br>");

                //save last task index, player spins where wheel landed
                last_task_index = task_index;
                // increment spin counter
                spin_count++;
            }
        }
    });

    </script>

@stop
