<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>{{ $title ?? 'Page Title' }}</title>
</head>
<style>
    ::-webkit-scrollbar {
        width: 5px;
    }

    ::-webkit-scrollbar-thumb {
        background-color: #00000073;
        /* Màu nền cho thanh cuộn */
    }

    ::-webkit-scrollbar-track {
        background-color: #f1f1f1;
        /* Màu nền cho phần đường track */
    }
</style>

<body>
    {{ $slot }}
</body>

</html>
