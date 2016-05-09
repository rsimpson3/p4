@extends('layouts.master_game')

@section('head')
    <script>
        $("document").ready(function() {
            $("p").append("<p>The page just loaded!</p>");
        });
    </script>

    <script type="text/javascript">

        // $(document).on('pagebeforecreate', function (evt) {
        //     alert('pagebeforecreate fired');
        // });

        $(document).on('pagecontainerload', function (evt,data) {
            alert("page loaded:\nURL " + data.url);
        });

        var value = 7;
        document.addEventListener("deviceready",onDeviceReady, false);

        function onDeviceReady(){
            $("#image").rotate({
                bind:
                {
                    touchstart: function(){
                        var rot = Math.floor (Math.random() *24 ) * 15;
                        value += rot+360;
                        $(this).rotate({ animateTo:value})
                    }
                }
            });
        }
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
                Foo Wheel
                </p>
            </div>
    	</div><!-- /content -->

    </div><!-- /page -->

@stop
