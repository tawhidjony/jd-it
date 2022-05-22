<div class="navigation border-l-[15px] border-gray-400 bg-gray-400 dark:border-gray-800 dark:bg-gray-800">
    <ul>
        <li>
            <a href="{{ route('dashboard') }}">
                <img src="https://jadrooit.com/wp-content/uploads/2022/04/2.png" style="width: 65%;
                margin-top: 25px;" alt="" />
            </a>
        </li>
        <li class="active">
            <a href="{{ route('dashboard') }}">
                <span class="text-lg icon las la-tachometer-alt"></span>
                <span class="title">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="">
                <span class="text-lg icon las la-user"></span>
                <span class="title">Users</span>
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
            <a href="">
                <span class="text-lg icon las la-cog"></span>
                <span class="title">Settings</span>
            </a>
        </li>

    </ul>
</div>
