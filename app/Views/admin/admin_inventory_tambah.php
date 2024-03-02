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
        <?php if(!empty(session()->getFlashdata('berhasil'))){ ?>
            <div class="flex w-full justify-center" id="promt">
                <div class="h-16 px-12 flex border-2 text-[#009b6a] border-[#00d08e] bg-[#d5f7ec] absolute rounded-md">
                    <p class="self-center text-xl font-semibold"><?= session()->getFlashdata('berhasil') ?></p>
                </div>
            </div>
        <?php } ?>
        <?php if(!empty(session()->getFlashdata('gagal'))){ ?>
            <div class="flex w-full justify-center" id="promt">
                <div class="h-16 px-12 flex border-2 text-[#ff0000] border-[#f50000] bg-[#fce3e3] absolute rounded-md">
                    <p class="self-center text-xl font-semibold"><?= session()->getFlashdata('gagal') ?></p>
                </div>
            </div>
        <?php } ?>
        <section class="w-full h-auto py-8 px-12 rounded-lg bg-slate-400">
            <form method="post" action="/adm/inventory/tambah/method" enctype="multipart/form-data">
                <div class="bg-slate-100 py-2 px-8 rounded-t-lg font-semibold">
                    <div class="mt-4">
                        <div class="grid grid-cols-12">
                            <div class="col-span-2 self-center">Nama Produk</div>
                            <div class="col-span-10 flex">
                                <p class="self-center mr-3">:</p>
                                <input required type="text" name="nama" id="nama" class="rounded-md px-2 py-1 w-2/4 bg-slate-200 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none" value="">
                            </div>
                        </div>
                        <div class="grid grid-cols-12 mt-2">
                            <div class="col-span-2 self-center">Barcode</div>
                            <div class="col-span-10 flex">
                                <p class="self-center mr-3">:</p>
                                <input type="text" name="barcode" id="barcode" class="rounded-md px-2 py-1 w-2/4 bg-slate-200 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none" value="">
                            </div>
                        </div>
                        <div class="grid grid-cols-12 mt-2">
                            <div class="col-span-2 self-center">PLU</div>
                            <div class="col-span-10 flex">
                                <p class="self-center mr-3">:</p>
                                <input type="text" name="plu" id="plu" class="rounded-md px-2 py-1 w-2/4 bg-slate-200 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none" value="<?= $produk?>" readonly>
                            </div>
                        </div>
                        <div class="grid grid-cols-12 mt-2">
                            <div class="col-span-2 self-center">Kategori</div>
                            <div class="col-span-10 flex">
                                <p class="self-center mr-3">:</p>
                                <input type="text" name="kategori" id="kategori" class="rounded-md px-2 py-1 w-2/4 bg-slate-200 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none" value="">
                            </div>
                        </div>
                        <div class="grid grid-cols-12 mt-2">
                            <div class="col-span-2 self-center">Dimensi</div>
                            <div class="col-span-10 flex">
                                <p class="self-center mr-3">:</p>
                                <input type="text" name="dimensi" id="dimensi" class="rounded-md px-2 py-1 w-2/4 bg-slate-200 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none" value="">
                            </div>
                        </div>
                        <div class="grid grid-cols-12 mt-2">
                            <div class="col-span-2 self-center">Berat</div>
                            <div class="col-span-10 flex">
                                <p class="self-center mr-3">:</p>
                                <input type="text" name="berat" id="berat" class="rounded-md px-2 py-1 w-2/4 bg-slate-200 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none" value="">
                            </div>
                        </div>
                        <div class="grid grid-cols-12 mt-6">
                            <div class="col-span-2 self-center">Kondisi</div>
                            <div class="col-span-10 flex">
                                <p class="self-center mr-3">:</p>
                                <select type="text" name="kondisi" class="rounded-md px-2 py-1 w-2/4 bg-slate-200 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none">
                                    <option value="ON" class="py-1">ON</option>
                                    <option value="OFF" class="py-1">OFF</option>
                                </select>
                            </div>
                        </div>

                        <div class="mt-8">
                            <div class="grid grid-cols-12">
                                <div class="col-span-2 self-center">HPP</div>
                                <div class="col-span-10 flex">
                                    <p class="self-center mr-3">:</p>
                                    <p class="self-center mr-1">Rp</p>
                                    <input type="text" name="harga-hpp" id="harga-hpp" class="rounded-md px-2 py-1 w-2/4 bg-slate-200 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none" required value="">
                                </div>
                            </div>
                            <div class="grid grid-cols-12 mt-2">
                                <div class="col-span-2 self-center">Harga Jual</div>
                                <div class="col-span-10 flex">
                                    <p class="self-center mr-3">:</p>
                                    <p class="self-center mr-1">Rp</p>
                                    <input type="text" name="harga-jual" id="harga-jual" class="rounded-md px-2 py-1 w-2/4 bg-slate-200 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none" value="">
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
                            <img class="relative object-cover rounded-lg border-2 border-sky-500 h-48 w-full gambar" src="/img/none.png" alt="">
                        </div>
                        <div class="col-span-3 ml-8 mr-4 self-center">
                            <input type="file" name="foto" class="inputfile" id="foto">
                            <label for="foto" class="py-2 px-4 mb-5 w-24 block bg-[#ff950b] hover:bg-[#f28900] text-white font-semibold rounded-sm flex justify-center">
                                <span>change</span>
                            </label>
                        </div>
                    </div>
                </div>
                
                <div class="flex mt-4">
                    <button type="submit" class="mr-4 px-4 py-2 bg-[#ff950b] hover:bg-[#f28900] rounded-lg text-white font-semibold">simpan</button>
                    <button type="button" class="mr-4 px-4 py-2 bg-white hover:bg-slate-200 rounded-lg font-semibold">batal</button>
                </div> 
            </form>
        </section>
    </main>
<?= $this->endSection()?>

<?= $this->section('script')?>
        <script>
            var inputs = document.querySelectorAll('.inputfile');
            var gambar = document.querySelector('.gambar')
            Array.prototype.forEach.call(inputs, function( input )
            {
                var label	 = input.nextElementSibling;
                var labelVal = label.innerHTML
                
                input.addEventListener('change', function(e)
                {
                    if (this.files[0].type == "image/png", "image/jpeg")
                    {    
                        var path = URL.createObjectURL(this.files[0]);
                        gambar.src = path
                    }
                });
            
            });

            var prompt = document.querySelector("#promt")
            if (prompt)
            {
                window.onload = setInterval(() => prompt.style.opacity = '0', 1000)
            }
            
        </script>
<?= $this->endSection()?>
  