<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>DC-comics</title>
</head>
<body>
@include('partials.header', ['links' => config('header_menu')])

<main>
    @yield('content')
</main>

@include('partials.footer', ['links' => config('header_menu')])
</body>
</html>