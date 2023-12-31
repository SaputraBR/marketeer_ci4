<?= $this->extend('layout/admin/admin')?>

<?= $this->section('style')?>
    <style>
        .show {
            display: block;
        }
    </style>
<?= $this->endSection()?>

<?= $this->section('content')?>
    <main class="w-10/12 md:w-4/5 ml-auto px-2 py-10 md:px-12 md:py-4">
        <section class="w-full h-auto py-8 px-12 rounded-lg bg-slate-400">
            <div class="bg-slate-100 py-2 px-8 rounded-t-lg font-semibold">
                <form action="">
                    <div class="mt-4">
                        <div class="grid grid-cols-12">
                            <div class="col-span-2 self-center">Nama Produk</div>
                            <div class="col-span-10 flex">
                                <p class="self-center mr-3">:</p>
                                <input type="text" name="harga-hpp" id="number1" class="rounded-md px-2 py-1 w-2/4 bg-slate-200 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none" value="">
                            </div>
                        </div>
                        <div class="grid grid-cols-12 mt-2">
                            <div class="col-span-2 self-center">Barcode</div>
                            <div class="col-span-10 flex">
                                <p class="self-center mr-3">:</p>
                                <input type="text" name="harga-hpp" id="number1" class="rounded-md px-2 py-1 w-2/4 bg-slate-200 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none" value="">
                            </div>
                        </div>
                        <div class="grid grid-cols-12 mt-2">
                            <div class="col-span-2 self-center">PLU</div>
                            <div class="col-span-10 flex">
                                <p class="self-center mr-3">:</p>
                                <input type="text" name="harga-hpp" id="number1" class="rounded-md px-2 py-1 w-2/4 bg-slate-200 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none" value="">
                            </div>
                        </div>
                        <div class="grid grid-cols-12 mt-2">
                            <div class="col-span-2 self-center">Kategori</div>
                            <div class="col-span-10 flex">
                                <p class="self-center mr-3">:</p>
                                <input type="text" name="harga-hpp" id="number1" class="rounded-md px-2 py-1 w-2/4 bg-slate-200 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none" value="">
                            </div>
                        </div>
                        <div class="grid grid-cols-12 mt-2">
                            <div class="col-span-2 self-center">Dimensi</div>
                            <div class="col-span-10 flex">
                                <p class="self-center mr-3">:</p>
                                <input type="text" name="harga-hpp" id="number1" class="rounded-md px-2 py-1 w-2/4 bg-slate-200 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none" value="">
                            </div>
                        </div>
                        <div class="grid grid-cols-12 mt-2">
                            <div class="col-span-2 self-center">Berat</div>
                            <div class="col-span-10 flex">
                                <p class="self-center mr-3">:</p>
                                <input type="text" name="harga-hpp" id="number1" class="rounded-md px-2 py-1 w-2/4 bg-slate-200 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none" value="">
                            </div>
                        </div>

                        <div class="mt-8">
                            <div class="grid grid-cols-12">
                                <div class="col-span-2 self-center">HPP</div>
                                <div class="col-span-10 flex">
                                    <p class="self-center mr-3">:</p>
                                    <p class="self-center mr-1">Rp</p>
                                    <input type="text" name="harga-hpp" id="number1" class="rounded-md px-2 py-1 w-2/4 bg-slate-200 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none" value="">
                                </div>
                            </div>
                            <div class="grid grid-cols-12 mt-2">
                                <div class="col-span-2 self-center">Harga Jual</div>
                                <div class="col-span-10 flex">
                                    <p class="self-center mr-3">:</p>
                                    <p class="self-center mr-1">Rp</p>
                                    <input type="text" name="harga-jual" id="number1" class="rounded-md px-2 py-1 w-2/4 bg-slate-200 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex mt-4">
                        <button type="submit" class="mr-4 px-4 py-2 bg-[#ff950b] hover:bg-[#f28900] rounded-lg text-white font-semibold">terapkan</button>
                    </div>        
                </form>
            </div>

            <div class="mt-1 bg-slate-100 py-4 px-8 font-semibold">
                <div class="grid grid-cols-6  w-full">
                    <div class="p-2 col-span-1">
                        <p>gambar 1</p>
                        <div class="border-2 border-sky-500">
                            <img src="/img/none.png" alt="" class="h-32 w-full object-cover">
                        </div>
                    </div>
                    <div class="p-2 col-span-1">
                        <p>gambar 2</p>
                        <div class="border-2 border-sky-500">
                            <img src="/img/none.png" alt="" class="h-32 w-full object-cover">
                        </div>
                    </div>
                    <div class="p-2 col-span-1">
                        <p>gambar 3</p>
                        <div class=" border-2 border-sky-500">
                            <img src="/img/none.png" alt="" class="h-32 w-full object-cover">
                        </div>
                    </div>
                    <div class="p-2 col-span-1">
                        <p>gambar 4</p>
                        <div class="border-2 border-sky-500">
                            <img src="/img/none.png" alt="" class="h-32 w-full object-cover">
                        </div> 
                    </div> 
                    <div class="p-2 col-span-1">
                        <p>gambar 5</p>
                        <div class=" border-2 border-sky-500">
                            <img src="/img/none.png" alt="" class="h-32 w-full object-cover">
                        </div>
                    </div>
                    <div class="p-2 col-span-1">
                        <p>gambar 6</p>
                        <div class="border-2 border-sky-500">
                            <img src="/img/none.png" alt="" class="h-32 w-full object-cover">
                        </div> 
                    </div> 
                </div>   
                <div class="mt-2 flex">
                    <a href="/adm/inventory/tambah/gambar" class="mr-4 px-4 py-2 bg-[#ff950b] hover:bg-[#f28900] rounded-lg text-white font-semibold">edit</a>
                </div>           
            </div>
            
            <div class="flex mt-4">
                <button type="submit" class="mr-4 px-4 py-2 bg-[#ff950b] hover:bg-[#f28900] rounded-lg text-white font-semibold">simpan</button>
                <button type="submit" class="mr-4 px-4 py-2 bg-white hover:bg-slate-200 rounded-lg font-semibold">batal</button>
            </div>   
        </section>
    </main>
<?= $this->endSection()?>
  