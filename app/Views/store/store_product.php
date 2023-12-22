<html lang="en">
<?= $this->extend('layout/store/market')?>
<?= $this->section('style')?>
    <style>
        #chevron path {
            fill: #fff;
        }

        .aktif {
            border-color: #38bdf8;
            border-width: 2px;            
        }
    </style>
<?= $this->endSection()?>

<?= $this->section('content')?>    
    <main class="w-full bg-gray-200">
        <section class="md:grid md:grid-cols-3">
            <div class="sm:grid sm:grid-cols-2 md:col-span-2 gap-x-6 px-2 sm:px-4 py-4">
                <div class="sm:col-span-1 hidden sm:flex justify-center h-full max-h-72 sm:sticky top-32">
                    <div class="w-16 h-full overflow-y-scroll space-y-0.5 scrollbar-hide bg-black/[.2] p-0.5" id="img-thumb">
                        <img src="/img/nike-jordan.jpg" alt="" class="row-span-1 object-cover w-full aktif">
                        <img src="/img/air_jordan_7_3.jpg" alt="" class="row-span-1 object-cover w-full">
                        <img src="/img/air_jordan_7_2.jpg" alt="" class="row-span-1 object-cover w-full">
                        <img src="/img/air_jordan_7.jpg" alt="" class="row-span-1 object-cover w-full">
                    </div>
                    <div class="w-3/4 sm:w-full h-full ml-2" id="img-container">
                        <img src="/img/nike-jordan.jpg" alt="" class="h-full w-full object-cover" id="img-main">
                    </div>
                </div>

                <div class="sm:hidden h-auto">
                    <div class="w-full h-96 mb-2">
                        <img src="/img/nike-jordan.jpg" alt="" class="h-full w-full object-cover" id="gambar-utama">
                    </div>
                    <div class="scrolling-wrapper flex w-full h-auto mx-auto">
                        <div class="inline-flex mx-auto h-24 w-auto space-x-1" id="gambar-thumb">
                            <img src="/img/nike-jordan.jpg" alt="" class="object-cover w-24 h-full aktif">
                            <img src="/img/air_jordan_7_3.jpg" alt="" class="object-cover w-24 h-full">
                            <img src="/img/air_jordan_7_2.jpg" alt="" class="object-cover w-24 h-full">
                            <img src="/img/air_jordan_7.jpg" alt="" class="object-cover w-24 h-full">
                        </div>
                    </div>
                </div>

                <div class="sm:col-span-1 mx-6 sm:mx-0 mt-4">
                    <div class="">
                        <h1 class="text-xl sm:text-2xl font-bold">Air Jordan 7 Retro SE Men's Shoes 40-47</h1>
                        <div class="mt-1 flex">
                            <p class="mr-1">Terjual 10 |</p>
                            <span>
                                <i class="fa-solid fa-star text-amber-500"></i>
                                5 (10 user)
                            </span>
                        </div>
                        <div class="mt-3">
                            <p class="text-3xl font-bold self-center">Rp<span id="harga">3,400,000</span></p>
                            <span class="flex flex-wrap mt-1">
                                <span class="bg-[#ca0101] px-3 py-1 text-sm font-semibold text-white">15%</span>
                                <p class="mx-2 text-base sm:text-lg line-through self-center text-secondary">Rp<span id="diskon-harga">3,999,999</span></p>
                            </span>
                        </div>                    
                        <div class="mt-4">
                            <div class="">
                                <div class="col-span-2 self-center mb-2">Pilih ukuran : <span id="ukuran-size"></span></div>
                                <div class="col-span-10 flex" id="ukuran">
                                    <input type="button" class="btn w-8 h-8 border-2 border-sky-500 rounded-sm mr-2 cursor-pointer" value="40">
                                    <input type="button" class="btn w-8 h-8 border-2 border-sky-500 rounded-sm mr-2 cursor-pointer" value="41">
                                    <input type="button" class="btn w-8 h-8 border-2 border-sky-500 rounded-sm mr-2 cursor-pointer" value="42">
                                    <input type="button" class="btn w-8 h-8 border-2 border-sky-500 rounded-sm mr-2 cursor-pointer" value="43">
                                </div>
                            </div>
                            <div class="grid grid-cols-12 mt-3">
                                <div class="col-span-2 self-center">Kategori</div>
                                <div class="col-span-10 flex">
                                    <p class="self-center mr-3">:</p>
                                    <p>Fashion Pria</p>
                                </div>
                            </div>
                            <div class="grid grid-cols-12 mt-2">
                                <div class="col-span-2 self-center">Dimensi</div>
                                <div class="col-span-10 flex">
                                    <p class="self-center mr-3">:</p>
                                    <p>30cm x 15cm x 10cm</p>
                                </div>
                            </div>
                            <div class="grid grid-cols-12 mt-2">
                                <div class="col-span-2 self-center">Berat</div>
                                <div class="col-span-10 flex">
                                    <p class="self-center mr-3">:</p>
                                    <p>360gr</p>
                                </div>
                            </div>

                        </div>
                        <div class="mt-4">
                            <h1 class="font-bold text-lg">Pengiriman :</h1>
                            <div class="flex">
                                <span class="mr-1 self-center">
                                    <i class="fa-solid fa-location-dot "></i>
                                </span>
                                <p>Dikirim dari Stockholm</p>
                            </div>
                            <div class="flex mt-1">
                                <span class="mr-1 mt-3">
                                    <i class="fa-solid fa-truck fa-sm"></i>
                                </span>
                                <div>
                                    <p>Ongkir 10 rb - 12 rb</p>
                                    <p>Estimasi 12 Mei - 31 Des</p>
                                </div>
                            </div>
                        </div>
                        <div class="hidden sm:block" id="detail-item">
                            <div class="mt-5">
                                <p>Deskripsi :</p>
                                <ul class="list-disc list-inside">
                                    <li>Full-length Nike Air technology provides lightweight cushioning</li>
                                    <li>Leather and textile materials in the upper add durability</li>
                                    <li>Rubber outsole gives your style traction</li>
                                    <li>Colour Shown: Vachetta Tan/Taxi/Dark Concord/Black</li>
                                    <li>Style: DZ4729-200</li>
                                    <li>Country/Region of Origin: China</li>
                                </ul>
                            </div>
                            <div class="mt-6">
                                <p>CATATAN :</p>
                                <ul class="list-disc list-inside">
                                    <li>Barang yang sudah dibeli tidak dapat dikembalikan atau ditukar dengan alasan apapun, kecuali:</li>
                                    <li>Kami pihak seller salah mengirim barang sehingga tidak sesuai dengan pesanan.</li>
                                    <li>Barang yang kita kirim tidak sesuai dengan gambar maupun deskripsi.</li>
                                    <li>Ketersediaan size sudah update di pilihan warna dan ukuran, jika masih bisa di pesan berarti ready.</li>
                                    <li>Pemesanan akan kami proses maksimal 2x24 jam kerja, tidak termasuk hari sabtu, minggu, dan tanggal merah.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="mt-4 cursor-pointer" id="detail-click">
                            <div id="detil" class="sm:hidden border-b border-sky-400">
                                <div class="flex justify-center mx-auto">
                                    <span class="self-center mr-1">
                                        <i class="fa-solid fa-angle-down"></i>
                                    </span>
                                    <p class="font-semibold">selengkapnya</p>
                                </div>
                            </div>

                            <div id="tutup" class="hidden border-b border-sky-400">
                                <div class="flex justify-center mx-auto">
                                    <span class="self-center mr-1">
                                        <i class="fa-solid fa-angle-up"></i>
                                    </span>
                                    <p class="font-semibold">lebih sedikit</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="md:col-span-1 mt-4 sm:mt-2">
                <div class="w-5/6 h-auto mx-auto border-2 border-sky-400 p-4 rounded-sm sticky top-28">
                    <h1 class="text-xl font-semibold mb-2">Atur jumlah</h1>
                    <div class="flex font-semibold mb-2 flex-wrap">
                        <p class="text-lg">Air Jordan 7 Retro SE Men's</p>
                        <p class="text-lg">, <span id="size-out"></span></p>
                    </div>
                    <div class="flex flex-wrap mb-3">
                        <div class="w-28 h-10 flex bg-white rounded-md">
                            <button class="mr-auto px-3 hover:bg-slate-100 buttonDec" id="buttonDec">
                                <i class="fa-solid fa-minus text-[#fa4f00]"></i>
                            </button>
                            <div class="self-center">
                                <p class="font-bold text-xl" id="hasil">0</p>
                            </div>
                            <button class="ml-auto px-3 hover:bg-slate-100 buttonInc" id="buttonInc">
                                <i class="fa-solid fa-plus text-[#fa4f00]"></i>
                            </button>
                        </div>
                        <div class="ml-2 self-center">
                            <p class="text-lg font-bold" id="stock">stok 10</p>
                        </div>
                    </div>
                    <div class="mb-6">
                        <div class="flex">
                            <span class="self-center">
                                <i class="fa-solid fa-pencil"></i>
                            </span>
                            <p class="ml-1">tambah catatan</p>
                        </div>
                        <input type="text" class="w-3/4 py-1 px-2 rounded-lg">
                    </div>
                    <div class="border-t border-gray-500">
                        <div class="flex flex-wrap mt-1">
                            <p class="text-lg lg:text-xl font-semibold">Subtotal</p>
                            <span class="block ml-auto">
                                <p class="text-sm float-right line-through self-center text-secondary">Rp<span id="diskon-hasil">-</span></p>              
                                <p class="text-lg lg:text-xl font-semibold ml-auto">Rp<span id="sub-hasil"></span></p>
                            </span>
                        </div>
                    </div>
                    <div class="mt-5 px-4">
                        <div class="flex justify-center mb-2">
                            <button class="lg:flex justify-center py-2 px-4 mr-2 w-full bg-amber-300 hover:bg-amber-400 font-semibold text-lg">
                                <span class="self-center mr-1">
                                    <i class="fa-solid fa-heart"></i>
                                </span>
                                <p class="sm:block md:hidden lg:block">wishlist</p>
                            </button>
                            <button class="lg:flex justify-center py-2 px-4 ml-2 w-full bg-amber-300 hover:bg-amber-400 font-semibold text-lg">
                                <span class="self-center mr-1">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </span>
                                <p class="sm:block md:hidden lg:block">keranjang</p>
                            </button>
                        </div>
                        <a href="/beli"><button class="py-2 mb-2 border border-sky-600 bg-sky-100 w-full font-semibold text-xl hover:border-sky-600 hover:bg-sky-300">beli</button></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="w-full bg-gray-200 p-2">
            <div class="h-auto container relative flex mx-auto mt-10">
                <div class="self-center absolute hidden" id="button-prev"> 
                    <div class="w-16 h-16 sm:w-20 sm:h-20 flex justify-center rounded-full bg-[#fa4f00]">
                        <span class="self-center cursor-pointer" id="chevron">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 block sm:hidden" viewBox="0 0 320 512">
                                <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 hidden sm:block" viewBox="0 0 320 512">
                                <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"/>
                            </svg>
                        </span>
                    </div>
                </div>
                <div class="self-center absolute right-0 " id="button-next"> 
                    <div class="w-16 h-16 sm:w-20 sm:h-20 flex justify-center rounded-full bg-[#fa4f00]">
                        <span class="self-center cursor-pointer" id="chevron">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 block sm:hidden" viewBox="0 0 320 512">
                                <path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/>
                            </svg>

                            <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 hidden sm:block" viewBox="0 0 320 512">
                                <path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/>
                            </svg>
                        </span>
                    </div>
                </div>
                <div class="overflow-hidden scroll-smooth" id="carousel">
                    <div class="grid grid-flow-col box-border gap-3 sm:gap-4"  id="content">
                        <div class="rounded shadow-xl bg-white pb-2 w-40 sm:w-48 md:w-64 h-auto ">
                            <a href="/product" class="">
                                <div class="h-48 sm:h-1/2 md:h-2/4 xl:h-3/5">
                                    <img class="object-cover h-full w-full" src="/img/1655699125.jpeg" alt="Sunset in the mountains">
                                </div>
                            </a>
                            <div class="px-3 md:px-6">
                                <div class="my-2">
                                    <p class="font-semibold text-md md:text-lg">
                                        <a href="/product" class="hover:underline underline-offset-1">Scarlett Whitening Body Lotion by Felicya Angelista Romansa</a>
                                    </p>
                                </div>
                                <div class="mb-1">
                                    <span class="flex flex-wrap">
                                        <i class="fa fa-star self-center text-[#fac800]"></i>
                                        <p class="self-center mx-1">4.8</p>
                                        <p class="self-center text-sm text-black/[.7]">(161290)</p>
                                    </span>
                                </div>
                                <div class="mt-1">
                                    <span class="flex flex-wrap mb-2">  
                                        <p class="text-xl font-bold text-[#fa4f00] self-center">Rp75.000</p> 
                                        <p class="mx-2 text-sm line-through self-center text-secondary">Rp150.000</p> 
                                    </span>
                                </div>
                            </div>
                        </div>
                
                        <div class="rounded shadow-xl bg-white pb-2 w-40 sm:w-48 md:w-64">
                            <a href="/product" class="">
                                <div class="h-48 sm:h-1/2 md:h-2/4 xl:h-3/5">
                                    <img class="object-cover h-full w-full" src="/img/1655699125.jpeg" alt="Sunset in the mountains">
                                </div>
                            </a>
                            <div class="px-3 md:px-6">
                                <div class="my-2">
                                    <p class="font-semibold text-md md:text-lg">
                                        <a href="/product" class="hover:underline underline-offset-1">Scarlett Whitening Body Lotion by Felicya Angelista Romansa</a>
                                    </p>
                                </div>
                                <div class="mb-1">
                                    <span class="flex flex-wrap">
                                        <i class="fa fa-star self-center text-[#fac800]"></i>
                                        <p class="self-center mx-1">4.8</p>
                                        <p class="self-center text-sm text-black/[.7]">(161290)</p>
                                    </span>
                                </div>
                                <div class="mt-1">
                                    <span class="flex flex-wrap mb-2">  
                                        <p class="text-xl font-bold text-[#fa4f00] self-center">Rp75.000</p> 
                                        <p class="mx-2 text-sm line-through self-center text-secondary">Rp150.000</p> 
                                    </span>
                                </div>
                            </div>
                        </div>
                
                        <div class="rounded shadow-xl bg-white pb-2 w-40 sm:w-48 md:w-64">
                            <a href="/product" class="">
                                <div class="h-48 sm:h-1/2 md:h-2/4 xl:h-3/5">
                                    <img class="object-cover h-full w-full" src="/img/1655699125.jpeg" alt="Sunset in the mountains">
                                </div>
                            </a>
                            <div class="px-3 md:px-6">
                                <div class="my-2">
                                    <p class="font-semibold text-md md:text-lg">
                                        <a href="/product" class="hover:underline underline-offset-1">Scarlett Whitening Body Lotion by Felicya Angelista Romansa</a>
                                    </p>
                                </div>
                                <div class="mb-1">
                                    <span class="flex flex-wrap">
                                        <i class="fa fa-star self-center text-[#fac800]"></i>
                                        <p class="self-center mx-1">4.8</p>
                                        <p class="self-center text-sm text-black/[.7]">(161290)</p>
                                    </span>
                                </div>
                                <div class="mt-1">
                                    <span class="flex flex-wrap mb-2">  
                                        <p class="text-xl font-bold text-[#fa4f00] self-center">Rp75.000</p> 
                                        <p class="mx-2 text-sm line-through self-center text-secondary">Rp150.000</p> 
                                    </span>
                                </div>
                            </div>
                        </div>
                
                        <div class="rounded shadow-xl bg-white pb-2 w-40 sm:w-48 md:w-64">
                            <a href="/product" class="">
                                <div class="h-48 sm:h-1/2 md:h-2/4 xl:h-3/5">
                                    <img class="object-cover h-full w-full" src="/img/2208_w023_n003_2842b_p1_2842.jpg" alt="Sunset in the mountains">
                                </div>
                            </a>
                            <div class="px-3 md:px-6">
                                <div class="my-2">
                                    <p class="font-semibold text-md md:text-lg">
                                        <a href="/product" class="hover:underline underline-offset-1">Scarlett Whitening Body Lotion by Felicya Angelista Romansa</a>
                                    </p>
                                </div>
                                <div class="mb-1">
                                    <span class="flex flex-wrap">
                                        <i class="fa fa-star self-center text-[#fac800]"></i>
                                        <p class="self-center mx-1">4.8</p>
                                        <p class="self-center text-sm text-black/[.7]">(161290)</p>
                                </span>
                                </div>
                                <div class="mt-1">
                                    <span class="flex flex-wrap mb-2">  
                                        <p class="text-xl font-bold text-[#fa4f00] self-center">Rp75.000</p> 
                                        <p class="mx-2 text-sm line-through self-center text-secondary">Rp150.000</p> 
                                    </span>
                                </div>
                            </div>
                        </div>
                
                        <div class="rounded shadow-xl bg-white pb-2 w-40 sm:w-48 md:w-64">
                            <a href="/product" class="">
                                <div class="h-48 sm:h-1/2 md:h-2/4 xl:h-3/5">
                                    <img class="object-cover h-full w-full" src="/img/1655699125.jpeg" alt="Sunset in the mountains">
                                </div>
                            </a>
                            <div class="px-3 md:px-6">
                                <div class="my-2">
                                    <p class="font-semibold text-md md:text-lg">
                                        <a href="/product" class="hover:underline underline-offset-1">Scarlett Whitening Body Lotion by Felicya Angelista Romansa</a>
                                    </p>
                                </div>
                                <div class="mb-1">
                                    <span class="flex flex-wrap">
                                        <i class="fa fa-star self-center text-[#fac800]"></i>
                                        <p class="self-center mx-1">4.8</p>
                                        <p class="self-center text-sm text-black/[.7]">(161290)</p>
                                    </span>
                                </div>
                                <div class="mt-1">
                                    <span class="flex flex-wrap mb-2">  
                                        <p class="text-xl font-bold text-[#fa4f00] self-center">Rp75.000</p> 
                                        <p class="mx-2 text-sm line-through self-center text-secondary">Rp150.000</p> 
                                    </span>
                                </div>
                            </div>
                        </div>
                
                        <div class="rounded shadow-xl bg-white pb-2 w-40 sm:w-48 md:w-64">
                            <a href="/product" class="">
                                <div class="h-48 sm:h-1/2 md:h-2/4 xl:h-3/5">
                                    <img class="object-cover h-full w-full" src="/img/1655699125.jpeg" alt="Sunset in the mountains">
                                </div>
                            </a>
                            <div class="px-3 md:px-6">
                                <div class="my-2">
                                    <p class="font-semibold text-md md:text-lg">
                                        <a href="/product" class="hover:underline underline-offset-1">Scarlett Whitening Body Lotion by Felicya Angelista Romansa</a>
                                    </p>
                                </div>
                                <div class="mb-1">
                                    <span class="flex flex-wrap">
                                        <i class="fa fa-star self-center text-[#fac800]"></i>
                                        <p class="self-center mx-1">4.8</p>
                                        <p class="self-center text-sm text-black/[.7]">(161290)</p>
                                    </span>
                                </div>
                                <div class="mt-1">
                                    <span class="flex flex-wrap mb-2">  
                                        <p class="text-xl font-bold text-[#fa4f00] self-center">Rp75.000</p> 
                                        <p class="mx-2 text-sm line-through self-center text-secondary">Rp150.000</p> 
                                    </span>
                                </div>
                            </div>
                        </div>
                
                        <div class="rounded shadow-xl bg-white pb-2 w-40 sm:w-48 md:w-64">
                            <a href="/product" class="">
                                <div class="h-48 sm:h-1/2 md:h-2/4 xl:h-3/5">
                                    <img class="object-cover h-full w-full" src="/img/1655699125.jpeg" alt="Sunset in the mountains">
                                </div>
                            </a>
                            <div class="px-3 md:px-6">
                                <div class="my-2">
                                    <p class="font-semibold text-md md:text-lg">
                                        <a href="/product" class="hover:underline underline-offset-1">Scarlett Whitening Body Lotion by Felicya Angelista Romansa</a>
                                    </p>
                                </div>
                                <div class="mb-1">
                                    <span class="flex flex-wrap">
                                        <i class="fa fa-star self-center text-[#fac800]"></i>
                                        <p class="self-center mx-1">4.8</p>
                                        <p class="self-center text-sm text-black/[.7]">(161290)</p>
                                    </span>
                                </div>
                                <div class="mt-1">
                                    <span class="flex flex-wrap mb-2">  
                                        <p class="text-xl font-bold text-[#fa4f00] self-center">Rp75.000</p> 
                                        <p class="mx-2 text-sm line-through self-center text-secondary">Rp150.000</p> 
                                    </span>
                                </div>
                            </div>
                        </div>
                
                        <div class="rounded shadow-xl bg-white pb-2 w-40 sm:w-48 md:w-64">
                            <a href="/product" class="">
                                <div class="h-48 sm:h-1/2 md:h-2/4 xl:h-3/5">
                                    <img class="object-cover h-full w-full" src="/img/ss21710829165003_1x.jpg" alt="Sunset in the mountains">
                                </div>
                            </a>
                            <div class="px-3 md:px-6">
                                <div class="my-2">
                                    <p class="font-semibold text-md md:text-lg">
                                        <a href="/product" class="hover:underline underline-offset-1">Scarlett Whitening Body Lotion by Felicya Angelista Romansa</a>
                                    </p>
                                </div>
                                <div class="mb-1">
                                    <span class="flex flex-wrap">
                                        <i class="fa fa-star self-center text-[#fac800]"></i>
                                        <p class="self-center mx-1">4.8</p>
                                        <p class="self-center text-sm text-black/[.7]">(161290)</p>
                                    </span>
                                </div>
                                <div class="mt-1">
                                    <span class="flex flex-wrap mb-2">  
                                        <p class="text-xl font-bold text-[#fa4f00] self-center">Rp75.000</p> 
                                        <p class="mx-2 text-sm line-through self-center text-secondary">Rp150.000</p> 
                                    </span>
                                </div>
                            </div>
                        </div>
    
                        <div class="rounded shadow-xl bg-white pb-2 w-40 sm:w-48 md:w-64">
                            <a href="/product" class="">
                                <div class="h-48 sm:h-1/2 md:h-2/4 xl:h-3/5">
                                    <img class="object-cover h-full w-full" src="/img/1655699125.jpeg" alt="Sunset in the mountains">
                                </div>
                            </a>
                            <div class="px-3 md:px-6">
                                <div class="my-2">
                                    <p class="font-semibold text-md md:text-lg">
                                        <a href="/product" class="hover:underline underline-offset-1">Scarlett Whitening Body Lotion by Felicya Angelista Romansa</a>
                                    </p>
                                </div>
                                <div class="mb-1">
                                    <span class="flex flex-wrap">
                                        <i class="fa fa-star self-center text-[#fac800]"></i>
                                        <p class="self-center mx-1">4.8</p>
                                        <p class="self-center text-sm text-black/[.7]">(161290)</p>
                                    </span>
                                </div>
                                <div class="mt-1">
                                    <span class="flex flex-wrap mb-2">  
                                        <p class="text-xl font-bold text-[#fa4f00] self-center">Rp75.000</p> 
                                        <p class="mx-2 text-sm line-through self-center text-secondary">Rp150.000</p> 
                                    </span>
                                </div>
                            </div>
                        </div>
    
                        <div class="rounded shadow-xl bg-white pb-2 w-40 sm:w-48 md:w-64">
                            <a href="/product" class="">
                                <div class="h-48 sm:h-1/2 md:h-2/4 xl:h-3/5">
                                    <img class="object-cover h-full w-full" src="/img/1655699125.jpeg" alt="Sunset in the mountains">
                                </div>
                            </a>
                            <div class="px-3 md:px-6">
                                <div class="my-2">
                                    <p class="font-semibold text-md md:text-lg">
                                        <a href="/product" class="hover:underline underline-offset-1">Scarlett Whitening Body Lotion by Felicya Angelista Romansa</a>
                                    </p>
                                </div>
                                <div class="mb-1">
                                    <span class="flex flex-wrap">
                                        <i class="fa fa-star self-center text-[#fac800]"></i>
                                        <p class="self-center mx-1">4.8</p>
                                        <p class="self-center text-sm text-black/[.7]">(161290)</p>
                                    </span>
                                </div>
                                <div class="mt-1">
                                    <span class="flex flex-wrap mb-2">  
                                        <p class="text-xl font-bold text-[#fa4f00] self-center">Rp75.000</p> 
                                        <p class="mx-2 text-sm line-through self-center text-secondary">Rp150.000</p> 
                                    </span>
                                </div>
                            </div>
                        </div>
    
                        <div class="rounded shadow-xl bg-white pb-2 w-40 sm:w-48 md:w-64">
                            <a href="/product" class="">
                                <div class="h-48 sm:h-1/2 md:h-2/4 xl:h-3/5">
                                    <img class="object-cover h-full w-full" src="/img/1655699125.jpeg" alt="Sunset in the mountains">
                                </div>
                            </a>
                            <div class="px-3 md:px-6">
                                <div class="my-2">
                                    <p class="font-semibold text-md md:text-lg">
                                        <a href="/product" class="hover:underline underline-offset-1">Scarlett Whitening Body Lotion by Felicya Angelista Romansa</a>
                                    </p>
                                </div>
                                <div class="mb-1">
                                    <span class="flex flex-wrap">
                                        <i class="fa fa-star self-center text-[#fac800]"></i>
                                        <p class="self-center mx-1">4.8</p>
                                        <p class="self-center text-sm text-black/[.7]">(161290)</p>
                                    </span>
                                </div>
                                <div class="mt-1">
                                    <span class="flex flex-wrap mb-2">  
                                        <p class="text-xl font-bold text-[#fa4f00] self-center">Rp75.000</p> 
                                        <p class="mx-2 text-sm line-through self-center text-secondary">Rp150.000</p> 
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="rounded shadow-xl bg-white pb-2 w-40 sm:w-48 md:w-64">
                            <a href="/product" class="">
                                <div class="h-48 sm:h-1/2 md:h-2/4 xl:h-3/5">
                                    <img class="object-cover h-full w-full" src="/img/1655699125.jpeg" alt="Sunset in the mountains">
                                </div>
                            </a>
                            <div class="px-3 md:px-6">
                                <div class="my-2">
                                    <p class="font-semibold text-md md:text-lg">
                                        <a href="/product" class="hover:underline underline-offset-1">Scarlett Whitening Body Lotion by Felicya Angelista Romansa</a>
                                    </p>
                                </div>
                                <div class="mb-1">
                                    <span class="flex flex-wrap">
                                        <i class="fa fa-star self-center text-[#fac800]"></i>
                                        <p class="self-center mx-1">4.8</p>
                                        <p class="self-center text-sm text-black/[.7]">(161290)</p>
                                    </span>
                                </div>
                                <div class="mt-1">
                                    <span class="flex flex-wrap mb-2">  
                                        <p class="text-xl font-bold text-[#fa4f00] self-center">Rp75.000</p> 
                                        <p class="mx-2 text-sm line-through self-center text-secondary">Rp150.000</p> 
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    

            <div class="w-full sm:w-5/6 mb-8 mx-auto divide-y-2 divide-gray-300">
                <h1 class="mt-10 text-3xl font-semibold">Ulasan</h1>
                <div class="w-full h-auto px-5 pt-2 pb-6 mt-4 bg-white">
                    <div class="flex mb-3">
                        <span>
                            <i class="fa-solid fa-star text-amber-500"></i>
                            <i class="fa-solid fa-star text-amber-500"></i>
                            <i class="fa-solid fa-star text-amber-500"></i>
                            <i class="fa-solid fa-star text-amber-500"></i>
                            <i class="fa-solid fa-star text-amber-500"></i>
                        </span>
                        <p class="ml-2 font-semibold">· 16 JUL</p>
                    </div>
                    <div class="flex">
                        <span class="flex justify-center bg-slate-400 rounded-full w-8 h-8">
                            <i class="self-center fa-solid fa-user fa-md text-[#fff]"></i>
                        </span>
                        <h2 class="ml-1 self-center text-lg font-semibold">Mykhailo Mudryk</h2>
                    </div>
                    <div class="mt-1">
                        <p class="text-sm">Air Jordan 7 Retro SE Men's, 44</p>
                        <p class="mt-2 text-lg">jangan belanja disini nanti ketagihan!!!</p>
                    </div>
                </div>
    
                <div class="w-full h-auto px-5 pt-2 pb-6 bg-white">
                    <div class="flex mb-3">
                        <span>
                            <i class="fa-solid fa-star text-amber-500"></i>
                            <i class="fa-solid fa-star text-amber-500"></i>
                            <i class="fa-solid fa-star text-amber-500"></i>
                            <i class="fa-solid fa-star text-amber-500"></i>
                            <i class="fa-solid fa-star text-gray-400"></i>
                        </span>
                        <p class="ml-2 font-semibold">· 11 JUN</p>
                    </div>
                    <div class="flex">
                        <span class="flex justify-center bg-slate-400 rounded-full w-8 h-8">
                            <i class="self-center fa-solid fa-user fa-md text-[#fff]"></i>
                        </span>
                        <h2 class="ml-1 self-center text-lg font-semibold">Andreas Christensen</h2>
                    </div>
                    <div class="mt-1">
                        <p class="text-sm">Air Jordan 7 Retro SE Men's, 41</p>
                        <p class="mt-2 text-lg">Pengiriman cepat, barang bagus dan nyaman dipakai</p>
                    </div>
                </div>
    
                <div class="w-full h-auto px-5 pt-2 pb-6 bg-white">
                    <div class="flex mb-3">
                        <span>
                            <i class="fa-solid fa-star text-amber-500"></i>
                            <i class="fa-solid fa-star text-amber-500"></i>
                            <i class="fa-solid fa-star text-amber-500"></i>
                            <i class="fa-solid fa-star text-amber-500"></i>
                            <i class="fa-solid fa-star text-gray-400"></i>
                        </span>
                        <p class="ml-2 font-semibold">· 23 MAY</p>
                    </div>
                    <div class="flex">
                        <span class="flex justify-center bg-slate-400 rounded-full w-8 h-8">
                            <i class="self-center fa-solid fa-user fa-md text-[#fff]"></i>
                        </span>
                        <h2 class="ml-1 self-center text-lg font-semibold">Carney Chukwuemeka</h2>
                    </div>
                    <div class="mt-1">
                        <p class="text-sm">Air Jordan 7 Retro SE Men's, 43</p>
                        <p class="mt-2 text-lg">harga murah dan terjangkau</p>
                    </div>
                </div>
            </div>
        </section>

    </main>
<?= $this->endSection()?>

<?= $this->section('script')?>
    <script>
        
        var count   = 0;
        product()

        var options1 = {
            width: 400,
            zoomWidth: 600,
            offset: {vertical: 0, horizontal: 10}
        };
        
        // If the width and height of the image are not known or to adjust the image to the container of it
        var options2 = {
            fillContainer: true,
            offset: {vertical: 0, horizontal: 10}
        };
        new ImageZoom(document.getElementById("img-container"), options2);
    </script>
<?= $this->endSection()?>
</html>