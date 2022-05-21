@extends('layouts.frontend.app')
@section('title', 'Products page')
@push('styles')
    <style>
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            padding-top: 100px;
            /* Location of the box */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: auto;
            border: 1px solid #888;
            width: 60%;
            border-radius: 10px;
        }

        /* The Close Button */
        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

    </style>
@endpush
@section('content')
    <section>

        <div class="grid grid-cols-12 gap-6 " id="allProductData">

            {{-- @forelse ($allProduct as $key => $item)
                <div class="col-span-2">
                    <x-card class="h-[350px]">
                        <x-card.header class="p-0 overflow-hidden rounded-tl rounded-tr">
                            <img src="{{ $item['featured_image']['url'] . '/' . $item['featured_image']['file_name'] }}"
                                class="object-cover w-full h-56" alt="{{ $item['name'] }}">
                        </x-card.header>
                        <x-card.body class="p-2">
                            <h2 class="text-base ">
                                @if (strlen($item['name']) > 45)
                                    {{ substr($item['name'], 0, 45) . '...' }}
                                @else
                                    {{ $item['name'] }}
                                @endif
                            </h2>
                        </x-card.body>
                        <x-card.footer class="flex justify-end px-2 py-3">
                            <a href="#" class="p-2 text-white bg-blue-500 rounded ">
                                Add to cart
                            </a>
                        </x-card.footer>
                    </x-card>
                </div>
            @empty
            @endforelse --}}

        </div>
    </section>

    <!-- The Modal -->
    <div id="myModal" class="modal">



    </div>

@endsection
@push('scripts')
    <script>
        var page = 1;
        load_more(page);
        $(window).scroll(function() {
            if ($(window).scrollTop() + $(window).height() >= $(document).height()) {
                page++;
                load_more(page);
            }
        });

        function load_more() {
            $.ajax({
                url: `https://contents.jadroo.com/api/v1/partner/products?slug=jadroo-it-bd-ltd&page=${page}`,
                type: 'GET',
                dataType: 'json',
                success: function(res) {
                    var allData = res.results.products.data;
                    var allProductData = '';
                    $.each(allData, function(index, value) {
                        allProductData += `
                        <div class="col-span-2">
                            <x-card class="h-[350px]">
                                <x-card.header class="p-0 overflow-hidden rounded-tl rounded-tr">
                                    <img src="${value.featured_image.url}/${value.featured_image.file_name}"
                                        class="object-cover w-full h-56" alt="${value.name}">
                                </x-card.header>
                                <x-card.body class="p-2">
                                    <h2 class="text-base ">
                                        ${value.name}
                                    </h2>
                                </x-card.body>
                                <x-card.footer class="flex justify-end px-2 py-3">
                                    <button id="myBtn"  data-id="${value.product_slug}" class="p-2 mr-2 text-white bg-blue-500 rounded viewDetails">
                                       View
                                    </button>
                                    <a href="${`https://www.jadroo.com/products/${value.product_slug}`}" target="_blank" class="p-2 text-white bg-blue-500 rounded ">
                                       Buy now
                                    </a>
                                </x-card.footer>
                            </x-card>
                        </div>
                    `;
                    });
                    $('#allProductData').append(allProductData);
                },
                error: function(error) {
                    console.log(error);
                }
            });
        }

        $(document).on('click', '.viewDetails', function() {
            var id = $(this).data('id');
            $.ajax({
                url: `https://contents.jadroo.com/api/v1/products/single?slug=${id}`,
                type: 'GET',
                dataType: 'json',
                beforeSend: function() {
                    $('#myModal').html(`
                        <div class="modal-content">
                            <span class="close">&times;</span>
                            <div class="text-center">
                                <img src="https://www.jadroo.com/assets/images/loader.gif" alt="">
                            </div>
                        </div>
                    `);
                },
                success: function(res) {
                    var singleData = res.product;
                    console.log(singleData);
                    var modalSingleData = '';
                    modalSingleData += `
                    <div class="modal-content">
                        <div class="flex items-center justify-between w-full p-4 border-b">
                            <div><h2>Product details</h2></div>
                            <div class="close">&times;</div>
                        </div>
                        <div class="p-4">
                           <div class="grid grid-cols-12 gap-6 ">
                            <div class="col-span-4 bg-gray-500">
                                <img src="${singleData.featured_image.url}/${singleData.featured_image.file_name}" alt="">
                            </div>
                            <div class="col-span-8">
                                <h2>${singleData.name}</h2>
                                <p>${singleData.short_desc}</p>
                            </div>
                            </div>
                        </div>

                    </div>`;
                    $('#myModal').html(modalSingleData);
                },
                error: function(error) {
                    console.log(error);
                },
                complete: function() {
                    $('#myModal').css('display', 'block');
                }
            })
            var modal = document.getElementById('myModal');
            modal.style.display = "block";
        });

        $(document).on('click', '.close', function() {
            var modal = document.getElementById('myModal');
            modal.style.display = "none";
        });
        $(window).on('click', function(event) {
            var modal = document.getElementById('myModal');
            if (event.target.id == 'myModal') {
                modal.style.display = "none";
            }
        });
    </script>
@endpush
