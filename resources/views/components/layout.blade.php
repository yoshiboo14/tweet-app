<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimum-scale=1.0 ">
    <meta http-equiv="X-UA=Compatible" content="ie=edge">

    <!-- これがtailwindを適応させる -->
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>{{ $title ?? 'つぶやきアプリ '}}</title>
</head>
<body class="bg-gray-50">
    {{ $slot }}
</body>
</html>