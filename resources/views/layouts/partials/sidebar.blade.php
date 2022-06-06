@php
    $sideBarMenuList = [
        '0' => [
            'icon' => 'las la-tachometer-alt',
            'route' => 'dashboard',
            'name' => 'Dashboard',
            'active' =>'active',
            ],
        '1' => [
            'icon' => 'las la-box',
            'route' => 'slider.index',
            'name' => 'Sliders',
            'active' =>'',
            ],
        '2' => [
            'icon' => 'las la-box',
            'route' => 'portfolio.index',
            'name' => 'Portfolios',
            'active' =>'',
            ],
        '3' => [
            'icon' => 'las la-box',
            'route' => 'testimonial.index',
            'name' => 'Testimonials',
            'active' =>'',
            ],
        '4' => [
            'icon' => 'las la-box',
            'route' => 'partner.index',
            'name' => 'Partners',
            'active' =>'',
            ],
        '5' => [
            'icon' => 'las la-box',
            'route' => 'contact.list',
            'name' => 'Contacts',
            'active' =>'',
            ],
        '6' => [
            'icon' => 'las la-box',
            'route' => 'news_letters.index',
            'name' => 'News Letter',
            'active' =>'',
            ],
        '6' => [
            'icon' => 'las la-box',
            'route' => 'career.index',
            'name' => 'Careers',
            'active' =>'',
            ],
    ];
@endphp

<div class="navigation border-l-[15px] border-gray-400 bg-gray-400 dark:border-gray-800 dark:bg-gray-800">
    <ul>
        <li>
            <a href="{{route('/')}}">
                <span class="text-4xl text-white icon las la-stop-circle"></span>
                <span class="text-xl text-white uppercase title">Jadroo-IT </span>
            </a>
        </li>
        @foreach ($sideBarMenuList as $key=>$item)
            <li class=" {{ Route::currentRouteName() == $item['route'] ? 'active' : ''}} ">
                <a href="{{route($item['route'])}}">
                    <span class="text-lg icon {{$item['icon']}}"></span>
                    <span class="title">{{$item['name']}}</span>
                </a>
            </li>
        @endforeach

        {{-- <li class="active">
            <a href="{{route('slider.index')}}">
                <span class="text-lg icon las la-user"></span>
                <span class="title">Slider</span>
            </a>
        </li>
        <li>
            <a href="">
                <span class="text-lg icon lab la-product-hunt"></span>
                <span class="title">Products</span>
            </a>
        </li>
        <li>
            <a href="">
                <span class="text-lg icon las la-shopping-bag"></span>
                <span class="title">Orders</span>
            </a>
        </li>
        <li>
            <a href="{{ route('roles.index') }}">
                <span class="text-lg icon las la-shield-alt"></span>
                <span class="title">Roles</span>
            </a>
        </li>
        <li>
            <a href="{{ route('settings') }}">
                <span class="text-lg icon las la-cog"></span>
                <span class="title">Settings</span>
            </a>
        </li> --}}

    </ul>
</div>
