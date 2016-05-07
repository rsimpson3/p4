<!doctype html>
<!-- Layouts for Welcome pages -->
<html>
<head>
    <title>
        {{-- Yield the title if it exists, otherwise default to 'Wheel of Vernier Game' --}}
        @yield('title','View of Vernier Game')
    </title>

    <meta charset='utf-8'>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/lumen/bootstrap.min.css' rel='stylesheet'>

    <link href='/css/welcome_index.css' type='text/css' rel='stylesheet'>

    <!-- logo links to homepage -->

    <a href='/'>
    <img
    src='/images/wheel_vernier.png'
    style='width:100px'
    alt='Wheel of Vernier Logo'>


    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')
</head>
<body>

    <nav>
        <ul>
            <!-- Guest navigation -->
            <li><a href='/rules'>Game Rules</a></li>
            <li><a href='/rubric'>Rubric</a></li>
            <li><a href='/points'>Points</a></li>
        </ul>
    </nav>

    <section>
        {{-- Main page content will be yielded here --}}
        @yield('content')
    </section>

    <footer>
        &copy; {{ date('Y') }} &nbsp;&nbsp;
        <a href='https://github.com/rsimpson3/p4' class='fa fa-github' target='_blank'> View on Github</a> &nbsp;&nbsp;
        <a href='http://p4.digitalbiolab.me/' class='fa fa-link' target='_blank'> View Live</a>
    </footer>

</body>
</html>