<html lang="en">
<head>
    <?= $this->include('layout/store/head')?>
    <style>
    .custom-select {
        position: relative;
        font-family: Arial;
      }

    .aktif {
        background-color: rgb(229 231 235);
    }
    </style>
</head>

<body class="bg-slate-100 max-w-screen-2xl mx-auto">
    <nav class="top-0 z-20 bg-main flex flex-col text-white sticky" id="navMain">
        <div class="flex justify-between h-20 w-auto px-2 sm:px-6 md:px-16 lg:px-24 font-semibold ">
            <div class="trirong self-center">
                <a href="/" class="text-3xl hidden sm:block sm:text-4xl">MarketEer</a>
                <a href="/" class="h-full flex w-12 block sm:hidden">
                    <img src="/img/MARKETEER_CROPED.png" alt="" class="w-full self-center object-cover">
                </a>
            </div>
        </div>
    </nav>

    
    <main class="w-full bg-gray-200 pb-4 sm:px-10 pt-6 md:pt-0 md:px-0">
        <section class="md:grid md:grid-cols-5 w-auto sm:w-full lg:w-5/6 sm:mx-auto mx-4 sm:px-0 gap-4">
            <div class="md:col-span-3 px-8 sm:px-16 md:px-10 py-6 md:py-4 md:mt-8 bg-slate-100">
                <div class="sm:col-span-1">
                    <h1 class="font-bold text-2xl">Checkout</h1>
                    <div class="mt-6 mb-4 pb-4 border-b border-sky-400">
                        <p class="border-b border-sky-400 font-semibold ">Alamat</p>
                        <div class="flex mt-4">
                            <p class="font-semibold">Emon Lusk</p>
                            <p class="mx-2 font-bold">·</p>
                            <p class="font-semibold">085268732122</p>
                        </div>
                        <p class="font-semibold">Isla Trinidad 1548, V9410FFH Ushuaia, Tierra del Fuego, Argentina</p>
                        <button class="px-4 py-2 mt-3 bg-[#1e90ff] text-white hover:bg-[#1971c9]">Ganti Alamat</button>
                    </div>                    
                </div>


                <div class="sm:col-span-1 mt-8 border-b border-sky-400">
                    <div class="w-auto mt-4 contoltainer" id="contoltainer"> 
                        <div class="w-full flex pb-4 mb-4 item-container" id="item-container">
                            <div class="self-center">                                
                                <div class="w-16 h-16 sm:w-20 sm:h-20 border border-sky-200"> 
                                    <img src="/img/nike-jordan.jpg" alt="" class="w-full h-full object-cover">
                                </div>
                            </div>
                            <div class="ml-2">
                                <h2 class="font-semibold text-base sm:text-xl">Air Jordan 7 Retro SE Men's Shoes 40-47</h2>
                                <p class="text-xs sm:text-sm font-semibold">360 gram (1 item)</p>
                                <div class="mt-1 flex">                                    
                                    <span class="flex sm:flex-wrap mt-1">
                                        <span class="bg-[#ca0101] px-2 py-1 text-xs font-semibold text-white">15%</span>
                                        <p class="mx-1 text-xs line-through self-center text-secondary">Rp<span class="diskon-harga" id="diskon-harga">3,999,999</span></p>              
                                    </span>
                                    <p class="text-sm sm:text-lg font-bold self-center">Rp<span class="harga-brg" id="harga-brg">3,400,000</span></p>
                                </div>
                                
                            </div>
                        </div>

                        <div class="w-full flex pb-4 mb-4 item-container" id="item-container">
                            <div class="self-center">                                
                                <div class="w-16 h-16 sm:w-20 sm:h-20 border border-sky-200"> 
                                    <img src="/img/ss21710829165003_1x.jpg" alt="" class="w-full h-full object-cover">
                                </div>
                            </div>
                            <div class="ml-2">
                                <h2 class="font-semibold text-base sm:text-xl">Polo Bear by Ralph Lauren M/L/XL/XXL</h2>
                                <p class="text-xs sm:text-sm font-semibold">700 gram (1 item)</p>
                                <div class="mt-1 flex">                                    
                                    <span class="flex sm:flex-wrap mt-1">
                                        <span class="bg-[#ca0101] px-2 py-1 text-xs font-semibold text-white">38%</span>
                                        <p class="mx-1 text-xs line-through self-center text-secondary">Rp<span class="diskon-harga" id="diskon-harga">20,999,999</span></p>
                                    </span>
                                    <p class="text-sm sm:text-lg font-bold self-center">Rp<span class="harga-brg" id="harga-brg">13,020,000</span></p>
                                </div>
                                
                            </div>
                        </div>

                        <div class="w-full flex pb-4 mb-4 item-container" id="item-container">
                            <div class="self-center">                                
                                <div class="w-16 h-16 sm:w-20 sm:h-20 border border-sky-200"> 
                                    <img src="/img/Google-Pixel-7-Pro.jpg" alt="" class="w-full h-full object-cover">
                                </div>
                            </div>
                            <div class="ml-2">
                                <h2 class="font-semibold text-base sm:text-xl">Google Pixel 7 Pro 12/512GB</h2>
                                <p class="text-xs sm:text-sm font-semibold">212 g  gram (1 item)</p>
                                <div class="mt-1 flex">                                    
                                    <span class="flex sm:flex-wrap mt-1">
                                        <span class="bg-[#ca0101] px-2 py-1 text-xs font-semibold text-white">42%</span>
                                        <p class="mx-1 text-xs line-through self-center text-secondary">Rp<span class="diskon-harga" id="diskon-harga">14,999,999</span></p>              
                                    </span>
                                    <p class="text-sm sm:text-lg font-bold self-center">Rp<span class="harga-brg" id="harga-brg">9,119,999</span></p>
                                </div>                                
                            </div>
                        </div>
                    </div>     
                </div>

                <div class="mt-4 custom-select" id="custom-select">
                    <button id="dropdown-button" onclick="kiriman()" data-dropdown-toggle="dropdown" class="justify-center dropbtn self-center flex-shrink-0 z-10 inline-flex items-center py-2.5 px-3 sm:px-4 text-sm font-medium text-white bg-[#1e90ff] rounded-lg hover:bg-[#1971c9] w-64" type="button">
                        <p class="text-base pengiriman" id="pengiriman">Pengiriman</p>
                        <svg aria-hidden="true" class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div id="dropdown-category" class="overflow-hidden w-auto sm:w-64 z-10 bg-slate-300 divide-y divide-gray-100 rounded-lg shadow left-0 absolute dropdown-category hidden">
                        <div class="text-sm text-gray-700 w-full" aria-labelledby="dropdown-button" id="ul-reg">
                            <section class="cursor-pointer w-64" id="diveg">
                                <div class="px-4 py-2 hover:bg-gray-200 sousse">
                                    <div class="flex">
                                        <p class="font-semibold sm:font-normal sm:text-lg jenis-srv">Reguler</p>
                                        <p class="ml-4 text-sm sm:ml-auto self-center">(Rp18,000 - Rp23,000)</p>
                                    </div>                                
                                    <p class="mt-1 text-sm estimasi" id="estimasi">estimasi 29 - 31 Jul</p>
                                </div>
                            </section>
                            <section class="cursor-pointer w-64" id="diveg">
                                <div class="px-4 py-2 hover:bg-gray-200 sousse">
                                    <div class="flex">
                                        <p class="font-semibold sm:font-normal sm:text-lg jenis-srv">Ekonomi</p>
                                        <p class="ml-4 text-sm sm:ml-auto self-center">(Rp15,000 - Rp20,000)</p>
                                    </div>                                
                                    <p class="mt-1 text-sm estimasi" id="estimasi">estimasi 31 - 02 Agust</p>
                                </div>
                            </section>
                            <section class="cursor-pointer w-64" id="diveg">
                                <div class="px-4 py-2 hover:bg-gray-200 sousse">
                                    <div class="flex">
                                        <p class="font-semibold sm:font-normal sm:text-lg jenis-srv">Kargo</p>
                                        <p class="ml-4 text-sm sm:ml-auto self-center">(Rp50,000 - Rp58,000)</p>
                                    </div>                                
                                    <p class="mt-1 text-sm estimasi" id="estimasi">estimasi 01 - 05 Agust</p>
                                </div>
                            </section>
                        </div>
                    </div>

                </div>

                <div class="mt-2 custom-select">
                    <div class="flex hidden" id="kurir-hide">
                        <div>
                            <p class="font-semibold">Kurir</p>
                            <div class="flex">
                                <p class="font-semibold text-lg" id="jenis-kurir">JNE</p>
                                <div class="ml-2 self-center" id="harga-kurir">(Rp20.000)</div>
                            </div>
                            <p class="mb-1 text-sm ubah-est" id="ubah-est">estimasi 29 - 31 Jul</p>
                        </div>
                        <div class="self-center ml-6">
                            <button class="text-sm font-semibold hover:text-blue-600 ubah-btn" id="ubah-btn" onclick="ubah()">Ubah</button>
                        </div>
                    </div>
                    <div class="overflow-hidden w-auto sm:w-64 z-10 bg-slate-300 divide-y divide-gray-100 rounded-lg shadow absolute hidden daftar ubah-reguler" id="ubah-reguler">
                        <div class="text-sm font-semibold text-gray-700 w-full kurir-reguler" id="kurir-reguler">
                            <div class="cursor-pointer flex py-2 px-3 hover:bg-slate-100 kurir aktif" id="kurir">
                                <p class="merk" id="merk">JNE</p>
                                <p class="ml-2 harga" id="harga">(Rp20.000)</p>
                            </div>
                            <div class="cursor-pointer flex py-2 px-3 hover:bg-slate-100 kurir" id="kurir">
                                <p class="merk" id="merk">J&T</p>
                                <p class="ml-2 harga" id="harga">(Rp23.000)</p>
                            </div>
                            <div class="cursor-pointer flex py-2 px-3 hover:bg-slate-100 kurir" id="kurir">
                                <p class="merk" id="merk">SICEPAT</p>
                                <p class="ml-2 harga" id="harga">(Rp18.000)</p>
                            </div>
                        </div>
                    </div>
                    <div class="overflow-hidden w-auto sm:w-64 z-10 bg-slate-300 divide-y divide-gray-100 rounded-lg shadow absolute hidden daftar ubah-ekonomi" id="ubah-ekonomi">
                        <div class="text-sm font-semibold text-gray-700 w-full kurir-ekonomi" id="kurir-ekonomi">
                            <div class="cursor-pointer flex py-2 px-3 hover:bg-slate-100 kurir aktif" id="kurir">
                                <p class="merk" id="merk">JNE</p>
                                <p class="ml-2 harga" id="harga">(Rp18.000)</p>
                            </div>
                            <div class="cursor-pointer flex py-2 px-3 hover:bg-slate-100 kurir" id="kurir">
                                <p class="merk" id="merk">J&T</p>
                                <p class="ml-2 harga" id="harga">(Rp15.000)</p>
                            </div>
                            <div class="cursor-pointer flex py-2 px-3 hover:bg-slate-100 kurir" id="kurir">
                                <p class="merk" id="merk">SICEPAT</p>
                                <p class="ml-2 harga" id="harga">(Rp20.000)</p>
                            </div>
                        </div>
                    </div>
                    <div class="overflow-hidden w-auto sm:w-64 z-10 bg-slate-300 divide-y divide-gray-100 rounded-lg shadow absolute hidden daftar ubah-kargo" id="ubah-kargo">
                        <div class="text-sm font-semibold text-gray-700 w-full kurir-kargo" id="kurir-kargo">
                            <div class="cursor-pointer flex py-2 px-3 hover:bg-slate-100 kurir aktif" id="kurir">
                                <p class="merk" id="merk">JNE</p>
                                <p class="ml-2 harga" id="harga">(Rp55.000)</p>
                            </div>
                            <div class="cursor-pointer flex py-2 px-3 hover:bg-slate-100 kurir" id="kurir">
                                <p class="merk" id="merk">J&T</p>
                                <p class="ml-2 harga" id="harga">(Rp50.000)</p>
                            </div>
                            <div class="cursor-pointer flex py-2 px-3 hover:bg-slate-100 kurir" id="kurir">
                                <p class="merk" id="merk">SICEPAT</p>
                                <p class="ml-2 harga" id="harga">(Rp58.000)</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>            

            <div class="md:col-span-2 mt-4 md:mt-2 w-full">
                <div class="w-auto lg:w-5/6 h-auto mx-auto border border-sky-400 p-4 rounded-sm sticky top-28 bg-slate-100" >
                    <h1 class="font-bold text-lg sm:text-xl sm:text-2xl pb-1 mb-4 border-b border-gray-300">Total Belanja</h1>
                    <div class="flex mt-5 text-sm sm:text-lg sm:font-semibold md:flex-wrap">
                        <p class="">Total Harga<span class="md:text-sm lg:text-base"> (3 item)</span></p>
                        <p class="ml-auto" id="total-harga">Rp39,999,997</p>
                    </div>
                    <div class="flex mt-1 text-sm sm:text-lg sm:font-semibold md:flex-wrap">
                        <p class="">Total Diskon</p>
                        <p class="ml-auto flex">
                            <span class="self-center mr-1">
                                <i class="fa-solid fa-minus self-center"></i>
                            </span>
                            <span id="total-diskon">
                                Rp14,459,998
                            </span>
                        </p>
                    </div>
                    <div class="flex mt-1 text-sm sm:text-lg sm:font-semibold md:flex-wrap">
                        <p class="">Total Ongkir</p>
                        <p class="ml-auto flex">
                            Rp
                            <span id="total-ongkir">
                                0
                            </span>
                        </p>
                    </div>
                    <div class="flex mt-1 text-sm sm:text-lg sm:font-semibold md:flex-wrap">
                        <p class="">Dison Ongkir</p>
                        <p class="ml-auto flex">
                            <span class="self-center mr-1">
                                <i class="fa-solid fa-minus self-center"></i>
                            </span>
                            <span id="diskon-ongkir">
                                Rp2,000
                            </span>
                        </p>
                    </div>
                    <div class="flex mt-1 text-sm sm:text-lg sm:font-semibold sm:border-b border-gray-300 pb-1 md:pb-5 md:flex-wrap">
                        <p class="">Biaya Admin</p>
                        <p class="ml-auto flex">
                            <span id="administrasi">
                                Rp2,000
                            </span>
                        </p>
                    </div>
                    <div class="w-full mb-6">
                        <div class="flex font-bold sm:font-semibold text-base sm:text-xl sm:text-2xl mt-2 md:mt-5 md:mb-8 self-center md:flex-wrap" id="kontainer-sub">
                            <p class="md:block">Subtotal</p>
                            <p class="ml-auto">                            
                                Rp<span id="subtotal">0</span>
                            </p>
                        </div>
                        
                    </div>     

                    <a href="#" class="font-semibold text-sm sm:text-lg sm:text-xl text-white flex">
                        <button class="w-2/5 md:w-full px-2 py-1.5 rounded-md bg-[#ff4800] hover:bg-white mx-auto hover:border border-[#ff4800] hover:text-[#ff4800]">
                            Bayar
                        </button>
                    </a>
                </div>

                <div class="w-full bg-white rounded-t-lg overflow-hidden relative" id="slide-total" style="height: 0px;">
                    <div class="w-full h-8 bg-slate-300 absolute top-0 left-0 flex justify-center">
                        <span class="self-center" id="chevron-down">
                            <i class="fa-solid fa-chevron-down fa-xl"></i>
                        </span>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?= $this->include('layout/store/footer')?>

    <script>
        var a, b, c;
        beli()
    </script>

</body>
</html>