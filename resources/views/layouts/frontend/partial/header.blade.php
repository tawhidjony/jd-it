@php
$megamenu = [
    '0' => [
        'icon' => 'las la-laptop-code',
        'url' => '#',
        'title' => 'Web development',
        'decs' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
    ],
    '1' => [
        'icon' => 'lab la-google-play',
        'url' => '#',
        'title' => 'App development',
        'decs' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
    ],
    '2' => [
        'icon' => 'las la-palette',
        'url' => '#',
        'title' => 'Graphics design',
        'decs' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
    ],
    '3' => [
        'icon' => 'las la-chart-line',
        'url' => '#',
        'title' => 'Digital Marketing',
        'decs' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
    ],
    '4' => [
        'icon' => 'lab la-searchengin',
        'url' => '#',
        'title' => 'SEO',
        'decs' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
    ],
    '5' => [
        'icon' => 'las la-cut',
        'url' => '#',
        'title' => 'Clipping path',
        'decs' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
    ],
    '6' => [
        'icon' => 'las la-network-wired',
        'url' => '#',
        'title' => 'Domain ',
        'decs' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
    ],
    '7' => [
        'icon' => 'las la-server',
        'url' => '#',
        'title' => 'Hosting',
        'decs' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
    ],
    '8' => [
        'icon' => 'las la-wind',
        'url' => '#',
        'title' => 'Machine learning',
        'decs' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
    ],
];

@endphp
<header>
    <div class="h-20">
        <div class="container flex items-center justify-between h-full">
            <div class="flex items-center">
                <img src="https://jadrooit.com/wp-content/uploads/2022/04/2.png" alt="" class="pr-3 w-36">
                <h1 class="pl-3 text-2xl border-l">Jadroo-IT</h1>
            </div>
            <div>
                <a href="{{ route('contact.index') }}" class="px-4 py-2 text-white bg-green-600 rounded shadow-sm">Get
                    in
                    Contact</a>
            </div>
        </div>
    </div>

    <nav class="bg-[#1e293b] md:hidden lg:block ">
        <div class="container flex items-center h-full">
            <div class="p-0 m-0 mega_menu" id="mobile-menu">
                <ul class="relative flex items-center justify-center 2xl:space-x-4 2xl:py-3 text-white">
                    <li class="lg:px-3 lg:py-2 xl:px-3 xl:py-2 hover:text-green-600"><a href="">Home</a></li>
                    <li class="lg:px-3 lg:py-4 xl:px-3 xl:py-2 hover:text-green-600 ">
                        <a href="#">Services</a>
                        <div class="z-10 mt-4 sub_menu bg-white border rounded ">
                            <div class="grid grid-cols-12 gap-6">
                                @foreach ($megamenu as $item)
                                    <div class="col-span-4">
                                        <a href="#" class="flex p-2 hover:bg-gray-200 hover:rounded cursor-pointer">
                                            <div class="flex-none bg-green-600 w-12 h-12 rounded-full ">
                                                <i
                                                    class="{{ $item['icon'] }} text-2xl text-white flex justify-center items-center w-full h-full "></i>
                                            </div>
                                            <div class="flex-initial pl-3">
                                                <h3 class="text-base font-black text-gray-900 capitalize">
                                                    {{ $item['title'] }}</h3>
                                                </h3>
                                                <p class="text-slate-500 text-sm">{{ $item['decs'] }}</p>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </li>
                    <li class="lg:px-3 xl:px-3 lg:py-2 xl:py-2 hover:text-green-600"><a href="">Product</a></li>
                    <li class="lg:px-3 xl:px-3 lg:py-2 xl:py-2 hover:text-green-600"><a href="">About</a></li>
                    <li class="lg:px-3 xl:px-3 lg:py-2 xl:py-2 hover:text-green-600"><a href="">Career</a></li>
                    <li class="lg:px-3 xl:px-3 lg:py-2 xl:py-2 hover:text-green-600"><a href="">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
