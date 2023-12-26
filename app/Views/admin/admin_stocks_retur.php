<?= $this->extend('layout/admin/admin')?>

<?= $this->section('content')?>
    <main class="w-10/12 md:w-4/5 ml-auto px-2 py-3 md:px-12 md:py-4">
        <header class="h-auto flex rounded-lg bg-amber-500 p-8 mx-8">
            <form action="" class="w-full mb-0">
                <div class="grid grid-cols-12">
                    <div class="col-span-2 self-center">Tgl retur</div>
                    <div class="col-span-10 flex">
                        <p class="self-center mr-3">:</p>
                        <input type="text" name="harga-hpp" id="number1" class="rounded-md px-2 py-1 w-1/3 bg-gray-100 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none">
                    </div>
                </div>
                <div class="grid grid-cols-12 mt-1">
                    <div class="col-span-2 self-center">Id Transaksi</div>
                    <div class="col-span-10 flex">
                        <p class="self-center mr-3">:</p>
                        <input type="text" name="harga-hpp" id="number1" class="rounded-md px-2 py-1 w-1/3 bg-gray-100 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none">
                    </div>
                </div>
                <div class="grid grid-cols-12 mt-1">
                    <div class="col-span-2 self-center">Nama</div>
                    <div class="col-span-10 flex">
                        <p class="self-center mr-3">:</p>
                        <input type="text" name="harga-hpp" id="number1" class="rounded-md px-2 py-1 w-1/3 bg-gray-100 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none">
                    </div>
                </div>
                <div class="grid grid-cols-12 mt-1">
                    <div class="col-span-2 self-center">Jumlah</div>
                    <div class="col-span-10 flex">
                        <p class="self-center mr-3">:</p>
                        <input type="text" name="harga-hpp" id="number1" class="rounded-md px-2 py-1 w-1/3 bg-gray-100 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none">
                    </div>
                </div>
                <div class="grid grid-cols-12 mt-1">
                    <div class="col-span-2 self-center">Harga</div>
                    <div class="col-span-10 flex">
                        <p class="self-center mr-3">:</p>
                        <input type="text" name="harga-hpp" id="number1" class="rounded-md px-2 py-1 w-1/3 bg-gray-100 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none">
                    </div>
                </div>
                <div class="flex mt-6">
                    <button type="button" class="mr-4 px-4 py-2 bg-slate-500 hover:bg-slate-600 rounded-lg text-white font-semibold">batal</button>
                    <button type="submit" class="px-4 py-2 bg-slate-500 hover:bg-slate-600 rounded-lg text-white font-semibold">simpan</button>
                </div>
           </form>
        </header>

        <section class="mx-8 my-10 bg-slate-400 rounded-lg">
            <div class="grid grid-cols-12 border-b border-white">
                <p class="col-span-2 border-r-2 flex justify-center p-4">Id Transaksi</p>
                <p class="col-span-5 border-r-2 flex justify-center p-4">Nama</p>
                <p class="col-span-1 border-r-2 flex justify-center p-4">Qty</p>
                <p class="col-span-2 border-r-2 flex justify-center p-4">Harga</p>
                <p class="col-span-2 flex justify-center p-4">Tgl</p>
            </div>
            <div class="">
                <div class="grid grid-cols-12 border-b-2 text-sm">
                    <div class="col-span-2 p-4 flex justify-center">
                        <p class="exo font-semibold">RM23010603</p>
                    </div>
                    <div class="col-span-5 p-4 flex">
                        <p class="exo font-semibold">Air Jordan 7 Retro SE Men's Shoes 40-47</p>
                    </div>
                    <div class="col-span-1 p-4 flex justify-center">
                        <p class="exo font-semibold">1</p>
                    </div>
                    <div class="col-span-2 p-4 flex justify-center">
                        <p class="exo font-semibold">-3,000,123</p>
                    </div>
                    <div class="col-span-2 p-4 flex justify-center">
                        <p class="exo font-semibold text-sm">06/01/23</p>
                    </div>
                </div>
                <div class="grid grid-cols-12 border-b-2 text-sm">
                    <div class="col-span-2 p-4 flex justify-center">
                        <p class="exo font-semibold">RM23010602</p>
                    </div>
                    <div class="col-span-5 p-4 flex">
                        <p class="exo font-semibold">Google Pixel 7 Pro 12/512GB</p>
                    </div>
                    <div class="col-span-1 p-4 flex justify-center">
                        <p class="exo font-semibold">1</p>
                    </div>
                    <div class="col-span-2 p-4 flex justify-center">
                        <p class="exo font-semibold">-8,311,100</p>
                    </div>
                    <div class="col-span-2 p-4 flex justify-center">
                        <p class="exo font-semibold text-sm">06/01/23</p>
                    </div>
                </div>
                <div class="grid grid-cols-12 border-b-2 text-sm">
                    <div class="col-span-2 p-4 flex justify-center">
                        <p class="exo font-semibold">RM23010601</p>
                    </div>
                    <div class="col-span-5 p-4 flex">
                        <p class="exo font-semibold">(HSS) Kelly Sellier 28 Nata and Craie Epsom Gold</p>
                    </div>
                    <div class="col-span-1 p-4 flex justify-center">
                        <p class="exo font-semibold">1</p>
                    </div>
                    <div class="col-span-2 p-4 flex justify-center">
                        <p class="exo font-semibold">-293,313,012</p>
                    </div>
                    <div class="col-span-2 p-4 flex justify-center">
                        <p class="exo font-semibold text-sm">06/01/23</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?= $this->endSection()?>