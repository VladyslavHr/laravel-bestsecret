<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- CSS only -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/main.css?v=' . filemtime(public_path('css/main.css')) ) }}">

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <title>Document</title>

    @livewireStyles
</head>
<body>


    @include('layouts.blocks.header')
    <main class="py-4">
        @yield('content')
    </main>
    @include('layouts.blocks.footer')


    <!-- JavaScript Bundle with Popper -->
    <script src="{{ asset("js/bootstrap.bundle.min.js") }}"></script>
    @livewireScripts
    <script src="{{ asset ('js/main.js?v=' . filemtime(public_path('js/main.js')) ) }}"></script>


</body>
</html>
