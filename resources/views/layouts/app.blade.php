<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} | Afriyan</title>
    <link rel="stylesheet" href="/css/app.css">
    {{ $styles }}
</head>

<body>

    <x-navbar></x-navbar>

    <div class="pt-4 mt-5">
        {{ $slot }}
    </div>

    <script src="/js/app.js"></script>
    {{ $scripts }}
</body>

</html>
