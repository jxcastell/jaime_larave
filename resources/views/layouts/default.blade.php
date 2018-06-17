<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<div class="container">

    <header class="row">
        @include('includes.header')
    </header>

    <div id="main" class="row">

        @yield('content')

    </div>

    <footer class="row border border-success">

        <div class="col-4">&nbsp;</div>

        <div class="col-4">
            @include('includes.footer')
        </div>

        <div class="col-4">&nbsp;</div>
    </footer>

</div>
</body>
</html>