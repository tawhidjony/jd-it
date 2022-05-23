<div class="bg-white  shadow top-nav dark:bg-gray-800">
    <div class="toggle-nav">
        <span id="toggleIcon" class="text-2xl cursor-pointer las la-bars dark:text-white"></span>
    </div>

    <div class="flex items-center gap-6">
        <div>
            <i id="sun" class="text-3xl text-white las la-sun"></i>
            <i id="moon" class="text-3xl las la-moon"></i>
        </div>
        <div class="relative">
            <div class="flex flex-row gap-5 cursor-pointer">
                <div class="leading-[1] mt-2">
                    <h3 class="dark:text-white">{{ Auth::user()->name }}</h3>
                    <small class="text-gray-400">Admin</small>
                </div>
                <img id="dropdown" class="w-10 h-10 rounded-full"
                    src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}&amp;background=EBF4FF&color=7F9CF5"
                    alt="" />
            </div>
            <div id="dropdown_content"
                class="absolute right-0 z-50 hidden w-48 py-1 mt-2 bg-white dark:bg-gray-800 dark:border dark:border-gray-700 rounded-md shadow-lg">
                <div class="px-4 py-2 text-xs text-gray-400">Manage Account</div>
                <a href="{{ route('profile') }}"
                    class="block px-4 py-2 text-sm leading-5 text-gray-700 transition dark:text-gray-100 hover:bg-gray-100 dark:hover:bg-[#121212]"><i
                        class="las la-user-circle"></i> Profile</a>
                <div class="border-t border-gray-100 dark:border-gray-700"></div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a class="block px-4 py-2 text-sm leading-5 text-gray-700 transition dark:text-gray-100 hover:bg-gray-100 dark:hover:bg-[#121212]"
                        href="route('logout')" onclick="event.preventDefault();
                                            this.closest('form').submit();">
                        <i class="las la-sign-out-alt"></i> Logout
                    </a>
                </form>

            </div>
        </div>
    </div>
</div>
