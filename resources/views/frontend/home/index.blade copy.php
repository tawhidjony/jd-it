@php
$slider = [
    '0' => [
        'url' => 'https://via.placeholder.com/1903x600',
    ],
    '1' => [
        'url' => 'https://via.placeholder.com/1903x600',
    ],
    '2' => [
        'url' => 'https://via.placeholder.com/1903x600',
    ],
    '3' => [
        'url' => 'https://via.placeholder.com/1903x600',
    ],
];
$portfolio = [
    '0' => [
        'url' => 'https://images.unsplash.com/photo-1528716321680-815a8cdb8cbe?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=776',
    ],
    '1' => [
        'url' => 'https://images.unsplash.com/photo-1556711905-4bd1b6603275?ixlib=rb-1.2.1&raw_url=true&q=80&fm=jpg&crop=entropy&cs=tinysrgb&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687',
    ],
    '2' => [
        'url' => 'https://images.unsplash.com/photo-1513477967668-2aaf11838bd6?ixlib=rb-1.2.1&raw_url=true&q=80&fm=jpg&crop=entropy&cs=tinysrgb&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687',
    ],
    '3' => [
        'url' => 'https://images.unsplash.com/photo-1495001258031-d1b407bc1776?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687',
    ],
    '4' => [
        'url' => 'https://images.unsplash.com/photo-1471400974796-1c823d00a96f?ixlib=rb-1.2.1&raw_url=true&q=80&fm=jpg&crop=entropy&cs=tinysrgb&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687',
    ],
    '5' => [
        'url' => 'https://images.unsplash.com/photo-1522120573867-e574959f84c8?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687',
    ],
    '6' => [
        'url' => 'https://images.unsplash.com/photo-1509042239860-f550ce710b93?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687',
    ],
    '7' => [
        'url' => 'https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?ixlib=rb-1.2.1&raw_url=true&q=80&fm=jpg&crop=entropy&cs=tinysrgb&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687',
    ],
];
$partner = [
    '0' => [
        'url' => 'https://upload.wikimedia.org/wikipedia/commons/3/3e/Cargomatic_%28Company%29_Logo.png',
    ],
    '1' => [
        'url' => 'https://www.pikpng.com/pngl/b/524-5241792_contact-big-company-logos-png-clipart.png',
    ],
    '2' => [
        'url' => 'https://www.pikpng.com/pngl/m/464-4645588_logo-big-construction-companies-in-the-philippines-clipart.png',
    ],
    '3' => [
        'url' => 'https://www.pikpng.com/pngl/m/212-2127944_latest-sports-news-on-cricket-badminton-tennis-and.png',
    ],
    '4' => [
        'url' => 'https://www.pikpng.com/pngl/m/13-137696_tennis-sega-sports-logo-png-transparent-sega-sports.png',
    ],
    '5' => [
        'url' => 'https://www.pikpng.com/pngl/m/13-136513_sega-sports-logo-png-transparent-graphics-clipart.png',
    ],
    '6' => [
        'url' => 'https://www.pikpng.com/pngl/m/13-136972_sega-game-gear-sega-game-gear-logo-clipart.png',
    ],
    '7' => [
        'url' => 'https://upload.wikimedia.org/wikipedia/commons/3/3e/Cargomatic_%28Company%29_Logo.png',
    ],
];
@endphp
@extends('layouts.frontend.app')
@section('title', 'Home page')
@section('content')
    @include('frontend.home.partials.slider')

    <section class="">
        <div class="h-auto my-10 space-y-4 text-center">
            <h3 class="text-4xl font-black capitalize "><span class="text-green-600">Our</span> Solutions</h3>
            <p class="w-2/6 mx-auto">
                With our innovative tools and solutions tailored to empower your business,
                you just need to sit back and see your problems solved, business
                operations accelerated and team productivity boosted.
            </p>
        </div>

        <div class="container my-28">
            <div class="grid grid-cols-3 gap-10">
                @foreach ([1,2,3,4,5,6]as $key => $item)
                <div
                class="col-span-1 h-[400px] bg-[#f1f2f3]  transition delay-150 duration-300 border-green-200 ease-in-out hover:-translate-y-4 hover:shadow-2xl hover:shadow-slate-300 border rounded ">
                <div class="flex flex-col items-center justify-start w-full px-5 py-8 space-y-6">
                    <div class="flex items-center justify-center w-20 h-20 border border-green-200 rounded-full ">
                        <i class="las la-bullhorn text-5xl origin-center -rotate-[33deg] "></i>
                    </div>
                    <h2 class="text-2xl font-black text-center">Digital Marketing</h2>
                    <p class="text-justify transition duration-300 ease-in-out delay-150">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem ad quasi animi placeat eveniet
                        reiciendis similique unde veritatis consequatur tempore, sunt architecto, obcaecati inventore
                        necessitatibus dignissimos asperiores! Deserunt, quae dolorem.Iure, nihil dignissimos!
                    </p>
                    <a href="" class="flex items-center justify-center text-center text-green-600 ">Learn more
                        <i class="ml-2 las la-arrow-right"></i></a>
                </div>
            </div>
                @endforeach


                <div
                    class="col-span-1 h-[400px] bg-[#f1f2f3]  transition delay-150 duration-300 border-green-200 ease-in-out hover:-translate-y-4 hover:shadow-2xl hover:shadow-slate-300 border rounded ">
                    <div class="flex flex-col items-center justify-start w-full px-5 py-8 space-y-6">
                        <div class="flex items-center justify-center w-20 h-20 border border-green-200 rounded-full ">
                            <i class="las la-bullhorn text-5xl origin-center -rotate-[33deg] "></i>
                        </div>
                        <h2 class="text-2xl font-black text-center">Digital Marketing</h2>
                        <p class="text-justify transition duration-300 ease-in-out delay-150">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem ad quasi animi placeat eveniet
                            reiciendis similique unde veritatis consequatur tempore, sunt architecto, obcaecati inventore
                            necessitatibus dignissimos asperiores! Deserunt, quae dolorem.Iure, nihil dignissimos!
                        </p>
                        <a href="" class="flex items-center justify-center text-center text-green-600 ">Learn more
                            <i class="ml-2 las la-arrow-right"></i></a>
                    </div>
                </div>
                <div
                    class="col-span-1 h-[400px] bg-[#f1f2f3]  transition delay-150 duration-300 ease-in-out hover:-translate-y-4 hover:shadow-2xl hover:shadow-slate-300 border rounded">
                    <div class="flex flex-col items-center justify-start w-full px-5 py-8 space-y-6 border-green-200">
                        <div class="flex items-center justify-center w-20 h-20 border border-green-200 rounded-full ">
                            <i class="las la-bullhorn text-5xl origin-center -rotate-[33deg] "></i>
                        </div>
                        <h2 class="text-2xl font-black text-center">Digital Marketing</h2>
                        <p class="text-justify transition duration-300 ease-in-out delay-150">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem ad quasi animi placeat eveniet
                            reiciendis similique unde veritatis consequatur tempore, sunt architecto, obcaecati inventore
                            necessitatibus dignissimos asperiores! Deserunt, quae dolorem.Iure, nihil dignissimos!
                        </p>
                        <a href="" class="flex items-center justify-center text-center text-green-600 ">Learn more
                            <i class="ml-2 las la-arrow-right"></i></a>
                    </div>
                </div>
                <div
                    class="col-span-1 h-[400px] bg-[#f1f2f3]  transition delay-150 duration-300 ease-in-out border-green-200 hover:-translate-y-4 hover:shadow-2xl hover:shadow-slate-300 border rounded">
                    <div class="flex flex-col items-center justify-start w-full px-5 py-8 space-y-6">
                        <div class="flex items-center justify-center w-20 h-20 border border-green-200 rounded-full ">
                            <i class="las la-bullhorn text-5xl origin-center -rotate-[33deg] "></i>
                        </div>
                        <h2 class="text-2xl font-black text-center">Digital Marketing</h2>
                        <p class="text-justify transition duration-300 ease-in-out delay-150">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem ad quasi animi placeat eveniet
                            reiciendis similique unde veritatis consequatur tempore, sunt architecto, obcaecati inventore
                            necessitatibus dignissimos asperiores! Deserunt, quae dolorem.Iure, nihil dignissimos!
                        </p>
                        <a href="" class="flex items-center justify-center text-center text-green-600 ">Learn more
                            <i class="ml-2 las la-arrow-right"></i></a>
                    </div>
                </div>
                <div
                    class="col-span-1 h-[400px] bg-[#f1f2f3]  transition delay-150 duration-300 border-green-200 ease-in-out hover:-translate-y-4 hover:shadow-2xl hover:shadow-slate-300 border rounded ">
                    <div class="flex flex-col items-center justify-start w-full px-5 py-8 space-y-6">
                        <div class="flex items-center justify-center w-20 h-20 border border-green-200 rounded-full ">
                            <i class="las la-bullhorn text-5xl origin-center -rotate-[33deg] "></i>
                        </div>
                        <h2 class="text-2xl font-black text-center">Digital Marketing</h2>
                        <p class="text-justify transition duration-300 ease-in-out delay-150">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem ad quasi animi placeat eveniet
                            reiciendis similique unde veritatis consequatur tempore, sunt architecto, obcaecati inventore
                            necessitatibus dignissimos asperiores! Deserunt, quae dolorem.Iure, nihil dignissimos!
                        </p>
                        <a href="" class="flex items-center justify-center text-center text-green-600 ">Learn more
                            <i class="ml-2 las la-arrow-right"></i></a>
                    </div>
                </div>
                <div
                    class="col-span-1 h-[400px] bg-[#f1f2f3]  transition delay-150 duration-300 ease-in-out hover:-translate-y-4 border-green-200 hover:shadow-2xl hover:shadow-slate-300 border rounded">
                    <div class="flex flex-col items-center justify-start w-full px-5 py-8 space-y-6">
                        <div class="flex items-center justify-center w-20 h-20 border border-green-200 rounded-full ">
                            <i class="las la-bullhorn text-5xl origin-center -rotate-[33deg] "></i>
                        </div>
                        <h2 class="text-2xl font-black text-center">Digital Marketing</h2>
                        <p class="text-justify transition duration-300 ease-in-out delay-150">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem ad quasi animi placeat eveniet
                            reiciendis similique unde veritatis consequatur tempore, sunt architecto, obcaecati inventore
                            necessitatibus dignissimos asperiores! Deserunt, quae dolorem.Iure, nihil dignissimos!
                        </p>
                        <a href="" class="flex items-center justify-center text-center text-green-600 ">Learn more
                            <i class="ml-2 las la-arrow-right"></i></a>
                    </div>
                </div>
                <div class="flex items-center justify-center col-span-3">
                    <a href="" class="items-center inline px-4 py-2 text-center text-white bg-green-600 rounded">Learn
                        more
                        <i class="ml-2 las la-arrow-right"></i></a>
                </div>
            </div>

        </div>

    </section>

    <section class="bg-slate-200 h-[450px]">
        <div class="container">
            <div class="grid grid-cols-2 gap-10 py-14">
                <div class="col-span-1">
                    <div class="mt-8 space-y-6">
                        <h2 class="text-2xl font-black">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sapiente
                            aliquid alias maxime expedita
                            molestiae non iure necessitatibus,</h2>
                        <p class="mt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, a in!
                            Dolorem quas culpa sed
                            nemo esse soluta fuga. Repudiandae deleniti consequatur sunt et blanditiis iusto voluptatum eos
                            iste ab. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, a in!
                            Dolorem quas culpa sed
                            nemo esse soluta fuga. Repudiandae deleniti consequatur sunt et blanditiis iusto voluptatum eos
                            iste ab. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, a in!
                            Dolorem quas culpa sed
                            nemo esse soluta fuga. Repudiandae deleniti consequatur sunt et blanditiis iusto voluptatum eos
                            iste ab.</p>
                        <div>
                            <a href=""
                                class="px-4 py-2 text-white capitalize bg-green-600 rounded hover:shadow-2xl hover:shadow-green-500 ">Get
                                started</a>
                        </div>
                    </div>
                </div>
                <div class="col-span-1">
                    <div class="flex items-center justify-center">
                        <img src="{{ asset('assets/images/vector/bussiness-analytics.svg') }}" class="w-[480px] h-[350px]"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="h-[450px]">
        <div class="container">
            <div class="grid grid-cols-2 gap-10 py-14">
                <div class="col-span-1">
                    <div class="flex items-center justify-center">
                        <img src="{{ asset('assets/images/vector/cloud-hosting.svg') }}" class="w-[480px] h-[350px]"
                            alt="">
                    </div>
                </div>
                <div class="col-span-1">
                    <div class="mt-8 space-y-6">
                        <h2 class="text-2xl font-black">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sapiente
                            aliquid alias maxime expedita
                            molestiae non iure necessitatibus,</h2>
                        <p class="mt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, a in!
                            Dolorem quas culpa sed
                            nemo esse soluta fuga. Repudiandae deleniti consequatur sunt et blanditiis iusto voluptatum eos
                            iste ab. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, a in!
                            Dolorem quas culpa sed
                            nemo esse soluta fuga. Repudiandae deleniti consequatur sunt et blanditiis iusto voluptatum eos
                            iste ab. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, a in!
                            Dolorem quas culpa sed
                            nemo esse soluta fuga. Repudiandae deleniti consequatur sunt et blanditiis iusto voluptatum eos
                            iste ab.</p>
                        <div>
                            <a href=""
                                class="px-4 py-2 text-white capitalize bg-green-600 rounded hover:shadow-2xl hover:shadow-[#00ff89] ">Get
                                started</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="bg-slate-200 h-[350px]">
        <div class="container">
            <div class="flex w-4/6 mx-auto space-x-6 py-14">
                <div class="w-[330px] h-[250px] overflow-hidden">
                    <img class="p-1 bg-contain border-2 border-green-500 rounded"
                        src="https://images.unsplash.com/photo-1474176857210-7287d38d27c6?ixlib=rb-1.2.1&raw_url=true&q=80&fm=jpg&crop=entropy&cs=tinysrgb&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170"
                        alt="">
                </div>
                <div class="flex-1">
                    <div class="space-y-3">
                        <h2 class="text-2xl font-black">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h2>
                        <p class="mt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, a in!
                            Dolorem quas culpa sed
                            nemo esse soluta fuga. Repudiandae deleniti consequatur sunt et blanditiis iusto voluptatum eos
                            iste ab. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, a in!
                            Dolorem quas culpa sed
                            nemo esse soluta fuga. Repudiandae deleniti consequatur sunt et blanditiis iusto voluptatum eos
                            iste ab. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, a in!
                            Dolorem quas culpa sed
                            nemo esse soluta fuga.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="my-10">
        <div class="flex items-center justify-center my-10">
            <h2 class="inline px-3 text-2xl font-black text-center capitalize border-b-2 border-green-600 ">
                Portfolio
            </h2>
        </div>
        <div class="container">
            <div class="grid grid-cols-12 gap-6">
                @foreach ($portfolio as $item)
                    <div class="col-span-3">
                        <div class="overflow-hidden rounded h-[400px] border rounde"
                            style="background: url({{ $item['url'] }})">

                            <div class="h-full p-2 backdrop-blur-[10px] bg-white/30">
                                <img class="object-contain h-full mx-auto duration-500 ease-in rounded hover:scale-125"
                                    src="{{ $item['url'] }}" alt="">
                            </div>

                        </div>
                    </div>
                @endforeach

                {{-- <div class="col-span-3">
                    <div class="overflow-hidden h-[400px]">
                        <img class="duration-500 ease-in hover:scale-125"
                            src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-1.2.1&raw_url=true&q=80&fm=jpg&crop=entropy&cs=tinysrgb&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687"
                            alt="">
                    </div>
                </div>
                <div class="col-span-3">
                    <div class="overflow-hidden h-[400px]">
                        <img class="duration-500 ease-in hover:scale-125"
                            src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-1.2.1&raw_url=true&q=80&fm=jpg&crop=entropy&cs=tinysrgb&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687"
                            alt="">
                    </div>
                </div>
                <div class="col-span-3">
                    <div class="overflow-hidden h-[400px]">
                        <img class="duration-500 ease-in hover:scale-125"
                            src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-1.2.1&raw_url=true&q=80&fm=jpg&crop=entropy&cs=tinysrgb&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687"
                            alt="">
                    </div>
                </div>
                <div class="col-span-3">
                    <div class="overflow-hidden h-[400px] bg-gradient-to-r from-cyan-500 to-blue-500">
                        <img class="w-full h-full m-6 overflow-hidden duration-500 ease-in hover:scale-125 "
                            src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-1.2.1&raw_url=true&q=80&fm=jpg&crop=entropy&cs=tinysrgb&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687"
                            alt="">
                    </div>
                </div>
                <div class="col-span-3">
                    <div class="overflow-hidden h-[400px]">
                        <img class="duration-500 ease-in hover:scale-125"
                            src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-1.2.1&raw_url=true&q=80&fm=jpg&crop=entropy&cs=tinysrgb&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687"
                            alt="">
                    </div>
                </div>
                <div class="col-span-3">
                    <div class="overflow-hidden h-[400px]">
                        <img class="duration-500 ease-in hover:scale-125"
                            src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-1.2.1&raw_url=true&q=80&fm=jpg&crop=entropy&cs=tinysrgb&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687"
                            alt="">
                    </div>
                </div>
                <div class="col-span-3">
                    <div class="overflow-hidden h-[400px]">
                        <img class="duration-500 ease-in hover:scale-125"
                            src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-1.2.1&raw_url=true&q=80&fm=jpg&crop=entropy&cs=tinysrgb&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687"
                            alt="">
                    </div>
                </div> --}}
            </div>
        </div>
    </section>

    {{-- Testmonial --}}
    <section class="bg-[#f5f7f9]">
        <div class="h-auto py-10">
            <div class="space-y-2">
                <h2 class="text-[18px] font-bold text-center text-green-600">
                    Testimonials
                </h2>
                <p class="text-2xl font-bold text-center text-gray-800">
                    What People Think About Our Products
                </p>
            </div>
            <div class="mt-10">
                <div
                    class="bg-white rounded-lg shadow-2xl relative w-[650px] h-[400px] mx-auto flex justify-center items-center ">
                    <div class="absolute top-16 -left-10">
                        <div
                            class="flex items-center justify-center w-20 h-20 rounded-lg shadow-2xl shadow-[#000] bg-gradient-to-r from-green-500 to-green-300">
                            <i class="text-4xl font-black text-white las la-quote-left"></i>
                        </div>
                    </div>
                    <div class="absolute top-0 bottom-0 -right-28">
                        <div class="flex flex-col items-center justify-end w-20 h-full space-y-4 rounded-lg">
                            <div>
                                <img class="p-1 transition duration-300 delay-150 rounded-full w-14 h-14 hover:-translate-y-2 hover:ring-1 hover:ring-green-600"
                                    src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880"
                                    alt="">
                            </div>
                            <div>
                                <img class="p-1 transition duration-300 delay-150 rounded-full w-14 h-14 hover:-translate-y-2 hover:ring-1 hover:ring-green-600"
                                    src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880"
                                    alt="">
                            </div>
                            <div>
                                <img class="p-1 transition duration-300 delay-150 rounded-full w-14 h-14 hover:-translate-y-2 hover:ring-1 hover:ring-green-600"
                                    src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="w-4/6 mx-auto my-auto space-y-4">
                        <div class="flex items-center justify-center overflow-hidden ">
                            <img class="w-20 h-20 rounded-full"
                                src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880"
                                alt="">
                        </div>
                        <div class="w-full text-center">
                            <p class="text-sm font-light">For a free contact form, this works great. They even include
                                form
                                submission data in the
                                admin,
                                which...

                            </p>
                        </div>
                        <div class="w-full text-center">
                            <h2 class="text-2xl font-black text-green-600">Brian Jackson</h2>
                            <p class="text-base font-extralight text-slate-400">CMO Of Kinsta</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    {{-- client & partner --}}
    <section class="my-10">
        <h2 class="w-full my-10 text-2xl font-black text-center text-green-600 capitalize">Client & partners</h2>

        <div class="container">
            <div class="grid grid-cols-12 gap-6">
                @foreach ($partner as $item)
                    <div class="col-span-3">
                        <img src="{{ $item['url'] }}" class="object-contain w-full p-2 border rounded shadow h-28"
                            alt="">
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
@push('scripts')
    <script></script>
@endpush
