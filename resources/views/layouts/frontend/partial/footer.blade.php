<footer class="mt-28">

    <div class="parent">
        <div class="child"></div>
        <div class="child1"></div>
        <div class="child2">
            <div class="container">
                <div class="flex justify-between items-center mt-32 border-b">
                    <div class="w-full h-full space-y-6 flex flex-col justify-end items-center  pr-8 pb-6">
                        <div>
                            <img src="https://jadrooit.com/wp-content/uploads/2022/04/2.png" class="w-48"
                                alt="">
                        </div>
                        <div>
                            <ul class="flex space-x-6">
                                <li
                                    class="flex justify-center items-center w-10 rotate-[-136deg] h-10 bg-green-600 rounded transition duration-300 delay-150 hover:-translate-y-2 shadow-2xl shadow-green-400">
                                    <a href="" class="rotate-[136deg] text-white"><i
                                            class="lab la-facebook text-2xl  "></i></a>
                                </li>
                                <li
                                    class="flex justify-center items-center w-10 rotate-[-136deg] h-10 bg-green-600 rounded transition duration-300 delay-150 hover:-translate-y-2">
                                    <a href="" class="rotate-[136deg] text-white"><i
                                            class="lab la-youtube text-2xl  "></i></a>
                                </li>
                                <li
                                    class="flex justify-center items-center w-10 rotate-[-136deg] h-10 bg-green-600 rounded transition duration-300 delay-150 hover:-translate-y-2">
                                    <a href="" class="rotate-[136deg] text-white"><i
                                            class="lab la-linkedin-in text-2xl  "></i></a>
                                </li>
                                <li
                                    class="flex justify-center items-center w-10 rotate-[-136deg] h-10 bg-green-600 rounded transition duration-300 delay-150 hover:-translate-y-2">
                                    <a href="" class="rotate-[136deg] text-white"><i
                                            class="lab la-instagram text-2xl  "></i></a>
                                </li>
                            </ul>


                        </div>
                    </div>
                    <div class="h-full w-full border-l border-r border-gray-50 px-8 pb-6">
                        <form action="{{route('newsLetter.store')}}" method="POST">
                        <div class="flex flex-col justify-center items-center h-full space-y-4">
                            <h2 class="text-white font-black text-2xl">GET OUR NEWSLETTER</h2>
                                @csrf
                                <input type="text" name="email" class="rounded w-full" placeholder="Email" />
                                <button type="submit" class="rounded px-3 py-2 bg-green-600 text-white">SUBMIT</button>
                            </div>
                        </form>
                    </div>
                    <div class="h-full w-full ml-8 pb-6">
                        <div>
                            <ul class="text-white space-y-1">
                                <li><a href="">Terms & Conditions</a></li>
                                <li><a href="">Privacy Policy</a></li>
                                <li><a href="">Disclaimer</a></li>
                                <li><a href="">Terms & Conditions</a></li>
                                <li><a href="">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="w-full text-white py-4">
                    <p class="text-center capitalize">copyright@2022 </p>
                </div>
            </div>
        </div>
    </div>
