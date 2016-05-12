<!doctype html>
<!-- Layouts for Game pages -->
<html>
<head>
    <title>
        {{-- Yield the title if it exists, otherwise default to 'Wheel of Vernier Game' --}}
        @yield('title','View of Vernier Game')
    </title>

    <!-- jQuery plugins control game behavior optimized for mobile devices -->
    <script type="text/javascript" src="/js/jquery-1.12.3.js"></script>
    <script type="text/javascript" src="/js/jquery.mobile-1.4.2.min.js"></script>
    <script type="text/javascript" src="/js/jQueryRotateCompressed.js"></script>
    <script type="text/javascript" src="/js/jquery.easing.1.3.js"></script>

    <link rel="stylesheet" href="/css/themes/default/jquery.mobile-1.4.2.min.css" />
    <link href='/css/games_index.css' type='text/css' rel='stylesheet'>

    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')

    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script>
        var jq = $.noConflict();
    </script>



</head>
<body>
    <!-- reusable flash message  -->
    @if(Session::get('message') != null)
        <div class='flash_message'> {{ Session::get('message') }} </div>
    @endif

    <section>
        {{-- Main page content will be yielded here --}}
        @yield('content')
    </section>


</body>
</html>
