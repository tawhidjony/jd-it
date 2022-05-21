{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
    <body class="font-sans antialiased">

        <div class="min-h-screen bg-gray-100">

            <div class="fixed top-0 left-0 flex items-center w-full h-16 pl-8 pr-8 bg-white shadow-sm lg:pl-80">

                <div class="w-6 cursor-pointer lg:hidden" id="hambarger">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </div>

                <div class="relative hidden lg:block ">
                    <ion-icon name="search-outline" class="absolute w-6 text-gray-400 left-2 top-3 "></ion-icon>
                    <input type="text" class="block py-2 pr-2 text-base text-gray-600 bg-gray-100 border-none shadow w-72 rounded-3xl focus:outline-none pl-11">
                </div>
                <div class="items-center justify-center hidden ml-auto lg:flex">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-600 cursor-pointer hover:text-gray-900 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                    </div>
                    <div class="relative ml-4">
                        <div class="cursor-pointer">
                            <img id="dropdown" class="object-cover w-8 h-8 rounded-full " src="https://ui-avatars.com/api/?name=Tawhid+Jony&amp;background=EBF4FF&color=7F9CF5" alt="avatar">
                        </div>
                        <div id="dropdown_content" class="absolute right-0 z-50 hidden w-48 py-1 mt-2 bg-white rounded-md shadow-lg ">
                            <div class="px-4 py-2 text-xs text-gray-400">Manage Account</div>
                            <a href="#" class="block px-4 py-2 text-sm leading-5 text-gray-700 transition hover:bg-gray-100">Profile</a>
                            <div class="border-t border-gray-100"></div>
                            <a href="#" class="block px-4 py-2 text-sm leading-5 text-gray-700 transition hover:bg-gray-100">Logout</a>

                        </div>
                    </div>
                </div>
            </div>

            <div id="sidebar" class="fixed top-0 left-0 z-10 h-full transition-all bg-gray-800 shadow-md w-72 ">
                <div class="relative py-5 text-base font-bold text-center text-white uppercase bg-gray-500">
                    Laravel
                    <ion-icon id="sidebarClose" class="absolute block w-6 h-6 cursor-pointer lg:hidden right-3 top-5" name="close-outline"></ion-icon>
                </div>
                <div class="py-5">
                    <a href="#" class="flex items-end px-4 py-3 my-1 text-white bg-gray-900 border-l-4 border-blue-600">
                        <ion-icon class="w-5 h-5 mr-2" name="home-outline"></ion-icon>
                        <span class="w-5 h-5">Dashboard</span>
                    </a>

                    <a href="#" class="flex items-end px-4 py-3 my-1 text-white border-l-4 border-transparent hover:border-blue-600 hover:bg-gray-900">
                        <ion-icon class="w-5 h-5 mr-2" name="grid-outline"></ion-icon>
                        <span class="w-5 h-5">Category</span>
                    </a>
                    <a href="#" class="flex items-end px-4 py-3 my-1 text-white border-l-4 border-transparent hover:border-blue-600 hover:bg-gray-900">
                        <ion-icon class="w-5 h-5 mr-2" name="bag-handle-outline"></ion-icon>
                        <span class="w-5 h-5">Product</span>
                    </a>
                    <a href="#" class="flex items-end px-4 py-3 my-1 text-white border-l-4 border-transparent hover:border-blue-600 hover:bg-gray-900">
                        <ion-icon class="w-5 h-5 mr-2" name="people-outline"></ion-icon>
                        <span class="w-5 h-5">User</span>
                    </a>
                </div>
            </div>

            <div class="pt-24 pl-8 pr-8 lg:pl-80">
                <h1>Dashboard</h1>
            </div>

        </div>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script>
            document.getElementById('dropdown').addEventListener('click', function() {
                document.getElementById('dropdown_content').classList.toggle('hidden');
            });
            document.getElementById('hambarger').addEventListener('click', function() {
                document.getElementById('sidebar').classList.toggle('active');
            });
            document.getElementById('sidebarClose').addEventListener('click', function() {
                document.getElementById('sidebar').classList.remove('active');
            });
        </script>
    </body>
</html> --}}

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="bg-slate-100 dark:bg-slate-900">
    <div class="container-wrapper">
        @include('layouts.partials.sidebar')

        <div class="main">
            @include('layouts.partials.header')

            <div class="m-4 wrapper">
                {{ $slot }}
            </div>
        </div>
    </div>

    <!-- choose one -->
    <script src="{{ asset('js/custom.js') }}" defer></script>
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
