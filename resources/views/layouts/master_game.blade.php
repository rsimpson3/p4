<!doctype html>
<!-- Layouts for Game pages -->
<html>
<head>
    <title>
        {{-- Yield the title if it exists, otherwise default to 'Wheel of Vernier Game' --}}
        @yield('title','View of Vernier Game')
    </title>

    <meta charset='utf-8'>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/themes/default/jquery.mobile-1.4.2.min.css" />

</head>
<body>

    <section>
        {{-- Main page content will be yielded here --}}
        @yield('content')
    </section>

</body>
</html>
