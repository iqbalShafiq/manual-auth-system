<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? config('app.name') }}</title>
    <link href="https://unpkg.com/tailwindcss@^1.7/dist/tailwind.min.css" rel="stylesheet">
    <title>Document</title>
</head>

<body class="bg-gray-800 text-gray-300">
    <x-navbar></x-navbar>

    <div class="container mx-auto mt-8">
        @yield('content')
    </div>
</body>

</html>
