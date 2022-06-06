
@extends('layouts.frontend.app')
@section('title', 'Career')
@section('content')
<section class="bg-green-600 h-48 flex justify-center items-center">
    <h2 class="text-center font-black text-4xl text-white uppercase italic underline">Career</h2>
</section>
    <section class="mt-20">
        <div class="container">
            <h2 class="text-center text-3xl font-semibold mb-12">Featured Job</h2>

            <div class="grid grid-cols-12 gap-6">
                @foreach ($careers as $career)
                <div class="col-span-12 border rounded p-4">
                    <a href="">
                        <div class="flex justify-between items-center">
                            <div class="basis-[35%]">
                                <h3 class="text-xl font-bold text-green-600">
                                    {{ Str::limit(strip_tags($career->title), 50) }}
                                </h3>
                            </div>
                            <div>
                                <p class="text-gray-400">Exprience</p>
                                <p>{{ $career->experience }}</p>
                            </div>
                            <div>
                                <p class="text-gray-400">Deadline</p>
                                <p>{{ $career->deadline }} {{-- <span> {{ $career->published }}</span> --}}</p>
                            </div>
                            <div>
                                <i class="las la-arrow-right h-10 w-10 border rounded-full flex justify-center items-center text-xl hover:text-white hover:bg-green-600 transition delay-150 duration-300"></i>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

