@php
$serviceItems = ['Web development', 'App development', 'Graphics design', 'Digital Marketing', 'SEO', 'Clipping path', 'Domain ', 'Hosting'];
@endphp
@extends('layouts.frontend.app')
@section('title', 'Contact us')
@section('content')
    <section class="mt-20">
        <div class="container">
            <div class="grid grid-cols-12 gap-8">
                <div class="col-span-4">
                 <div class="space-y-10 px-8 ">
                    <div class="space-y-4">
                        <h2 class="font-black text-2xl text-center underline">Bangladesh Office</h2>
                        <p class="text-base"><span><i class="las la-home text-xl font-black"></i></span>
                            KA-18/1 (8th,9th, 10th floor), Rasulbag,
                            Saheed Tajuddin Ahmed Avenue, Mohakhali, Dhaka-1212.
                        </p>
                    </div>
                    <div class="space-y-4">
                        <h2 class="font-black text-2xl text-center underline">China Office</h2>
                        <p class="text-base"><span><i class="las la-home text-xl font-black"></i></span>
                            Room-1804, 18th Floor, North Tower, Gunaghzou World Trade Centre, No.371-375, Huan Shi Dong Road Guangzhou, Guangdong, China
                        </p>
                    </div>
                    <div class="space-y-4">
                        <h2 class="font-black text-2xl text-center underline">USA Office</h2>
                        <p class="text-base"><span><i class="las la-home text-xl font-black"></i></span>
                            The Corporation 97-32 72ND Drive, Forest Hills, NY, 11375, USA Debashish Debnath 88-16 Burdette PL, Jamaica, NY, 11432, USA
                        </p>
                    </div>
                 </div>
                </div>
                <div class="col-span-8  border-l pl-8">
                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div class="grid grid-cols-2 gap-6">
                            <div class="col-span-2">
                                <h2 class="text-center text-2xl font-black mb-6">Feel free to reach out.We look forward to
                                    hearing
                                    from you</h2>
                            </div>
                            <div class="col-span-2">
                                @if (Session::has('success'))
                                    <div class="flex p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
                                        role="alert">
                                        <svg class="inline flex-shrink-0 mr-3 w-5 h-5" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <div>
                                            <span class="font-medium">Success alert!</span>
                                            {{ Session::get('success') }}
                                        </div>
                                    </div>
                                @endif

                            </div>
                            <div class="col-span-1">
                                <x-label class="mb-2">First Name</x-label>
                                <x-input type="text" name="first_name" class="w-full"
                                    placeholder="Enter your first name" />
                                @error('first_name')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-span-1">
                                <x-label class="mb-2">Last Name</x-label>
                                <x-input type="text" name="last_name" class="w-full"
                                    placeholder="Enter your last name" />
                                @error('last_name')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-span-1">
                                <x-label class="mb-2">Email</x-label>
                                <x-input type="text" name="email" class="w-full" placeholder="Enter your email" />
                                @error('email')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-span-1">
                                <x-label class="mb-2">Phone</x-label>
                                <x-input type="number" name="phone" class="w-full" placeholder="Enter your phone" />
                                @error('phone')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-span-2">
                                <h2 class="text-center underline font-bold text-[20px] my-6">Services</h2>
                                @foreach ($serviceItems as $key => $item)
                                    <label for="remember_me-{{ $item }}" class="inline-flex items-center mr-2">
                                        <input id="remember_me-{{ $item }}" type="checkbox"
                                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                            name="service[]" value="{{ $item }}">
                                        <span class="ml-2 text-sm text-gray-600">{{ __($item) }}</span>
                                    </label>
                                @endforeach
                                @error('service')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-span-2">
                                <x-label class="mb-2">Message</x-label>
                                <x-textarea name="" name="message" id="" cols="30" class="w-full " rows="3"
                                    placeholder="Write your message" />
                                @error('message')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-span-2">
                                <x-button>Send</x-button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script></script>
@endpush
