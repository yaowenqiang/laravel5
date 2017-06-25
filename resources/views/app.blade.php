<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
{{--        @include('partials.flash')--}}
        @include('flash::message')
        @yield('content')
    </div>
@yield('footer')
    {{--<script src="//code.jquery.com/jquery.js"></script>--}}
    {{--<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>--}}
    {{--<script>--}}
        {{--$('#flash-overlay-modal').modal();--}}
{{--//        $('div.alert').not('.alert-important').delay(3000).slideUp();--}}
    {{--</script>--}}
</body>
</html>