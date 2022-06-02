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
        'url' => 'https://upload.wikimedia.org/wikipedia/commons/3/3e/Cargomatic_%28Company%29_Logo.png',
    ],
    '2' => [
        'url' => 'https://upload.wikimedia.org/wikipedia/commons/3/3e/Cargomatic_%28Company%29_Logo.png',
    ],
    '3' => [
        'url' => 'https://upload.wikimedia.org/wikipedia/commons/3/3e/Cargomatic_%28Company%29_Logo.png',
    ],
    '4' => [
        'url' => 'https://upload.wikimedia.org/wikipedia/commons/3/3e/Cargomatic_%28Company%29_Logo.png',
    ],
    '5' => [
        'url' => 'https://upload.wikimedia.org/wikipedia/commons/3/3e/Cargomatic_%28Company%29_Logo.png',
    ],
    '6' => [
        'url' => 'https://upload.wikimedia.org/wikipedia/commons/3/3e/Cargomatic_%28Company%29_Logo.png',
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

    <section>
        <div class="h-auto md:my-6 lg:my-10 xl:my-10 2xl:my-10 space-y-4 text-center">
            <h3 class="text-4xl font-black capitalize "><span class="text-green-600">Our</span> Solutions</h3>
            <p class="w-3/6 mx-auto">
                With our innovative tools and solutions tailored to empower your business,
                you just need to sit back and see your problems solved, business
                operations accelerated and team productivity boosted.
            </p>
        </div>

        <div class="container md:my-14 lg:my-16 xl:my-[50px] 2xl:my-20">
            <div class="grid grid-cols-12 gap-10">
                @foreach ([1, 2, 3, 4, 5, 6] as $key => $item)
                    <div
                        class="md:col-span-6 lg:col-span-6 xl:col-span-4 2xl:col-span-4 h-[400px] bg-[#f1f2f3]  transition delay-150 duration-300 border-green-200 ease-in-out hover:-translate-y-4 hover:shadow-2xl hover:shadow-slate-300 border rounded ">

                        <div
                            class="flex flex-col items-center justify-start w-full px-5 md:py-4 lg:py-6 xl:py-8 2xl:py-8 md:space-y-4 lg:space-y-3 xl:space-y-4 2xl:space-y-6">
                            <div class="flex items-center justify-center w-20 h-20 border border-green-200 rounded-full ">
                                <i class="las la-bullhorn text-5xl origin-center -rotate-[33deg] "></i>
                            </div>
                            <h2 class="text-2xl font-black text-center">Digital Marketing</h2>
                            <p class="text-justify transition duration-300 ease-in-out delay-150">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem ad quasi animi placeat eveniet
                                reiciendis similique unde veritatis consequatur tempore, sunt architecto, obcaecati
                                inventore
                                necessitatibus dignissimos asperiores! Deserunt, quae dolorem.Iure, nihil dignissimos!
                            </p>
                            <a href="" class="flex items-center justify-center text-center text-green-600 ">Learn more
                                <i class="ml-2 las la-arrow-right"></i></a>
                        </div>

                    </div>
                @endforeach
                <div class="flex items-center justify-center col-span-12">
                    <a href="" class="items-center inline px-4 py-2 text-center text-white bg-green-600 rounded">Learn
                        more
                        <i class="ml-2 las la-arrow-right"></i></a>
                </div>
            </div>

        </div>

    </section>

    <section class="bg-slate-200 2xl:h-[450px]">
        <div class="container md:py-8 xl:py-10 2xl:py-12">
            <div
                class="md:flex md:flex-col-reverse lg:grid lg:grid-cols-2 lg:gap-10 xl:grid xl:grid-cols-2 xl:gap-10 2xl:grid 2xl:grid-cols-2 2xl:gap-10 md:py-4 lg:py-14">
                <div class="md:col-span-2">
                    <div class="md:mt-4 lg:mt-8 md:space-y-3 xl:pl-4 lg:space-y-6">
                        <div class="md:mb-8 xl:mb-8 2xl:mb-8">
                            <h2 class="text-2xl font-black">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                Sapiente
                                aliquid alias maxime expedita
                                molestiae non iure necessitatibus,</h2>
                            <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, a in!
                                Dolorem quas culpa sed
                                nemo esse soluta fuga. Repudiandae deleniti consequatur sunt et blanditiis iusto voluptatum
                                eos
                                iste ab. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, a in!
                                Dolorem quas culpa sed
                                nemo esse soluta fuga. Repudiandae deleniti consequatur sunt et blanditiis iusto voluptatum
                                eos
                                iste ab. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, a in!
                                Dolorem quas culpa sed
                                nemo esse soluta fuga. Repudiandae deleniti consequatur sunt et blanditiis iusto voluptatum
                                eos
                                iste ab.</p>
                        </div>
                        <div class="">
                            <a href=""
                                class="px-4 py-2 text-white capitalize bg-green-600 rounded md:mt-4 hover:shadow-2xl hover:shadow-green-500 ">Get
                                started</a>
                        </div>
                    </div>
                </div>
                <div class="md:col-span-2">
                    <div class="flex items-center justify-center">
                        <img src="{{ asset('assets/images/vector/bussiness-analytics.svg') }}" class="w-[480px] h-[350px]"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="2xl:h-[450px]">
        <div class="container md:py-8 xl:py-10 2xl:py-10">
            <div
                class="md:flex md:flex-col lg:grid lg:grid-cols-2 lg:gap-10 xl:grid xl:grid-cols-2 xl:gap-10 2xl:grid 2xl:grid-cols-2 2xl:gap-10 md:py-4 lg:py-14">
                <div class="col-span-1">
                    <div class="flex items-center justify-center">
                        <img src="{{ asset('assets/images/vector/cloud-hosting.svg') }}" class="w-[480px] h-[350px]"
                            alt="">
                    </div>
                </div>
                <div class="col-span-1">
                    <div class="md:mt-4 lg:mt-8 md:space-y-3 xl:pr-4 lg:space-y-6">
                        <div class="mb-8">
                            <h2 class="text-2xl font-black">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                Sapiente
                                aliquid alias maxime expedita
                                molestiae non iure necessitatibus,</h2>
                            <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, a in!
                                Dolorem quas culpa sed
                                nemo esse soluta fuga. Repudiandae deleniti consequatur sunt et blanditiis iusto voluptatum
                                eos
                                iste ab. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, a in!
                                Dolorem quas culpa sed
                                nemo esse soluta fuga. Repudiandae deleniti consequatur sunt et blanditiis iusto voluptatum
                                eos
                                iste ab. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, a in!
                                Dolorem quas culpa sed
                                nemo esse soluta fuga. Repudiandae deleniti consequatur sunt et blanditiis iusto voluptatum
                                eos
                                iste ab.</p>
                        </div>
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

    <section class="bg-slate-200 2xl:h-[350px]">
        <div class="container">

            <div
                class=" xl:mx-auto 2xl:mx-auto lg:mx-auto md:space-y-6 2xl:space-x-6 xl:space-x-6 lg:space-x-6 lg:flex lg:w-5/6 xl:flex xl:w-4/6 2xl:flex 2xl:w-4/6 py-14">

                <div
                    class="md:w-[230px] md:mx-auto lg:w-[330px] lg:h-[250px] xl:w-[330px] xl:h-[250px] 2xl:w-[330px] 2xl:h-[250px] overflow-hidden">
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

    {{-- portfolio --}}
    <section class="my-10">
        <div class="flex items-center justify-center my-10">
            <h2 class="inline px-3 text-2xl font-black text-center capitalize border-b-2 border-green-600 ">
                Portfolio
            </h2>
        </div>
        <div class="container">
            <div class="grid grid-cols-12 gap-6">
                @foreach ($portfolios as $item)
                    <div class="md:col-span-6 lg:col-span-4 xl:col-span-4 2xl:col-span-3">
                        <div class="overflow-hidden rounded h-[400px] border rounde"
                            style="background: url({{asset('storage')}}/{{ $item->img_url }})">
                            <div class="h-full p-2 backdrop-blur-[10px] bg-white/30">
                                <img class="object-contain h-full mx-auto duration-500 ease-in rounded hover:scale-125"
                                    src="{{asset('storage')}}/{{ $item->img_url }}" alt="">
                            </div>

                        </div>
                    </div>
                @endforeach

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
                            @foreach ($testimonials as $key=>$item)
                            <div>
                                <img class="p-1 transition duration-300 delay-150 rounded-full w-14 h-14 hover:-translate-y-2 hover:ring-1 hover:ring-green-600"
                                    src="{{asset('storage')}}/{{ $item->img_url }}" alt="">
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="w-4/6 mx-auto my-auto space-y-4">
                        <div class="flex items-center justify-center overflow-hidden ">
                            <img class="w-20 h-20 rounded-full"
                                src="{{asset('storage')}}/{{ $testimonials[0]->img_url }}" alt="">
                        </div>
                        <div class="w-full text-center">
                            <p class="text-sm font-light">{{$testimonials[0]->title}}</p>
                        </div>
                        <div class="w-full text-center">
                            <h2 class="text-2xl font-black text-green-600">{{$testimonials[0]->name}}</h2>
                            <p class="text-base font-extralight text-slate-400">{{$testimonials[0]->designation}}</p>
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
                @foreach ($partners as $item)
                    <div class="md:col-span-6  lg:col-span-4 xl:col-span-4 2xl:col-span-3">
                        <img src="{{ asset('storage') }}/{{ $item->img_url }}" class="object-contain w-full p-2 border rounded shadow h-28" alt="">
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
@push('scripts')
    <script></script>
@endpush
