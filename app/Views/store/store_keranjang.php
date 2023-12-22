<html lang="en">
<?= $this->extend('layout/store/market')?>

<?= $this->section('content')?>
    <main class="w-full">
        <div class="md:grid md:grid-cols-5 mt-6">
            <div class="col-span-3 md:px-4 lg:px-16">
                <h1 class="ml-1 sm:ml-0 text-2xl sm:text-3xl font-semibold">Keranjang</h1>
                <div class="mt-1 w-full">
                    <form action="" class="form-keranjang" id="form-keranjang">
                        <div class="w-full h-14 pl-2 bg-slate-100 border-b border-sky-300 flex pb-1 sticky z-10" style="top: 100px;"> 
                            <label for="pilih-all" class="text-lg font-semibold self-center incont">
                                <input type="checkbox" value="all" name="check-all" autocomplete="off" class="checkbox-main self-center" id="pilih-all">
                                <span class="checkmark"></span>
                            </label>
                            <p class="font-semibold text-lg ml-2 self-center">Pilih Semua</p>
                            <span class="ml-auto mr-4 md:mr-0 self-center hover:text-[#ff4800] hidden" id="sampah-hidden">
                                <i class="fa-solid fa-trash-can fa-lg"></i>
                            </span> 
                        </div>

                        <div class="w-auto mt-4 ml-2 border-b border-sky-300 flex contoltainer" id="contoltainer"> 
                            <label class="incont">
                                <input type="checkbox" value="item" name="check" autocomplete="off" class="pilih-item" id="pilih-item"> 
                                <span class="checkmark"></span>
                            </label>
                            <div class="w-full grid grid-cols-3 sm:grid-cols-4 gap-2 sm:gap-4 ml-1 sm:ml-4 pb-4 item-container" id="item-container">
                                <div class="col-span-1 flex">                                
                                    <div class="w-28 h-28 sm:w-32 sm:h-32 border border-sky-200 mx-auto"> 
                                        <img src="/img/nike-jordan.jpg" alt="" class="w-full h-full object-cover">
                                    </div>
                                </div>
                                <div class="col-span-2 sm:col-span-3">
                                    <h2 class="font-semibold text-base sm:text-xl">Air Jordan 7 Retro SE Men's Shoes 40-47</h2>
                                    <div class="mt-1 flex">                                    
                                        <span class="flex flex-wrap mt-1">
                                            <span class="bg-[#ca0101] px-2 py-1 text-xs font-semibold text-white">15%</span>
                                            <p class="mx-1 text-xs line-through self-center text-secondary">Rp<span class="diskon-harga" id="diskon-harga">3,999,999</span></p>              
                                        </span>
                                        <p class="text-sm sm:text-lg font-bold self-center">Rp<span class="harga-brg" id="harga-brg">3,400,000</span></p>
                                    </div>  
                                    <div class="flex mt-2 text-sm sm:text-base">
                                        <p class="mr-1">Jumlah :</p>
                                        <p id="qty">1</p>
                                    </div>
                                    <div class="mt-3 flex right-0 mr-4 md:mr-0">
                                        <button class="ml-auto text-sm sm:text-base hover:text-[#ff4800]">Add to wishlist</button>
                                        <p class="mx-4 text-xl">|</p>
                                        <span class="hover:text-[#ff4800] self-center">
                                            <i class="fa-solid fa-trash-can sm:fa-lg"></i>
                                        </span>                             
                                    </div>
                                </div>
                            </div>
                        </div>     

                        <div class="w-auto mt-4 ml-2 border-b border-sky-300 flex contoltainer" id="contoltainer"> 
                            <label class="incont">
                                <input type="checkbox" value="item" name="check" autocomplete="off" class="pilih-item" id="pilih-item"> 
                                <span class="checkmark"></span>
                              </label>
                            <div class="w-full grid grid-cols-3 sm:grid-cols-4 gap-2 sm:gap-4 ml-1 sm:ml-4 pb-4 item-container" id="item-container">
                                <div class="col-span-1 flex">                                
                                    <div class="w-28 h-28 sm:w-32 sm:h-32 border border-sky-200 mx-auto"> 
                                        <img src="/img/ss21710829165003_1x.jpg" alt="" class="w-full h-full object-cover">
                                    </div>
                                </div>
                                <div class="col-span-2 sm:col-span-3">
                                    <h2 class="font-semibold text-base sm:text-xl">Polo Bear by Ralph Lauren M/L/XL/XXL</h2>
                                    <div class="mt-1 flex">                                    
                                        <span class="flex flex-wrap mt-1">
                                            <span class="bg-[#ca0101] px-2 py-1 text-xs font-semibold text-white">38%</span>
                                            <p class="mx-1 text-xs line-through self-center text-secondary">Rp<span class="diskon-harga" id="diskon-harga">20,999,999</span></p>              
                                        </span>
                                        <p class="text-sm sm:text-lg font-bold self-center">Rp<span class="harga-brg" id="harga-brg">13,020,000</span></p>
                                    </div>  
                                    <div class="flex mt-2 text-sm sm:text-base">
                                        <p class="mr-1">Jumlah :</p>
                                        <p id="qty">1</p>
                                    </div>
                                    <div class="mt-3 flex right-0 mr-4 md:mr-0">
                                        <button class="ml-auto text-sm sm:text-base hover:text-[#ff4800]">Add to wishlist</button>
                                        <p class="mx-4 text-xl">|</p>
                                        <span class="hover:text-[#ff4800] self-center">
                                            <i class="fa-solid fa-trash-can sm:fa-lg"></i>
                                        </span>                             
                                    </div>
                                </div>
                            </div>
                        </div> 
                        
                        <div class="w-auto mt-4 ml-2 border-b border-sky-300 flex contoltainer" id="contoltainer"> 
                            <label class="incont">
                                <input type="checkbox" value="item" name="check" autocomplete="off" class="pilih-item" id="pilih-item"> 
                                <span class="checkmark"></span>
                              </label>
                            <div class="w-full grid grid-cols-3 sm:grid-cols-4 gap-2 sm:gap-4 ml-1 sm:ml-4 pb-4 item-container" id="item-container">
                                <div class="col-span-1 flex">
                                    <div class="w-28 h-28 sm:w-32 sm:h-32 border border-sky-200 mx-auto"> 
                                        <img src="/img/Google-Pixel-7-Pro.jpg" alt="" class="w-full h-full object-cover">
                                    </div>
                                </div>
                                <div class="col-span-2 sm:col-span-3">
                                    <h2 class="font-semibold text-base sm:text-xl">Google Pixel 7 Pro 12/512GB</h2>
                                    <div class="mt-1 flex">                                    
                                        <span class="flex flex-wrap mt-1">
                                            <span class="bg-[#ca0101] px-2 py-1 text-xs font-semibold text-white">42%</span>
                                            <p class="mx-1 text-xs line-through self-center text-secondary">Rp<span class="diskon-harga" id="diskon-harga">14,999,999</span></p>              
                                        </span>
                                        <p class="text-sm sm:text-lg font-bold self-center">Rp<span class="harga-brg" id="harga-brg">9,119,999</span></p>
                                    </div>  
                                    <div class="flex mt-2 text-sm sm:text-base">
                                        <p class="mr-1">Jumlah :</p>
                                        <p id="qty">1</p>
                                    </div>
                                    <div class="mt-3 flex right-0 mr-4 md:mr-0">
                                        <button class="ml-auto text-sm sm:text-base hover:text-[#ff4800]">Add to wishlist</button>
                                        <p class="mx-4 text-xl">|</p>
                                        <span class="hover:text-[#ff4800] self-center">
                                            <i class="fa-solid fa-trash-can sm:fa-lg"></i>
                                        </span>                             
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-span-2 fixed bottom-0 left-0 right-0 md:relative w-full h-auto md:p-4 lg:p-0 z-24"  id="kontainer-total">
                <div class="w-auto lg:w-3/4 h-auto xl:h-80 bg-white border-t-2 md:border-2 border-sky-300 p-4 md:sticky md:top-28" id="kontainer-first">
                    <h1 class="font-bold text-lg sm:text-xl sm:text-2xl pb-1 mb-4 border-b border-gray-300" id="bel-tot">Total Belanja</h1>
                    <div class="md:flex mt-5 text-sm md:text-lg sm:font-semibold md:flex-wrap" id="harga-cont">
                        <p class="">Total Harga
                            <span class="hidden md:text-sm lg:text-base" id="hidden-jml"> (<span id="jml-brg"></span> item)</span>
                        </p>
                        <p class="ml-auto">Rp<span id="total-harga">0</span></p>
                    </div>
                    <div class="md:flex mt-1 text-sm md:text-lg sm:font-semibold sm:border-b border-gray-300 pb-1 md:pb-5 md:flex-wrap"id="diskon-cont">
                        <p class="">Total Diskon</p>
                        <p class="ml-auto flex">
                            <span class="self-center mr-1">
                                <i class="fa-solid fa-minus self-center"></i>
                            </span>
                            <span>
                                Rp
                            </span>
                            <span id="total-diskon">0</span>
                        </p>
                    </div>
                    <div class="flex md:block w-full" id="button-sub">
                        <div class="flex font-bold sm:font-semibold text-base sm:text-xl sm:text-2xl mt-2 md:mt-5 md:mb-8 self-center md:flex-wrap" id="kontainer-sub">
                            <p class="md:block" id="sub-tot">Subtotal</p>
                            <p class="ml-auto">                            
                                <span>Rp</span>
                                <span id="total-belanja">0</span>
                                <span class="md:hidden ml-2 self-center" id="chevron-up">
                                    <i class="fa-solid fa-chevron-up"></i>
                                </span>
                            </p>
                        </div>
                        
                        <div class="font-semibold text-sm sm:text-lg sm:text-xl text-white ml-auto self-center">
                            <a href="/beli">
                                <button class="md:w-full px-2 py-1.5 rounded-md bg-[#ff4800] hover:bg-white hover:border border-[#ff4800] hover:text-[#ff4800]">
                                    Bayar
                                </button>
                            </a>
                        </div>
                    </div>                    
                </div>

                <div class="w-full bg-white rounded-t-lg overflow-hidden relative" id="slide-total" style="height: 0px;">
                    <div class="w-full h-8 bg-slate-300 absolute top-0 left-0 flex justify-center">
                        <span class="self-center" id="chevron-down">
                            <i class="fa-solid fa-chevron-down fa-xl"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        
    </main>
<?= $this->endSection()?>

<?= $this->section('script')?>
    <script>
        keranjang()
    </script>
<?= $this->endSection()?>
</html>