<?= $this->extend('layout/admin/admin')?>

<?= $this->section('content')?>
    <main class="w-10/12 md:w-4/5 ml-auto px-2 py-3 md:px-12 md:py-4">
        <section class="mx-4">
            <section class="my-2 rounded-lg">
                <div class="bg-slate-400 mb-4 py-6 px-8 rounded-t-lg font-semibold">
                    <form>
                        <label for="period" class="block mb-2 text-xl">Pilih Periode :</label>
                        <input type="date" id="period" name="period1" class="px-2 py-1 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none">
                        <input type="date" id="period" name="period2" class="mb-3 px-2 py-1 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none">

                        <label for="period" class="block mb-2 text-xl">Atau cari :</label>
                        <input type="text" id="noid" name="noid" class="px-2 py-1 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none">
                        <button class="block mt-4 px-4 py-2 bg-[#ff950b] hover:bg-[#f38a00] text-white rounded-lg font-semibold" type="submit">Submit</button>
                    </form>
                </div>
                <div class="mt-2 bg-slate-300">
                    <div class="grid grid-cols-12 border-b border-white font-semibold">
                        <p class="col-span-3 border-r-2 flex justify-center p-4">Id Transaksi</p>
                        <p class="col-span-6 border-r-2 flex justify-center p-4">Nama Barang</p>
                        <p class="col-span-1 border-r-2 flex justify-center p-4">Out</p>
                        <p class="col-span-2 flex justify-center p-4">Tgl</p>
                    </div>
                    <div class="">
                        <div class="grid grid-cols-12 border-b-2 text-sm">
                            <div class="col-span-3 p-4 flex justify-center">
                                <p class="exo font-semibold">FK23010605</p>
                            </div>
                            <div class="col-span-6 p-4">
                                <a href="/adm/stocks/out/product" class="exo font-semibold">Air Jordan 7 Retro SE Men's Shoes 40-47</a>
                            </div>
                            <div class="col-span-1 p-4 flex justify-center">
                                <p class="exo font-semibold">1</p>
                            </div>
                            <div class="col-span-2 p-4 flex justify-center">
                                <p class="exo font-semibold text-sm">06/01/23</p>
                            </div>
                        </div>
                        <div class="grid grid-cols-12 border-b-2 text-sm">
                            <div class="col-span-3 p-4 flex justify-center">
                                <p class="exo font-semibold">FK23010602</p>
                            </div>
                            <div class="col-span-6 p-4">
                                <a href="/adm/stocks/out/product" class="exo font-semibold">Google Pixel 7 Pro 12/512GB</a>
                            </div>
                            <div class="col-span-1 p-4 flex justify-center">
                                <p class="exo font-semibold">1</p>
                            </div>
                            <div class="col-span-2 p-4 flex justify-center">
                                <p class="exo font-semibold text-sm">06/01/23</p>
                            </div>
                        </div>
                        <div class="grid grid-cols-12 border-b-2 text-sm">
                            <div class="col-span-3 p-4 flex justify-center">
                                <p class="exo font-semibold">FK23010603</p>
                            </div>
                            <div class="col-span-6 p-4">
                                <a href="/adm/stocks/out/product" class="exo font-semibold">(HSS) Kelly Sellier 28 Nata and Craie Epsom Gold</a>
                            </div>
                            <div class="col-span-1 p-4 flex justify-center">
                                <p class="exo font-semibold">1</p>
                            </div>
                            <div class="col-span-2 p-4 flex justify-center">
                                <p class="exo font-semibold text-sm">06/01/23</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="flex justify-center mt-8 pb-4">
                <a href="#" class="mr-2 self-center">
                    <i class="fa-solid fa-chevron-left fa-lg"></i>
                </a>
                <a href="#" class="p-2 bg-[#ff950b] hover:bg-[#df7e00] text-white rounded-lg mr-2">1</a>
                <a href="#" class="p-2 bg-[#ff950b] hover:bg-[#df7e00] text-white rounded-lg mr-2">2</a>
                <a href="#" class="p-2 bg-[#ff950b] hover:bg-[#df7e00] text-white rounded-lg mr-2">3</a>
                <a href="#" class="mr-2 self-center">
                    <i class="fa-solid fa-chevron-right fa-lg"></i>
                </a>
            </div>
        </section>
    </main>
<?= $this->endSection()?>
  