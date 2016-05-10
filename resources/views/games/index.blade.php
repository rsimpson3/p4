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
    
    var value = 7;
    $('#spinbutton').rotate({
        bind:
        {
            "click":function(){
                // 360 degrees / 24 = 15 degree per wheel piece
                var rot = Math.floor (Math.random() *24 ) * 15;
                value += rot+360;
                $('#image').rotate({ animateTo:value})
            }
        }
    });

    </script>

@stop
