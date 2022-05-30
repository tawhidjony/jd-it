@php
    $sideBarMenuList = [
        '0' => [
            'icon' => '',
            'route' => 'slider.index',
            'title' => 'Slider',
            ],
        '1' => [
            'icon' => '',
            'route' => 'slider.index',
            'title' => 'Slider',
            ],
        '2' => [
            'icon' => '',
            'route' => 'slider.index',
            'title' => 'Slider',
            ],
        '3' => [
            'icon' => '',
            'route' => 'slider.index',
            'title' => 'Slider',
            ],
        '4' => [
            'icon' => '',
            'route' => 'slider.index',
            'title' => 'Slider',
            ],
        '5' => [
            'icon' => '',
            'route' => 'slider.index',
            'title' => 'Slider',
            ],
        '6' => [
            'icon' => '',
            'route' => 'slider.index',
            'title' => 'Slider',
            ],
];
@endphp

<div class="navigation border-l-[15px] border-gray-400 bg-gray-400 dark:border-gray-800 dark:bg-gray-800">
    <ul>
        <li>
            <a href="">
                <span class="text-4xl text-white icon lab la-laravel"></span>
                <span class="text-xl text-white uppercase title">Jadroo-IT </span>
            </a>
        </li>
        <li class="active">
            <a href="">
                <span class="text-lg icon las la-tachometer-alt"></span>
                <span class="title">Dashboard</span>
            </a>
        </li>
        <li>
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
        </li>

    </ul>
</div>
