<?= $this->extend('layout/admin/admin')?>

<?= $this->section('style')?>
    <style>
        #pen:hover {
            fill: #ff950b;
            cursor: pointer;
        }

        #sampah:hover {
            fill: #ee8700;
            cursor: pointer;
        }

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
    <main class="w-10/12 h-auto md:w-4/5 ml-auto px-2 py-3 md:px-12 md:py-4">
        <section class="w-full h-auto rounded-lg bg-slate-300">
            <div class="py-6 px-14">
                <form action="" enctype="multipart/form-data" id="text-editor" class="">
                    <label for="judul" class="text-xl font-semibold">Judul</label>
                    <input type="text" name="judul" id="judul" value="Air Jordan 7 Retro SE Men's Shoes 40-47" class="w-1/2 py-1 px-1 ml-2 bg-slate-50 rounded-md">
                    <h1 class="text-xl font-semibold mt-3">Masukkan item</h1>
                    <div class="h-auto w-full bg-slate-50 border-2 border-slate-400">
                        <div class="grid grid-cols-12 border-b-2 border-slate-400">
                            <div class="col-span-1 flex justify-center border-r-2 border-slate-400 py-2">no</div>
                            <div class="col-span-2 flex justify-center border-r-2 border-slate-400 py-2">barcode</div>
                            <div class="col-span-3 flex justify-center border-r-2 border-slate-400 py-2">nama</div>
                            <div class="col-span-2 flex justify-center border-r-2 border-slate-400 py-2">hpp</div>
                            <div class="col-span-2 flex justify-center border-r-2 border-slate-400 py-2">h jual</div>
                            <div class="col-span-2 flex justify-center py-2">h markup</div>
                        </div>
                        <div class="putin">
                            <div class="grid grid-cols-12 border-b-2 border-slate-400 text-sm" id="grid-in">
                                <div class="col-span-1 flex justify-center border-r-2 border-slate-400">
                                    <p class="self-center">1</p>
                                </div>
                                <div class="col-span-2 flex justify-center border-r-2 border-slate-400">
                                    <input type="text" name="barcode1" id="" value="08999999102586" class="w-full py-1 px-1 bg-slate-50 outline-none">
                                </div>
                                <div class="col-span-3 flex border-r-2 border-slate-400">
                                    <input type="text" name="nama1" id="nama" value="Air Jordan 7 Retro SE Men's, 40" class="w-full py-1 px-1 bg-slate-50 outline-none">
                                </div>
                                <div class="col-span-2 flex justify-center border-r-2 border-slate-400">
                                    <p class="self-center px-1">3,000,123</p>
                                </div>
                                <div class="col-span-2 flex justify-center border-r-2 border-slate-400" style="text-align: center;">
                                    <input type="text" name="hpp1" id="hpp" value="3,400,000" class="w-full px-1 bg-slate-50 outline-none">
                                </div>
                                <div class="col-span-2 flex justify-center">
                                    <input type="text" name="mark1" id="mark" value="3,999,999" class="w-full px-1 bg-slate-50 outline-none">
                                </div>
                            </div>
                            <div class="grid grid-cols-12 border-b-2 border-slate-400 text-sm" id="grid-in">
                                <div class="col-span-1 flex justify-center border-r-2 border-slate-400">
                                    <p class="self-center">2</p>
                                </div>
                                <div class="col-span-2 flex justify-center border-r-2 border-slate-400">
                                    <input type="text" name="barcode2" id="" value="" class="w-full py-1 px-1 bg-slate-50 outline-none">
                                </div>
                                <div class="col-span-3 flex border-r-2 border-slate-400">
                                    <input type="text" name="nama2" id="nama" value="" class="w-full py-1 px-1 bg-slate-50 outline-none">
                                </div>
                                <div class="col-span-2 flex justify-center border-r-2 border-slate-400">
                                    <p class="self-center px-1"></p>
                                </div>
                                <div class="col-span-2 flex justify-center border-r-2 border-slate-400" style="text-align: center;">
                                    <input type="text" name="hpp2" id="hpp" value="" class="w-full px-1 bg-slate-50 outline-none">
                                </div>
                                <div class="col-span-2 flex justify-center">
                                    <input type="text" name="mark2" id="mark" value="" class="w-full px-1 bg-slate-50 outline-none">
                                </div>
                            </div>
                            <div class="grid grid-cols-12 border-b-2 border-slate-400 text-sm" id="grid-in">
                                <div class="col-span-1 flex justify-center border-r-2 border-slate-400">
                                    <p class="self-center">3</p>
                                </div>
                                <div class="col-span-2 flex justify-center border-r-2 border-slate-400">
                                    <input type="text" name="barcode2" id="" value="" class="w-full py-1 px-1 bg-slate-50 outline-none">
                                </div>
                                <div class="col-span-3 flex border-r-2 border-slate-400">
                                    <input type="text" name="nama2" id="nama" value="" class="w-full py-1 px-1 bg-slate-50 outline-none">
                                </div>
                                <div class="col-span-2 flex justify-center border-r-2 border-slate-400">
                                    <p class="self-center px-1"></p>
                                </div>
                                <div class="col-span-2 flex justify-center border-r-2 border-slate-400" style="text-align: center;">
                                    <input type="text" name="hpp2" id="hpp" value="" class="w-full px-1 bg-slate-50 outline-none">
                                </div>
                                <div class="col-span-2 flex justify-center">
                                    <input type="text" name="mark2" id="mark" value="" class="w-full px-1 bg-slate-50 outline-none">
                                </div>
                            </div>
                            <div class="grid grid-cols-12 border-b-2 border-slate-400 text-sm" id="grid-in">
                                <div class="col-span-1 flex justify-center border-r-2 border-slate-400">
                                    <p class="self-center">4</p>
                                </div>
                                <div class="col-span-2 flex justify-center border-r-2 border-slate-400">
                                    <input type="text" name="barcode2" id="" value="" class="w-full py-1 px-1 bg-slate-50 outline-none">
                                </div>
                                <div class="col-span-3 flex border-r-2 border-slate-400">
                                    <input type="text" name="nama2" id="nama" value="" class="w-full py-1 px-1 bg-slate-50 outline-none">
                                </div>
                                <div class="col-span-2 flex justify-center border-r-2 border-slate-400">
                                    <p class="self-center px-1"></p>
                                </div>
                                <div class="col-span-2 flex justify-center border-r-2 border-slate-400" style="text-align: center;">
                                    <input type="text" name="hpp2" id="hpp" value="" class="w-full px-1 bg-slate-50 outline-none">
                                </div>
                                <div class="col-span-2 flex justify-center">
                                    <input type="text" name="mark2" id="mark" value="" class="w-full px-1 bg-slate-50 outline-none">
                                </div>
                            </div>
                            <div class="grid grid-cols-12 border-b-2 border-slate-400 text-sm" id="grid-in">
                                <div class="col-span-1 flex justify-center border-r-2 border-slate-400">
                                    <p class="self-center">5</p>
                                </div>
                                <div class="col-span-2 flex justify-center border-r-2 border-slate-400">
                                    <input type="text" name="barcode2" id="" value="" class="w-full py-1 px-1 bg-slate-50 outline-none">
                                </div>
                                <div class="col-span-3 flex border-r-2 border-slate-400">
                                    <input type="text" name="nama2" id="nama" value="" class="w-full py-1 px-1 bg-slate-50 outline-none">
                                </div>
                                <div class="col-span-2 flex justify-center border-r-2 border-slate-400">
                                    <p class="self-center px-1"></p>
                                </div>
                                <div class="col-span-2 flex justify-center border-r-2 border-slate-400" style="text-align: center;">
                                    <input type="text" name="hpp2" id="hpp" value="" class="w-full px-1 bg-slate-50 outline-none">
                                </div>
                                <div class="col-span-2 flex justify-center">
                                    <input type="text" name="mark2" id="mark" value="" class="w-full px-1 bg-slate-50 outline-none">
                                </div>
                            </div>
                            <div class="grid grid-cols-12" id="grid-in">
                                <div class="col-span-1 flex justify-center border-r-2 border-slate-400">
                                    <p class="self-center">6</p>
                                </div>
                                <div class="col-span-2 flex justify-center border-r-2 border-slate-400">
                                    <input type="text" name="barcode2" id="" value="" class="w-full py-1 px-1 bg-slate-50 outline-none">
                                </div>
                                <div class="col-span-3 flex border-r-2 border-slate-400">
                                    <input type="text" name="nama2" id="nama" value="" class="w-full py-1 px-1 bg-slate-50 outline-none">
                                </div>
                                <div class="col-span-2 flex justify-center border-r-2 border-slate-400">
                                    <p class="self-center px-1"></p>
                                </div>
                                <div class="col-span-2 flex justify-center border-r-2 border-slate-400" style="text-align: center;">
                                    <input type="text" name="hpp2" id="hpp" value="" class="w-full px-1 bg-slate-50 outline-none">
                                </div>
                                <div class="col-span-2 flex justify-center">
                                    <input type="text" name="mark2" id="mark" value="" class="w-full px-1 bg-slate-50 outline-none">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 grid grid-cols-4 gap-2">
                        <div class="col-span-1">
                            <p class="font-semibold text-xl block">Kategori</p>
                            <select type="text" name="kategori-post" class="rounded-md px-2 py-1 w-auto bg-slate-100 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none">
                                <option class="py-2 bg-slate-400" disabled></option>
                                <option value="Best Seller" class="py-2">Best Offers - Best Seller</option>
                                <option value="Favorite" class="py-2">Best Offers - Favorite</option>
                                <option value="Men" class="py-2">Best Offers - Men</option>
                                <option value="Women" class="py-2">Best Offers - Women</option>
                                <option value="Daily Offers" class="py-2">Daily Offers</option>
                                <option value="Trends" class="py-2">Trends</option>
                            </select>
                        </div>
                        <div class="col-span-1">
                            <label for="kategori-brg" class="text-xl font-semibold block">Kategori Barang</label>
                            <input type="text" name="kategori-brg" id="" value="Fashion Pria" class="rounded-md px-2 py-1 w-auto bg-slate-100 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none">
                        </div>
                        <div class="col-span-1">
                            <label for="dimensi" class="text-xl font-semibold block">Dimensi</label>
                            <input type="text" name="dimensi" id="" value="30cm x 15cm x 10cm" class="rounded-md px-2 py-1 w-auto bg-slate-100 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none">
                        </div>
                        <div class="col-span-1">
                            <label for="berat" class="text-xl font-semibold block">Berat</label>
                            <input type="text" name="berat" id="" value="360gr" class="rounded-md px-2 py-1 w-auto bg-slate-100 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none">
                        </div>
                    </div>
                    <div class="mt-4 grid grid-cols-4 gap-2">
                        <div class="col-span-1">
                            <label for="ongkir" class="text-xl font-semibold block">Ongkir</label>
                            <input type="text" name="ongkir" id="" value="Ongkir 10 rb - 12 rb" class="rounded-md px-2 py-1 w-auto bg-slate-100 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none">
                        </div>
                        <div class="col-span-1">
                            <label for="estimasi" class="text-xl font-semibold block">Estimasi</label>
                            <input type="text" name="estimasi" id="" value="Estimasi 12 Mei - 31 Des" class="rounded-md px-2 py-1 w-auto bg-slate-100 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none">
                        </div>
                    </div>

                    <div class="w-full h-auto mt-8">
                        <h1 class="font-semibold text-xl">Atur Gambar</h1>
                        <div class="grid grid-cols-6">
                            <div class="col-span-1">
                                <h2 class="font-semibold">Gambar 1</h2>
                                <img src="/img/nike-jordan.jpg" alt="" class="w-20 h-20 mx-auto object-cover">
                                <div class="flex justify-center mt-1">
                                    <div class="col-span-1 flex justify-center flex py-1 space-x-4">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512" id="pen">
                                                <path d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"/>
                                            </svg>
                                        </span>
                                        <span class="self-center" id="button-hps">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512" id="sampah">
                                                <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-1">
                                <h2 class="font-semibold">Gambar 2</h2>
                                <img src="/img/air_jordan_7_3.jpg" alt="" class="w-20 h-20 mx-auto object-cover">
                                <div class="flex justify-center mt-1">
                                    <div class="col-span-1 flex justify-center flex py-1 space-x-4">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512" id="pen">
                                                <path d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"/>
                                            </svg>
                                        </span>
                                        <span class="self-center" id="button-hps">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512" id="sampah">
                                                <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-1">
                                <h2 class="font-semibold">Gambar 3</h2>
                                <img src="/img/air_jordan_7_2.jpg" alt="" class="w-20 h-20 mx-auto object-cover">
                                <div class="flex justify-center mt-1">
                                    <div class="col-span-1 flex justify-center flex py-1 space-x-4">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512" id="pen">
                                                <path d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"/>
                                            </svg>
                                        </span>
                                        <span class="self-center" id="button-hps">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512" id="sampah">
                                                <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-1">
                                <h2 class="font-semibold">Gambar 4</h2>
                                <img src="/img/air_jordan_7.jpg" alt="" class="w-20 h-20 mx-auto object-cover">
                                <div class="flex justify-center mt-1">
                                    <div class="col-span-1 flex justify-center flex py-1 space-x-4">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512" id="pen">
                                                <path d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"/>
                                            </svg>
                                        </span>
                                        <span class="self-center" id="button-hps">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512" id="sampah">
                                                <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-1">
                                <h2 class="font-semibold">Gambar 5</h2>
                                <img src="/img/none.png" alt="" class="w-20 h-20 mx-auto object-cover">
                                <div class="flex justify-center mt-1">
                                    <div class="col-span-1 flex justify-center flex py-1 space-x-4">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512" id="pen">
                                                <path d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"/>
                                            </svg>
                                        </span>
                                        <span class="self-center" id="button-hps">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512" id="sampah">
                                                <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-1">
                                <h2 class="font-semibold">Gambar 6</h2>
                                <img src="/img/none.png" alt="" class="w-20 h-20 mx-auto object-cover">
                                <div class="flex justify-center mt-1">
                                    <div class="col-span-1 flex justify-center flex py-1 space-x-4">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512" id="pen">
                                                <path d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"/>
                                            </svg>
                                        </span>
                                        <span class="self-center" id="button-hps">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512" id="sampah">
                                                <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>                            
                    </div>

                    <div class="mt-8">
                        <p class="font-semibold text-xl block mb-1">Tambah Keterangan</p>
                        <textarea name="content" id="editor1" class="" cols="" rows=""></textarea>
                    </div>
                    
                    <div class="flex mt-6 space-x-6">
                        <button type="button" class="px-2 py-1 bg-red-600 hover:bg-[#ff4242] text-lg text-white rounded-md">Batal</button>
                        <button type="submit" class="px-2 py-1 bg-[#ff950b] hover:bg-[#df7e00] text-lg text-white rounded-md">Simpan</button>
                    </div>
                </form>
            </div>
        </section>
    </main>
<?= $this->endSection()?>

<?= $this->section('script')?>
    <script>
        CKEDITOR.replace( 'editor1' );
    </script>
<?= $this->endSection()?>