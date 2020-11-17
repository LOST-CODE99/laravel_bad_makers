<!doctype html>
<html lang="en">
<head>
   <link rel="stylesheet" href="css/app.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   <meta charset="UTF-8">
   <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>@yield('title-block')</title>
</head>
<body>
    @include('include.header')
    <div class="container"style="padding:0;" >
        <div class="row">
            <div class ="mx-auto">
                @yield('content')
            </div>
        </div>
    </div>
    @include('include.footer')
</body>
</html>
