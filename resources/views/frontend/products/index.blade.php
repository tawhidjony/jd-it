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
    <div>
        <h2 class="w-full bg-gray-100 rounded p-3 my-4 font-black text-2xl">Products</h2>
    </div>
    <section>
        <div class="grid grid-cols-12 gap-6 " id="allProductData"></div>
    </section>

    <!-- The Modal -->
    <div id="myModal" class="modal"></div>

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
                // beforeSend: function() {
                //     $('#allProductData').html(`
            //         <div class="loaderProduct col-span-12 h-[calc(100vh-35vh)] ">
            //             <div class="flex flex-col justify-center items-center h-full">
            //                 <img src="{{ asset('assets/Images/loader.gif') }}" alt="">
            //                 <p class="text-center text-gray-700 p-0 m-0">Loading...</p>
            //             </div>
            //         </div>
            //     `);
                // },
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
                                    <h2 class="text-base text-base font-bold">
                                        ${value.name.length > 45 ? value.name.substring(0, 45) + '...' : value.name}
                                    </h2>
                                </x-card.body>
                                <x-card.footer class="px-2 py-3 ">
                                            <p class="text-gray-700 pb-2 font-bold">
                                                <span class="text-gray-700 pb-2 font-black">৳</span> ${value.sku_list.length > 0 ? value.sku_list[0].regular_price : 'N/A'}
                                            </p>
                                            <div class="flex justify-between items-center">
                                                <button id="myBtn" data-id="${value.product_slug}" class="w-full border rounded bg-indigo-500 text-white viewDetails">
                                                    <i class="las la-eye text-2xl"></i>
                                                </button>
                                                <a href="${`https://www.jadroo.com/products/${value.product_slug}`}" target="_blank" class="w-full block bg-indigo-500 border rounded text-white text-center">
                                                    <i class="las la-shopping-cart text-2xl"></i>
                                                </a>
                                            </div>
                                </x-card.footer>
                            </x-card>
                        </div>
                    `;
                    });
                    $('#allProductData').append(allProductData);
                },
                error: function(error) {
                    console.log(error);
                },
                // complete: function() {
                //     $('.loaderProduct').css('display', 'none');
                // }
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
                        <div class="modal-content text-center w-full">
                            <div class="text-center">
                                <img src="{{ asset('assets/Images/loader.gif') }}" alt="">
                            </div>
                        </div>
                    `);
                },
                success: function(res) {
                    var singleData = res.product;
                    var modalSingleData = '';
                    modalSingleData += `
                    <div class="modal-content">
                        <div class="flex items-center justify-between w-full p-4 border-b">
                            <div><h2 class="text-2xl font-black">Product details</h2></div>
                            <div class="close">&times;</div>
                        </div>
                        <div class="p-4">
                           <div class="grid grid-cols-12 gap-6 ">
                            <div class="col-span-4">
                                <img src="${singleData.featured_image.url}/${singleData.featured_image.file_name}" class="border p-4 rounded" alt="">
                            </div>
                            <div class="col-span-8">
                                <div>
                                    <h2 class="font-black text-2xl">${singleData.name}</h2>
                                </div>
                                <div class="border-t pt-2">
                                    <h2 class="font-black text-2xl">Description:</h2>
                                </div>
                                <div class="">
                                    <p class="pt-2">${singleData.short_desc}</p>
                                </div>
                                <div class="my-6">
                                    <a href="${`https://www.jadroo.com/products/${singleData.product_slug}`}" target="_blank" class="px-4 py-2 bg-indigo-500 rounded text-white text-center">
                                        Buy Now
                                        </a>

                                </div>

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
