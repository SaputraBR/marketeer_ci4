<?= $this->extend('layout/admin/admin')?>

<?= $this->section('style')?>
    <style>
        .show {
            display: block;
        }

        #foto {
            width: 0.1px;
            height: 0.1px;
            opacity: 0;
            overflow: hidden;
            position: absolute;
            z-index: -1;
        }
    </style>
<?= $this->endSection()?>

<?= $this->section('content')?>
    <main class="w-10/12 md:w-4/5 ml-auto px-2 py-10 md:px-12 md:py-4">
        <section class="w-full h-auto py-8 px-12 rounded-lg bg-slate-400">
            <form method="post" action="" enctype="multipart/form-data">
                <?php foreach ($barang as $produk) :?>
                    <div class="bg-slate-100 py-2 px-8 rounded-t-lg font-semibold">
                        <div class="mt-4">
                            <div class="grid grid-cols-12">
                                <div class="col-span-2 self-center">Nama Produk</div>
                                <div class="col-span-10 flex">
                                    <p class="self-center mr-3">:</p>
                                    <input type="text" name="harga-hpp" id="number1" class="rounded-md px-2 py-1 w-2/4 bg-slate-200 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none" value="<?= $produk['nama']?>">
                                </div>
                            </div>
                            <div class="grid grid-cols-12 mt-2">
                                <div class="col-span-2 self-center">Barcode</div>
                                <div class="col-span-10 flex">
                                    <p class="self-center mr-3">:</p>
                                    <input type="text" name="harga-hpp" id="number1" class="rounded-md px-2 py-1 w-2/4 bg-slate-200 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none" value="<?= $produk['barcode']?>">
                                </div>
                            </div>
                            <div class="grid grid-cols-12 mt-2">
                                <div class="col-span-2 self-center">PLU</div>
                                <div class="col-span-10 flex">
                                    <p class="self-center mr-3">:</p>
                                    <input type="text" name="harga-hpp" id="number1" class="rounded-md px-2 py-1 w-2/4 bg-slate-200 border border-slate-300" value="<?= $produk['plu']?>" disabled>
                                    <span>
                                </div>
                            </div>
                            <div class="grid grid-cols-12 mt-2">
                                <div class="col-span-2 self-center">Kategori</div>
                                <div class="col-span-10 flex">
                                    <p class="self-center mr-3">:</p>
                                    <input type="text" name="harga-hpp" id="number1" class="rounded-md px-2 py-1 w-2/4 bg-slate-200 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none" value="<?= $produk['kategori']?>">
                                </div>
                            </div>
                            <div class="grid grid-cols-12 mt-2">
                                <div class="col-span-2 self-center">Dimensi</div>
                                <div class="col-span-10 flex">
                                    <p class="self-center mr-3">:</p>
                                    <input type="text" name="harga-hpp" id="number1" class="rounded-md px-2 py-1 w-2/4 bg-slate-200 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none" value="<?= $produk['dimensi']?>">
                                </div>
                            </div>
                            <div class="grid grid-cols-12 mt-2">
                                <div class="col-span-2 self-center">Berat</div>
                                <div class="col-span-10 flex">
                                    <p class="self-center mr-3">:</p>
                                    <input type="text" name="harga-hpp" id="number1" class="rounded-md px-2 py-1 w-2/4 bg-slate-200 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none" value="<?= $produk['berat']?>">
                                </div>
                            </div>
                            <div class="mt-4">
                                <div class="grid grid-cols-12">
                                    <div class="col-span-2 self-center">HPP</div>
                                    <div class="col-span-10 flex">
                                        <p class="self-center mr-3">:</p>
                                        <p class="self-center mr-1">Rp</p>
                                        <input type="text" name="harga-hpp" id="number1" class="rounded-md px-2 py-1 w-2/4 bg-slate-200 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none" value="<?= $produk['hpp']?>">
                                    </div>
                                </div>
                                <div class="grid grid-cols-12 mt-2">
                                    <div class="col-span-2 self-center">Harga Jual</div>
                                    <div class="col-span-10 flex">
                                        <p class="self-center mr-3">:</p>
                                        <p class="self-center mr-1">Rp</p>
                                        <input type="text" name="harga-jual" id="number1" class="rounded-md px-2 py-1 w-2/4 bg-slate-200 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none" value="<?= $produk['harga_jual']?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex mt-4">
                            <button type="submit" class="mr-4 px-4 py-2 bg-[#ff950b] hover:bg-[#f28900] rounded-lg text-white font-semibold">terapkan</button>
                        </div>
                    </div>

                    <div class="mt-1 bg-slate-100 py-4 px-8 font-semibold">
                        <div class="flex">
                            <div class="w-48 mb-2">
                                <p class="mb-1">gambar</p>
                                <img class="relative object-cover rounded-lg border-2 border-sky-500 h-48 w-full gambar" src="/img/post_picture/<?= $produk['gambar']?>" alt="">
                            </div>
                            <div class="col-span-3 ml-8 mr-4 self-center">
                                <button class="py-2 px-4 mb-5 w-24 block bg-[#ff950b] hover:bg-[#f28900] text-white font-semibold rounded-sm">delete</button>
                                <input type="file" name="foto" class="inputfile" id="foto">
                                <label for="foto" class="py-2 px-4 w-24 block border-2 border-[#f28900] hover:bg-[#f28900] hover:border-[#f28900] hover:text-white font-semibold rounded-sm flex justify-center">
                                    <span>change</span>
                                </label>
                            </div>
                        </div>    
                    </div>
                    
                    <div class="flex mt-4">
                        <button type="submit" class="mr-4 px-4 py-2 bg-[#ff950b] hover:bg-[#f28900] rounded-lg text-white font-semibold">simpan</button>
                        <button type="submit" class="mr-4 px-4 py-2 bg-white hover:bg-slate-200 rounded-lg font-semibold">batal</button>
                    </div>
                <?php endforeach; ?>
            </form> 
        </section>
    </main>
<?= $this->endSection()?>
  