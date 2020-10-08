<!doctype html>
<html>
<head>
    @include('head')
</head>
<body>
<div class="container">

    <header>
        @include('header')
    </header>
    <div>
        @yield('content')
    </div>
    <footer>
        @include('footer')
    </footer>

</div>
</body>
</html>
