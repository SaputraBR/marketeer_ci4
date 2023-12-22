<html lang="en">
    
<?= $this->extend('layout/store/market')?>


<?= $this->section('content')?> 
    <main class="">
        <section class="flex absolute top-0 bg-aesthetic -z-10 h-full max-w-screen-2xl" >
        </section>

        <section class="lg:container relative flex overflow-hidden carousel-slide w-full h-48 sm:h-60 my-6 sm:my-14 mx-auto bg-amber-200/[.5]">
            <div class="slide" >
                <a href="#" target="_blanks" >
                    <img class="object-cover w-full h-full" src="/img/2208_w023_n003_2842b_p1_2842.jpg" alt="">
                </a>
            </div>
            <div class="slide">
                <a href="#" target="_blanks">
                    <img class="object-cover w-full h-full" src="/img/7943208.jpg" alt="">
                </a>
            </div>
            <div class="slide">
                <a href="#" target="_blanks">
                    <img class="object-cover w-full h-full" src="/img/16221025_5725317.jpg" alt="">
                </a>
            </div>
            <span class="w-12 h-12 sm:w-20 sm:h-20 ml-2 flex justify-center self-center prevButton left-0 absolute rounded-full bg-white hover:bg-white/[.8]">
                <i class="fa-solid fa-chevron-left fa-2x self-center text-[#ff4800]"></i>      
            </span>
            <span class="w-12 h-12 sm:w-20 sm:h-20 mr-2 flex justify-center self-center nextButton right-0 absolute rounded-full bg-white hover:bg-white/[.8]">
                <i class="fa-solid fa-chevron-right fa-2x self-center text-[#ff4800]"></i>
            </span>
        </section>

        <section class="mx-auto w-full h-auto hilang">
            <h1 class="text-4xl font-semibold mb-2 ml-4">Best Offers</h1>
            <section class="scrolling-wrapper w-full h-auto mx-auto" id="best-offer">
                <div class="inline-flex h-auto w-auto sm:grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                    <div class="w-64 sm:w-auto sm:col-span-1 rounded-lg shadow-md bg-white mt-4 md:mt-2 mx-2 relative">
                        <div class="container top-0 absolute hover:cursor-default">
                        <div class="relative flex justify-center seller" >
                            <p class="self-center font-semibold text-white">Best Seller</p>
                        </div> 
                        </div>
                        <a href="/product" class="">
                        <div class="h-64 sm:h-3/5 md:h-2/4 xl:h-3/5">
                            <img class="object-contain h-full w-full" src="/img/71jmjOxxE3L.jpg" alt="Sunset in the mountains">
                        </div>
                        </a>
                        <div class="h-auto py-2 px-4 sm:py-4 sm:px-6">
                        <div class="font-bold text-lg sm:text-xl mb-2">
                            <a href="/product" class="hover:underline underline-offset-1">Google Pixel 7 Pro 12/512GB</a>
                        </div>
                        <span class="flex flex-wrap mb-1">
                            <span class="bg-[#ca0101] px-1 sm:px-3 py-1 text-xs sm:text-sm font-semibold text-white">42%</span>
                            <p class="mx-2 text-sm line-through self-center text-secondary">Rp14,999,999</p>              
                        </span>
                        <p class="text-xl font-semibold self-center">Rp9,119,999</p>
                        </div>
                    </div>
        
                    <div class="w-64 sm:w-auto sm:col-span-1 rounded-lg shadow-md bg-white mt-4 md:mt-2 mx-2 relative">
                        <div class="container top-0 absolute hover:cursor-default">
                            <div class="relative flex justify-center favorite">
                                <p class="self-center font-semibold text-white">Favorite</p>
                            </div>
                        </div>
                        <a href="/product" class="">
                            <div class="h-64 sm:h-3/5 md:h-2/4 xl:h-3/5">
                                <img class="object-contain h-full w-full" src="/img/ss21710829165003_1x.jpg" alt="Sunset in the mountains">
                            </div>
                        </a>
                        <div class="h-auto py-2 px-4 sm:py-4 sm:px-6">
                            <div class="font-bold text-lg sm:text-xl mb-2">
                                <a href="/product" class="hover:underline underline-offset-1">Polo Bear by Ralph Lauren M/L/XL/XXL</a>
                            </div>
                            <span class="flex flex-wrap mb-1">
                                <span class="bg-[#ca0101] px-1 sm:px-3 py-1 text-xs sm:text-sm font-semibold text-white">38%</span>
                                <p class="mx-2 text-sm line-through self-center text-secondary">Rp20,999,999</p>              
                            </span>
                            <p class="text-lg font-semibold self-center">Rp13,020,000</p>
                        </div>
                    </div>
        
                    <div class="w-64 sm:w-auto sm:col-span-1 rounded-lg shadow-md bg-white mt-4 md:mt-2 mx-2 relative">
                        <div class="container top-0 absolute hover:cursor-default">
                            <div class="relative flex justify-center men">
                            <p class="self-center font-semibold text-white">Men</p>
                            </div>
                        </div>
                        <a href="/product" class="">
                        <div class="h-64 sm:h-3/5 md:h-2/4 xl:h-3/5">
                            <img class="object-contain h-full w-full" src="/img/nike-jordan.jpg" alt="Sunset in the mountains">
                        </div>
                        </a>
                        <div class="h-auto py-2 px-4 sm:py-4 sm:px-6">
                        <div class="font-bold text-lg sm:text-xl mb-2">
                            <a href="/product" class="hover:underline underline-offset-1">Air Jordan 7 Retro SE Men's Shoes 40-47</a>
                        </div>
                        <span class="flex flex-wrap mb-1">
                            <span class="bg-[#ca0101] px-1 sm:px-3 py-1 text-xs sm:text-sm font-semibold text-white">15%</span>
                            <p class="mx-2 text-sm line-through self-center text-secondary">Rp3,999,999</p>              
                        </span>
                        <p class="text-lg font-semibold self-center">Rp3,400,000</p>
                        </div>
                    </div>
        
                    <div class="w-64 sm:w-auto sm:col-span-1 rounded-lg shadow-md bg-white mt-4 md:mt-2 mx-2 relative">
                        <div class="container absolute top-0">
                            <div class="women flex justify-center">
                                <p class="self-center font-semibold text-white">Women</p>
                            </div>
                        </div>
                        <a href="/product" class="">
                            <div class="h-64 sm:h-3/5 md:h-2/4 xl:h-3/5">
                                <img class="object-contain h-full w-full" src="/img/Hermes-Kelly.jpg" alt="Sunset in the mountains">
                            </div>
                        </a>
                        <div class="h-auto py-2 px-4 sm:py-4 sm:px-6">
                            <div class="font-bold text-lg sm:text-xl mb-2">
                                <a href="/product" class="hover:underline underline-offset-1">(HSS) Kelly Sellier 28 Nata and Craie Epsom Gold</a>
                            </div>
                            <span class="flex flex-wrap mb-1">
                                <span class="bg-[#ca0101] px-1 sm:px-3 py-1 text-xs sm:text-sm font-semibold text-white">23%</span>
                                <p class="mx-2 text-sm line-through self-center text-secondary">Rp504,193,425</p>              
                            </span>
                            <p class="text-lg font-semibold self-center">Rp388,228,938</p>
                        </div>
                    </div>
                </div>
            </section>
        </section>


        <section class="w-full h-auto mx-auto mt-12" id="daily-offer">
            <h1 class="text-3xl font-semibold mb-2 ml-4">Daily Offers</h1>
            <div class="h-auto w-auto flex flex-wrap justify-center sm:grid sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5">
                <div class="sm:w-auto rounded shadow-xl bg-white m-2 pb-2 produk">
                <a href="/product" class="">
                    <div class="h-48 sm:h-3/5 md:h-2/4 xl:h-3/5">
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

                <div class="sm:w-auto rounded shadow-xl bg-white m-2 pb-2 produk">
                <a href="/product" class="">
                    <div class="h-48 sm:h-3/5 md:h-2/4 xl:h-3/5">
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

                <div class="sm:w-auto rounded shadow-xl bg-white m-2 pb-2 produk">
                <a href="/product" class="">
                    <div class="h-48 sm:h-3/5 md:h-2/4 xl:h-3/5">
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

                <div class="sm:w-auto rounded shadow-xl bg-white m-2 pb-2 produk">
                <a href="/product" class="">
                    <div class="h-48 sm:h-3/5 md:h-2/4 xl:h-3/5">
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

                <div class="sm:w-auto rounded shadow-xl bg-white m-2 pb-2 produk">
                <a href="/product" class="">
                    <div class="h-48 sm:h-3/5 md:h-2/4 xl:h-3/5">
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

                <div class="sm:w-auto rounded shadow-xl bg-white m-2 pb-2 produk">
                <a href="/product" class="">
                    <div class="h-48 sm:h-3/5 md:h-2/4 xl:h-3/5">
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

                <div class="sm:w-auto rounded shadow-xl bg-white m-2 pb-2 produk">
                <a href="store_product.html" class="">
                    <div class="h-48 sm:h-3/5 md:h-2/4 xl:h-3/5">
                    <img class="object-cover h-full w-full" src="/img/1655699125.jpeg" alt="Sunset in the mountains">
                    </div>
                </a>
                <div class="px-3 md:px-6">
                    <div class="my-2">
                    <p class="font-semibold text-md md:text-lg">
                        <a href="store_product.html" class="hover:underline underline-offset-1">Scarlett Whitening Body Lotion by Felicya Angelista Romansa</a>
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

                <div class="sm:w-auto rounded shadow-xl bg-white m-2 pb-2 produk">
                <a href="store_product.html" class="">
                    <div class="h-48 sm:h-3/5 md:h-2/4 xl:h-3/5">
                    <img class="object-cover h-full w-full" src="/img/1655699125.jpeg" alt="Sunset in the mountains">
                    </div>
                </a>
                <div class="px-3 md:px-6">
                    <div class="my-2">
                    <p class="font-semibold text-md md:text-lg">
                        <a href="store_product.html" class="hover:underline underline-offset-1">Scarlett Whitening Body Lotion by Felicya Angelista Romansa</a>
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
        </section>

        <section class="w-full h-auto mx-auto mt-12" id="trends">
            <h1 class="text-3xl font-semibold mb-2 ml-4">Trends</h1>
            <div class="h-auto w-auto flex flex-wrap justify-center sm:grid sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5">
                <div class="sm:w-auto rounded shadow-xl bg-white m-2 pb-2 produk">
                <a href="store_product.html" class="">
                    <div class="h-48 sm:h-3/5 md:h-2/4 xl:h-3/5">
                    <img class="object-cover h-full w-full" src="/img/1655699125.jpeg" alt="Sunset in the mountains">
                    </div>
                </a>
                <div class="px-3 md:px-6">
                    <div class="my-2">
                    <p class="font-semibold text-md md:text-lg">
                        <a href="store_product.html" class="hover:underline underline-offset-1">Scarlett Whitening Body Lotion by Felicya Angelista Romansa</a>
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

                <div class="sm:w-auto rounded shadow-xl bg-white m-2 pb-2 produk">
                <a href="store_product.html" class="">
                    <div class="h-48 sm:h-3/5 md:h-2/4 xl:h-3/5">
                    <img class="object-cover h-full w-full" src="/img/1655699125.jpeg" alt="Sunset in the mountains">
                    </div>
                </a>
                <div class="px-3 md:px-6">
                    <div class="my-2">
                    <p class="font-semibold text-md md:text-lg">
                        <a href="store_product.html" class="hover:underline underline-offset-1">Scarlett Whitening Body Lotion by Felicya Angelista Romansa</a>
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

                <div class="sm:w-auto rounded shadow-xl bg-white m-2 pb-2 produk">
                <a href="store_product.html" class="">
                    <div class="h-48 sm:h-3/5 md:h-2/4 xl:h-3/5">
                    <img class="object-cover h-full w-full" src="/img/1655699125.jpeg" alt="Sunset in the mountains">
                    </div>
                </a>
                <div class="px-3 md:px-6">
                    <div class="my-2">
                    <p class="font-semibold text-md md:text-lg">
                        <a href="store_product.html" class="hover:underline underline-offset-1">Scarlett Whitening Body Lotion by Felicya Angelista Romansa</a>
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

                <div class="sm:w-auto rounded shadow-xl bg-white m-2 pb-2 produk">
                <a href="store_product.html" class="">
                    <div class="h-48 sm:h-3/5 md:h-2/4 xl:h-3/5">
                    <img class="object-cover h-full w-full" src="/img/1655699125.jpeg" alt="Sunset in the mountains">
                    </div>
                </a>
                <div class="px-3 md:px-6">
                    <div class="my-2">
                    <p class="font-semibold text-md md:text-lg">
                        <a href="store_product.html" class="hover:underline underline-offset-1">Scarlett Whitening Body Lotion by Felicya Angelista Romansa</a>
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

                <div class="sm:w-auto rounded shadow-xl bg-white m-2 pb-2 produk">
                <a href="store_product.html" class="">
                    <div class="h-48 sm:h-3/5 md:h-2/4 xl:h-3/5">
                    <img class="object-cover h-full w-full" src="/img/1655699125.jpeg" alt="Sunset in the mountains">
                    </div>
                </a>
                <div class="px-3 md:px-6">
                    <div class="my-2">
                    <p class="font-semibold text-md md:text-lg">
                        <a href="store_product.html" class="hover:underline underline-offset-1">Scarlett Whitening Body Lotion by Felicya Angelista Romansa</a>
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

                <div class="sm:w-auto rounded shadow-xl bg-white m-2 pb-2 produk">
                <a href="store_product.html" class="">
                    <div class="h-48 sm:h-3/5 md:h-2/4 xl:h-3/5">
                    <img class="object-cover h-full w-full" src="/img/1655699125.jpeg" alt="Sunset in the mountains">
                    </div>
                </a>
                <div class="px-3 md:px-6">
                    <div class="my-2">
                    <p class="font-semibold text-md md:text-lg">
                        <a href="store_product.html" class="hover:underline underline-offset-1">Scarlett Whitening Body Lotion by Felicya Angelista Romansa</a>
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

                <div class="sm:w-auto rounded shadow-xl bg-white m-2 pb-2 produk">
                <a href="store_product.html" class="">
                    <div class="h-48 sm:h-3/5 md:h-2/4 xl:h-3/5">
                    <img class="object-cover h-full w-full" src="/img/1655699125.jpeg" alt="Sunset in the mountains">
                    </div>
                </a>
                <div class="px-3 md:px-6">
                    <div class="my-2">
                    <p class="font-semibold text-md md:text-lg">
                        <a href="store_product.html" class="hover:underline underline-offset-1">Scarlett Whitening Body Lotion by Felicya Angelista Romansa</a>
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

                <div class="sm:w-auto rounded shadow-xl bg-white m-2 pb-2 produk">
                <a href="store_product.html" class="">
                    <div class="h-48 sm:h-3/5 md:h-2/4 xl:h-3/5">
                    <img class="object-cover h-full w-full" src="/img/1655699125.jpeg" alt="Sunset in the mountains">
                    </div>
                </a>
                <div class="px-3 md:px-6">
                    <div class="my-2">
                    <p class="font-semibold text-md md:text-lg">
                        <a href="store_product.html" class="hover:underline underline-offset-1">Scarlett Whitening Body Lotion by Felicya Angelista Romansa</a>
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
        </section>

    </main>
<?= $this->endSection()?>

<?= $this->section('script')?> 
    <script>
            store()
    </script>
<?= $this->endSection()?>
</html>