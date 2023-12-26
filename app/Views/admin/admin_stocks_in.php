<?= $this->extend('layout/admin/admin')?>

<?= $this->section('content')?>
    <style>
        .putin input {
          text-align: center;
        }
        ::-webkit-input-placeholder {
          text-align: center;
        }
        :-moz-placeholder {
          text-align: center;
        }
    </style>
<?= $this->endSection()?>

<?= $this->section('content')?>
    <main class="w-10/12 md:w-4/5 ml-auto px-2 py-3 md:px-16 md:py-4">
        <section class="h-auto flex rounded-lg bg-amber-500 p-8">
            <form action="" class="w-full">
                <div class="grid grid-cols-2 gap-4">
                    <div class="col-span-1 space-y-2">
                        <div class="grid grid-cols-12">
                            <div class="col-span-2 self-center">Tgl in</div>
                            <div class="col-span-10 flex">
                                <p class="self-center mr-3">:</p>
                                <input type="text" name="tanggal" id="number1" class="rounded-md px-2 py-1 w-full bg-gray-100 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none">
                            </div>
                        </div>
                        <div class="grid grid-cols-12">
                            <div class="col-span-2 self-center">Total</div>
                            <div class="col-span-10 flex">
                                <p class="self-center mr-3">:</p>
                                <input type="text" name="total-harga" id="number1" class="rounded-md px-2 py-1 w-full h-8 self-center bg-gray-100 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none">
                            </div>
                        </div>
                        <div class="grid grid-cols-12">
                            <div class="col-span-2 self-center">Harga</div>
                            <div class="col-span-10 flex">
                                <p class="self-center mr-3">:</p>
                                <input type="text" name="harga-hpp" id="number1" class="rounded-md px-2 py-1 w-full h-8 self-center bg-gray-100 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none">
                            </div>
                        </div>
                        <div class="grid grid-cols-12">
                            <div class="col-span-2 self-center">Subtotal</div>
                            <div class="col-span-10 flex">
                                <p class="self-center mr-3">:</p>
                                <input type="text" name="subtot" id="number1" class="rounded-md px-2 py-1 w-full h-8 self-center bg-gray-100 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none">
                            </div>
                        </div>
                    </div>
                    <div class="col-span-1">
                        <div class="grid grid-cols-12">
                            <div class="col-span-2 self-center">No Nota</div>
                            <div class="col-span-10 flex">
                                <p class="self-center mr-3">:</p>
                                <input type="text" name="nonota" id="number1" value="FM2301100010" class="rounded-md px-2 py-1 w-full h-8 self-center bg-gray-100 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex mt-6">
                    <button type="button" class="mr-4 px-4 py-2 bg-slate-500 hover:bg-slate-600 rounded-lg text-white font-semibold">batal</button> 
                    <button type="submit" class="px-4 py-2 bg-slate-500 hover:bg-slate-600 rounded-lg text-white font-semibold">simpan</button>
                </div>

                <div class="h-48 w-full bg-slate-50 mt-3 rounded-md overflow-y-scroll relative">
                    <div class="grid grid-cols-12 border-b-2 border-slate-400 sticky top-0 bg-slate-50">
                        <div class="col-span-1 flex justify-center border-r-2 border-slate-400 py-2">no</div>
                        <div class="col-span-2 flex justify-center border-r-2 border-slate-400 py-2">barcode</div>
                        <div class="col-span-2 flex justify-center border-r-2 border-slate-400 py-2">nama</div>
                        <div class="col-span-2 flex justify-center border-r-2 border-slate-400 py-2">hpp lama</div>
                        <div class="col-span-2 flex justify-center border-r-2 border-slate-400 py-2">hpp</div>
                        <div class="col-span-1 flex justify-center border-r-2 border-slate-400 py-2">qty</div>
                        <div class="col-span-2 flex justify-center py-2">total</div>
                    </div>
                    <div class="putin">
                        <div class="grid grid-cols-12 border-b-2 border-slate-400 text-sm" id="grid-in">
                            <div class="col-span-1 flex justify-center border-r-2 border-slate-400">
                                <p class="self-center">1</p>
                            </div>
                            <div class="col-span-2 flex justify-center border-r-2 border-slate-400">
                                <input type="text" name="barcode1" id="" value="08999999102586" class="w-full py-1 px-1 bg-slate-50 outline-none">
                            </div>
                            <div class="col-span-2 flex border-r-2 border-slate-400">
                                <p class="self-center px-1">Air Jordan 7 Retro S..</p>
                            </div>
                            <div class="col-span-2 flex justify-center border-r-2 border-slate-400">
                                <p class="self-center px-1">3,000,123</p>
                            </div>
                            <div class="col-span-2 flex justify-center border-r-2 border-slate-400" style="text-align: center;">
                                <input type="text" name="hpp1" id="hpp" value="3,000,123" class="w-full px-1 bg-slate-50 outline-none">
                            </div>
                            <div class="col-span-1 flex justify-center border-r-2 border-slate-400">
                                <input type="text" name="qty1" id="qty" value="2" class="w-full px-1 bg-slate-50 outline-none">
                            </div>
                            <div class="col-span-2 flex justify-center">
                                <p class="px-1 self-center" id="totalin"></p>
                            </div>
                        </div>
                        <div class="grid grid-cols-12 border-b-2 border-slate-400 text-sm" id="grid-in">
                            <div class="col-span-1 flex justify-center border-r-2 border-slate-400">
                                <p class="self-center">2</p>
                            </div>
                            <div class="col-span-2 flex justify-center border-r-2 border-slate-400">
                                <input type="text" name="barcode1" id="" value="08999999102586" class="w-full py-1 px-1 bg-slate-50 outline-none">
                            </div>
                            <div class="col-span-2 flex border-r-2 border-slate-400">
                                <p class="self-center px-1">Air Jordan 7 Retro S..</p>
                            </div>
                            <div class="col-span-2 flex justify-center border-r-2 border-slate-400">
                                <p class="self-center px-1">3,000,123</p>
                            </div>
                            <div class="col-span-2 flex justify-center border-r-2 border-slate-400" style="text-align: center;">
                                <input type="text" name="hpp2" id="hpp" value="3,000,123" class="w-full px-1 bg-slate-50 outline-none">
                            </div>
                            <div class="col-span-1 flex justify-center border-r-2 border-slate-400">
                                <input type="text" name="qty2" id="qty" value="3" class="w-full px-1 bg-slate-50 outline-none">
                            </div>
                            <div class="col-span-2 flex justify-center">
                                <p class="px-1 self-center" id="totalin"></p>
                            </div>
                        </div>
                        <div class="grid grid-cols-12 border-b-2 border-slate-400 text-sm" id="grid-in">
                            <div class="col-span-1 flex justify-center border-r-2 border-slate-400">
                                <p class="self-center">3</p>
                            </div>
                            <div class="col-span-2 flex justify-center border-r-2 border-slate-400">
                                <input type="text" name="barcode3" id="" value="" class="w-full py-1 px-1 bg-slate-50 outline-none">
                            </div>
                            <div class="col-span-2 flex border-r-2 border-slate-400">
                                <p class="self-center px-1"></p>
                            </div>
                            <div class="col-span-2 flex justify-center border-r-2 border-slate-400">
                                <p class="self-center px-1"></p>
                            </div>
                            <div class="col-span-2 flex justify-center border-r-2 border-slate-400" style="text-align: center;">
                                <input type="text" name="hpp3" id="hpp" value="" class="w-full px-1 bg-slate-50 outline-none">
                            </div>
                            <div class="col-span-1 flex justify-center border-r-2 border-slate-400">
                                <input type="text" name="qty3" id="qty" value="" class="w-full px-1 bg-slate-50 outline-none">
                            </div>
                            <div class="col-span-2 flex justify-center">
                                <p class="px-1 self-center" id="totalin"></p>
                            </div>
                        </div>
                        <div class="grid grid-cols-12 border-b-2 border-slate-400 text-sm" id="grid-in">
                            <div class="col-span-1 flex justify-center border-r-2 border-slate-400">
                                <p class="self-center">4</p>
                            </div>
                            <div class="col-span-2 flex justify-center border-r-2 border-slate-400">
                                <input type="text" name="barcode4" id="" value="" class="w-full py-1 px-1 bg-slate-50 outline-none">
                            </div>
                            <div class="col-span-2 flex border-r-2 border-slate-400">
                                <p class="self-center px-1"></p>
                            </div>
                            <div class="col-span-2 flex justify-center border-r-2 border-slate-400">
                                <p class="self-center px-1"></p>
                            </div>
                            <div class="col-span-2 flex justify-center border-r-2 border-slate-400" style="text-align: center;">
                                <input type="text" name="hpp4" id="hpp" value="" class="w-full px-1 bg-slate-50 outline-none">
                            </div>
                            <div class="col-span-1 flex justify-center border-r-2 border-slate-400">
                                <input type="text" name="qty4" id="qty" value="" class="w-full px-1 bg-slate-50 outline-none">
                            </div>
                            <div class="col-span-2 flex justify-center">
                                <p class="px-1 self-center" id="totalin"></p>
                            </div>
                        </div>
                        <div class="grid grid-cols-12 border-b-2 border-slate-400 text-sm" id="grid-in">
                            <div class="col-span-1 flex justify-center border-r-2 border-slate-400">
                                <p class="self-center">5</p>
                            </div>
                            <div class="col-span-2 flex justify-center border-r-2 border-slate-400">
                                <input type="text" name="barcode5" id="" value="" class="w-full py-1 px-1 bg-slate-50 outline-none">
                            </div>
                            <div class="col-span-2 flex border-r-2 border-slate-400">
                                <p class="self-center px-1"></p>
                            </div>
                            <div class="col-span-2 flex justify-center border-r-2 border-slate-400">
                                <p class="self-center px-1"></p>
                            </div>
                            <div class="col-span-2 flex justify-center border-r-2 border-slate-400" style="text-align: center;">
                                <input type="text" name="hpp5" id="hpp" value="" class="w-full px-1 bg-slate-50 outline-none">
                            </div>
                            <div class="col-span-1 flex justify-center border-r-2 border-slate-400">
                                <input type="text" name="qty5" id="qty" value="" class="w-full px-1 bg-slate-50 outline-none">
                            </div>
                            <div class="col-span-2 flex justify-center">
                                <p class="px-1 self-center" id="totalin"></p>
                            </div>
                        </div>
                        <div class="grid grid-cols-12 border-b-2 border-slate-400 text-sm" id="grid-in">
                            <div class="col-span-1 flex justify-center border-r-2 border-slate-400">
                                <p class="self-center">6</p>
                            </div>
                            <div class="col-span-2 flex justify-center border-r-2 border-slate-400">
                                <input type="text" name="barcode6" id="" value="" class="w-full py-1 px-1 bg-slate-50 outline-none">
                            </div>
                            <div class="col-span-2 flex border-r-2 border-slate-400">
                                <p class="self-center px-1"></p>
                            </div>
                            <div class="col-span-2 flex justify-center border-r-2 border-slate-400">
                                <p class="self-center px-1"></p>
                            </div>
                            <div class="col-span-2 flex justify-center border-r-2 border-slate-400" style="text-align: center;">
                                <input type="text" name="hpp6" id="hpp" value="" class="w-full px-1 bg-slate-50 outline-none">
                            </div>
                            <div class="col-span-1 flex justify-center border-r-2 border-slate-400">
                                <input type="text" name="qty6" id="qty" value="" class="w-full px-1 bg-slate-50 outline-none">
                            </div>
                            <div class="col-span-2 flex justify-center">
                                <p class="px-1 self-center" id="totalin"></p>
                            </div>
                        </div>
                    </div>
                </div>
           </form>
        </section>
    </main>
<?= $this->endSection()?>

<?= $this->section('script')?>
    <script>
        let number      = new Intl.NumberFormat('en-US')
        var putin       = document.querySelector(".putin")
        var gridIn      = putin.querySelectorAll("#grid-in")
        var val = quty = 0;
        
        for (i = 0; i < gridIn.length; i++) {
            var a = gridIn[i].querySelector("#qty").value;
            quty = parseInt(a)

            var b = gridIn[i].querySelector("#hpp").value.replace(/[^0-9]/g,"")
            if (b > 0){
                val = parseInt(b)
                gridIn[i].querySelector("#totalin").innerHTML = number.format(val * quty)
            }
            
        }
    </script>
<?= $this->endSection()?>