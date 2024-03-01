<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    @yield('head')
</head>
<style>
    ::-webkit-scrollbar {
    width: 5px;
}

::-webkit-scrollbar-thumb {
    background-color: #00000073; /* Màu nền cho thanh cuộn */
}

::-webkit-scrollbar-track {
    background-color: #f1f1f1; /* Màu nền cho phần đường track */
}
</style>

<body x-data="{
    @foreach ($menuData as $data)
        {{ str_replace(' ', '_', $data['title']) }}: false,
        {{ str_replace(' ', '_', $data['title']) }}right: false, 
        {{ str_replace(' ', '_', $data['title']) }}dropDown: false,
        @if(isset($data['items']))
            @foreach ($data['items'] as $subData)
                {{ str_replace(' ', '_', $subData['title']) }}: false,
                {{ str_replace(' ', '_', $subData['title']) }}right: false,
            @endforeach
        @endif
    @endforeach
    mainMenu: false, drawer: false, outsideClick: false}" >

    @include('components.navbar.index')

    <div class="mt-[150px]">
        @yield('content')
    </div>

</body>
</html>