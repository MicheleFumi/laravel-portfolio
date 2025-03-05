<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'lista dei post')</title>
    @vite('resources/js/app.js')
</head>

<body>
    <div class="container">
        <div>
            <h1 class="my-3">@yield('title', 'lista dei post')</h1>
        </div>

        @yield('content')
    </div>
</body>

</html>
