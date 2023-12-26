<?= $this->extend('layout/admin/admin')?>

<?= $this->section('content')?>
    <main class="w-10/12 md:w-4/5 ml-auto px-2 py-3 md:px-12 md:py-4">
        <header class="h-72 max-h-min bg-amber-500 p-8 mx-8">
            <div class="grid grid-rows-3 p-1 gap-8 h-full">
                <div class="row-span-2 grid grid-cols-3 border-b-2 border-white">
                    <div class="col-span-1 grid grid-rows-2 h-full">
                        <div class="row-span-1 relative flex justify-center">
                            <h1 class="self-center p font-bold">10</h1>
                        </div>
                        <div class="row-span-1 flex justify-center">
                            <p class="font-bold text-xl exo ">IN</p>
                            <!--<i class="fa-solid fa-arrow-down fa-2x text-[#00ff6a]"></i>-->
                        </div>
                    </div>
                    <div class="col-span-1 grid grid-rows-2 h-full">
                        <div class="row-span-1 flex justify-center">
                            <h1 class="self-center p">455</h1>
                        </div>
                        <div class="row-span-1 flex justify-center">
                            <p class="font-bold text-xl exo">STOCKS</p>
                        </div>
                    </div>
                    <div class="col-span-1 grid grid-rows-2 h-full">
                        <div class="row-span-1 relative flex justify-center">
                            <h1 class="self-center p font-bold">50</h1>
                        </div>
                        <div class="row-span-1 flex justify-center">
                            <p class="font-bold text-xl exo">OUT</p>
                            <!--<i class="fa-solid fa-arrow-up fa-2x mr-1 text-[red]"></i>-->
                        </div>
                    </div>
                </div>
                <div class="row-span-1">
                    <div class="flex justify-center">
                        <p class="font-bold text-4xl lg:text-5xl exo mb-1">Rp30.005.121.602,00</p>
                    </div>
                </div>
            </div>
        </header>

        <section class="mx-8 mt-10">
            <div class="flex justify-center">
                <a href="/adm/stocks/in" class="py-2 px-6 mr-6 rounded-lg exo font-semibold bg-slate-400 hover:bg-slate-500">
                    STOCK IN
                </a>
                <a href="/adm/stocks/out" class="py-2 px-4 mr-6 rounded-lg exo font-semibold bg-slate-400 hover:bg-slate-500">
                    STOCK OUT
                </a>
                <a href="/adm/stocks/retur" class="py-2 px-4 rounded-lg exo font-semibold bg-slate-400 hover:bg-slate-500">
                    RETURN
                </a>
            </div>

            <div class="my-8 bg-slate-400 rounded-lg">
                <div class="grid grid-cols-12 border-b border-white">
                    <p class="col-span-1 border-r-2 flex justify-center p-4">No</p>
                    <p class="col-span-6 border-r-2 flex justify-center p-4">Nama Barang</p>
                    <p class="col-span-3 border-r-2 flex justify-center p-4">Kategori</p>
                    <p class="col-span-1 border-r-2 flex justify-center p-4">Stok</p>
                    <p class="col-span-1 border-r-2 flex justify-center p-4">Kondisi</p>
                </div>
                <div class="">
                    <div class="grid grid-cols-12 border-b-2">
                        <div class="col-span-1 p-4 flex justify-center">
                            <p class="exo font-semibold">1</p>
                        </div>
                        <div class="col-span-6 p-4">
                            <p class="exo font-semibold">Air Jordan 7 Retro SE Men's Shoes 40-47</p>
                        </div>
                        <div class="col-span-3 p-4 flex justify-center">
                            <p class="exo font-semibold">Fashion Pria</p>
                        </div>
                        <div class="col-span-1 p-4 flex justify-center">
                            <p class="exo font-semibold">50</p>
                        </div>
                        <div class="col-span-1 p-4 flex justify-center">
                            <p class="exo font-semibold">ON</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-12 border-b-2">
                        <div class="col-span-1 p-4 flex justify-center">
                            <p class="exo font-semibold">2</p>
                        </div>
                        <div class="col-span-6 p-4">
                            <p class="exo font-semibold">Google Pixel 7 Pro 12/512GB</p>
                        </div>
                        <div class="col-span-3 p-4 flex justify-center">
                            <p class="exo font-semibold">Gadgets</p>
                        </div>
                        <div class="col-span-1 p-4 flex justify-center">
                            <p class="exo font-semibold">13</p>
                        </div>
                        <div class="col-span-1 p-4 flex justify-center">
                            <p class="exo font-semibold">ON</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-12 border-b-2">
                        <div class="col-span-1 p-4 flex justify-center">
                            <p class="exo font-semibold">3</p>
                        </div>
                        <div class="col-span-6 p-4">
                            <p class="exo font-semibold">(HSS) Kelly Sellier 28 Nata and Craie Epsom Gold</p>
                        </div>
                        <div class="col-span-3 p-4 flex justify-center">
                            <p class="exo font-semibold">Fashion Wanita</p>
                        </div>
                        <div class="col-span-1 p-4 flex justify-center">
                            <p class="exo font-semibold">10</p>
                        </div>
                        <div class="col-span-1 p-4 flex justify-center">
                            <p class="exo font-semibold">ON</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="flex justify-center mt-8 pb-4">
            <a href="#" class="mr-2 self-center">
                <i class="fa-solid fa-chevron-left fa-lg"></i>
            </a>
            <a href="#" class="p-2 bg-slate-600 hover:bg-slate-500 text-white rounded-lg mr-2">1</a>
            <a href="#" class="p-2 bg-slate-600 hover:bg-slate-500 text-white rounded-lg mr-2">2</a>
            <a href="#" class="p-2 bg-slate-600 hover:bg-slate-500 text-white rounded-lg mr-2">3</a>
            <a href="#" class="mr-2 self-center">
                <i class="fa-solid fa-chevron-right fa-lg"></i>
            </a>
        </div>
    </main>
<?= $this->endSection()?>
  