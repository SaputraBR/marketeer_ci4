<?= $this->extend('layout/admin/admin')?>

<?= $this->section('content')?>
    <main class="w-10/12 md:w-4/5 ml-auto px-2 py-3 md:px-12 md:py-4">
        <h1 class="text-4xl font-bold border-b-2 border-slate-400 text-[#ff950b]">Penilaian</h1>
        <div class="flex">
            <button class="ml-auto flex hover:text-[#ff950b] hover:pointer" id="button-filter">
                <span class="self-center ">
                    <i class="fa-sharp fa-solid fa-filter"></i>
                </span>
                <p class="ml-1 text-lg font-semibold">filter</p>
            </button>
        </div>
        <section class="w-full h-auto mt-4 flex border-2 border-slate-300 bg-slate-100 rounded-lg overflow-hidden">
            <div class="w-full mx-2 p-4 relative">
                <div class="flex">
                    <div class="flex">
                        <h2 class="text-xl font-bold">Andreas Christensen</h2>
                        <p class="mx-1 self-center font-bold">·</p>
                        <p class="flex items-end">23010601</p>
                    </div>
                    <p class="ml-auto">11 JUN</p>
                </div>
                <div class="flex">
                    <i class="fa-sharp fa-solid fa-star fa-sm self-center text-[#ff950b]"></i>
                    <i class="fa-sharp fa-solid fa-star fa-sm self-center text-[#ff950b]"></i>
                    <i class="fa-sharp fa-solid fa-star fa-sm self-center text-[#ff950b]"></i>
                    <i class="fa-sharp fa-solid fa-star fa-sm self-center text-[#ff950b]"></i>
                    <i class="fa-sharp fa-solid fa-star fa-sm self-center"></i>
                    <p class="text-sm font-semibold ml-1">4.5</p>
                </div> 
                
                <div class="mt-2">
                    <p>pengiriman cepat, barang bagus dan nyaman dipakai</p>
                </div>
                <div class="flex mt-2">
                    <a href="/adm/dash/penilaian/detail" class="ml-auto px-3 py-1 mr-1 rounded-lg border-2 border-slate-500 text-slate-600 font-semibold detail-pesan">detail</a>
                    <a href="#" class="px-3 py-1 rounded-lg border-2 border-[#ff1100] text-[#dd0f00] font-semibold delete-pesan">delete</a>
                </div>

            </div>
        </section>
        <section class="w-full h-auto mt-4 flex border-2 border-slate-300 bg-slate-100 rounded-lg overflow-hidden">
            <div class="w-full mx-2 p-4 relative">
                <div class="flex">
                    <div class="flex">
                        <h2 class="text-xl font-bold">Carney Chukwuemeka</h2>
                        <p class="mx-1 self-center font-bold">·</p>
                        <p class="flex items-end">23010601</p>
                    </div>
                    <p class="ml-auto">23 MAY</p>
                </div>
                <div class="flex">
                    <i class="fa-sharp fa-solid fa-star fa-sm self-center text-[#ff950b]"></i>
                    <i class="fa-sharp fa-solid fa-star fa-sm self-center text-[#ff950b]"></i>
                    <i class="fa-sharp fa-solid fa-star fa-sm self-center text-[#ff950b]"></i>
                    <i class="fa-sharp fa-solid fa-star fa-sm self-center text-[#ff950b]"></i>
                    <i class="fa-sharp fa-solid fa-star fa-sm self-center"></i>
                    <p class="text-sm font-semibold ml-1">4.5</p>
                </div> 
                <div class="mt-2">
                    <p class="">harga murah dan terjangkau</p>
                </div>
                <div class="flex mt-2">
                    <a href="/adm/dash/penilaian/detail" class="ml-auto px-3 py-1 mr-1 rounded-lg border-2 border-slate-500 text-slate-600 font-semibold detail-pesan">detail</a>
                    <a href="#" class="px-3 py-1 rounded-lg border-2 border-[#ff1100] text-[#dd0f00] font-semibold delete-pesan">delete</a>
                </div>
            </div>
        </section>
        <section class="w-full h-auto mt-4 flex border-2 border-slate-300 bg-slate-100 rounded-lg overflow-hidden">
            <div class="w-full mx-2 p-4 relative">
                <div class="flex">
                    <div class="flex">
                        <h2 class="text-xl font-bold">Mykhailo Mudryk</h2>
                        <p class="mx-1 self-center font-bold">·</p>
                        <p class="flex items-end">23010601</p>
                    </div>
                    <p class="ml-auto">16 JUL</p>
                </div>
                <div class="flex">
                    <i class="fa-sharp fa-solid fa-star fa-sm self-center text-[#ff950b]"></i>
                    <i class="fa-sharp fa-solid fa-star fa-sm self-center text-[#ff950b]"></i>
                    <i class="fa-sharp fa-solid fa-star fa-sm self-center text-[#ff950b]"></i>
                    <i class="fa-sharp fa-solid fa-star fa-sm self-center text-[#ff950b]"></i>
                    <i class="fa-sharp fa-solid fa-star fa-sm self-center text-[#ff950b]"></i>
                    <p class="text-sm font-semibold ml-1">5</p>
                </div> 
                <div class="mt-2">
                    <p class="">jangan belanja disini nanti ketagihan!!!</p>
                </div>
                <div class="flex mt-2">
                    <a href="/adm/dash/penilaian/detail" class="ml-auto px-3 py-1 mr-1 rounded-lg border-2 border-slate-500 text-slate-600 font-semibold detail-pesan">detail</a>
                    <a href="#" class="px-3 py-1 rounded-lg border-2 border-[#ff1100] text-[#dd0f00] font-semibold delete-pesan">delete</a>
                </div>
            </div>
        </section>
        
    </main>

    <section class="modal-filter" id="modal-filter">
        <div class="content-modal py-8 px-10">
            <div class="flex">
                <h1 class="font-bold text-lg mb-1">Filter</h1>
                <button class="ml-auto" id="close-button">
                    <i class="fa-solid fa-xmark fa-xl hover:text-[red]"></i>
                </button>
            </div>

            <div class="grid grid-cols-3">
                <div>
                    <span class="flex">
                        <input type="checkbox" class="mr-1">
                        <p>terbaru</p>
                    </span>
                    <span class="flex">
                        <input type="checkbox" class="mr-1">
                        <p>terlama</p>
                    </span>
                </div>
            </div>

            <div class="mt-4">
                <h1 class="font-bold text-lg">Sort</h1>
                <span class="flex">
                    <input type="checkbox" class="mr-1">
                    <p>A-Z</p>
                </span>
                <span class="flex">
                    <input type="checkbox" class="mr-1">
                    <p>Z-A</p>
                </span>
            </div>
            
            <div class="flex justify-center">
                <button class="py-1 px-4 bg-[#fa8c00] rounded-lg text-white hover:bg-[#f89f2b] text-lg font-semibold">save</button>
            </div>
            
        </div>
    </section>
<?= $this->endSection()?>

<?= $this->section('script')?>
    <script>
        diskon()
    </script>
<?= $this->endSection()?>