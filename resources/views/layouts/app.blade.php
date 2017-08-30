<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.meta')

    <title>Eziblog - @yield('title')</title>
    
    @include('partials.stylesheets')
</head>
<body>
    @include('partials.nav')
    
    <div class="container">
        @yield('content')
    </div>

    @include('partials.scripts')

    <script type="text/javascript">
        $(document).on('click' , '#login-link' , function(e) {
            e.preventDefault();

            $('.wrapper').load('/login #login-form');
        });

        $(document).on('click' , '#register-link' , function(e) {
            e.preventDefault();

            $('.wrapper').load('/register #register-form');
        });
    </script>
</body>
</html>