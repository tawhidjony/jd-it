<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') {{ config('app.name', 'Jadroo-IT') }}</title>

    @livewireStyles
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
         <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="bg-slate-100 dark:bg-[#081724]">
    <div class="container-wrapper">
        @include('layouts.partials.sidebar')
        <div class="main">
            @include('layouts.partials.header')
            <div class="m-4 wrapper">
                {{ $slot }}
            </div>
        </div>
    </div>

    @livewireScripts
    <!-- choose one -->
     <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="https://unpkg.com/flowbite@1.4.5/dist/flowbite.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/custom.js') }}" defer></script>
    <script src="{{asset('js/notification.js')}}"> </script>
    <script>
        // Toggle menu
        const toggle = document.getElementById("toggleIcon");
        const navigation = document.querySelector(".navigation");
        const mainArea = document.querySelector(".main");
        toggle.onclick = function() {
            navigation.classList.toggle("active");
            mainArea.classList.toggle("active");
        };

        // Dropdown Menu
        const dropdown = document.getElementById("dropdown");
        const dropdownContent = document.getElementById("dropdown_content");
        dropdown.onclick = function() {
            dropdownContent.classList.toggle("hidden");
        };

        //Role create checkbox
        const checkAll = document.getElementById('select-all');
        checkAll.onclick = function() {
            const checkboxes = document.querySelectorAll('input[type=checkbox]');
            checkboxes.forEach(checkbox => {
                checkbox.checked = this.checked;
            });
        };
    </script>
</body>

</html>
