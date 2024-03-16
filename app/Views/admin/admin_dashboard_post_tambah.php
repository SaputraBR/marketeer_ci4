<?= $this->extend('layout/admin/admin')?>

<?= $this->section('style')?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="/src/custom.js"></script>
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

        .inputfile {
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
    <main class="w-10/12 h-auto md:w-4/5 ml-auto px-2 py-3 md:px-12 md:py-4">
        <section class="w-full h-auto rounded-lg bg-slate-300">
            <div class="py-6 px-14">
                <form action="" enctype="multipart/form-data" id="text-editor" class="">
                    <label for="judul" class="text-xl font-semibold">Judul</label>
                    <input type="text" name="judul" id="judul" value="" class="w-1/2 py-1 px-1 ml-2 bg-slate-50 rounded-md">
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
                            <div class="grid grid-cols-12 border-b-2 border-slate-400 text-sm relative" id="grid-in">
                                <div class="col-span-1 flex justify-center border-r-2 border-slate-400">
                                    <p class="self-center">1</p>
                                </div>
                                <div class="col-span-2 flex justify-center border-r-2 border-slate-400">
                                    <input readonly type="text" name="barcode1" id="barcode" value="" class="w-full py-1 px-1 bg-slate-50 outline-none">
                                </div>
                                <div class="col-span-3 flex border-r-2 border-slate-400">
                                    <input type="text" name="nama1" id="nama" value="" class="w-full py-1 px-1 bg-slate-50 outline-none">
                                </div>
                                <div class="col-span-2 flex justify-center border-r-2 border-slate-400">
                                    <p class="self-center px-1" id="hpp"></p>
                                </div>
                                <div class="col-span-2 flex justify-center border-r-2 border-slate-400" style="text-align: center;">
                                    <input type="text" name="harga1" id="harga" value="" class="w-full px-1 bg-slate-50 outline-none">
                                </div>
                                <div class="col-span-2 flex justify-center">
                                    <input type="text" name="mark1" id="mark" value="" class="w-full px-1 bg-slate-50 outline-none">
                                </div>
                                <div class="-right-6 absolute self-center" id="button-filter">
                                    <button type="button" class="bg-slate-50 p-1 w-full" id="plus">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                            <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"></path>
                                        </svg>
                                    </button>
                                    <button type="button" class="bg-slate-50 p-1 w-full hidden" id="minus">
                                        <i class="flex justify-center fa-solid fa-minus fa text-[#ff0000]"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="grid grid-cols-12 border-b-2 border-slate-400 text-sm relative" id="grid-in">
                                <div class="col-span-1 flex justify-center border-r-2 border-slate-400">
                                    <p class="self-center">2</p>
                                </div>
                                <div class="col-span-2 flex justify-center border-r-2 border-slate-400">
                                    <input type="text" name="barcode2" id="barcode" value="" class="w-full py-1 px-1 bg-slate-50 outline-none">
                                </div>
                                <div class="col-span-3 flex border-r-2 border-slate-400">
                                    <input type="text" name="nama2" id="nama" value="" class="w-full py-1 px-1 bg-slate-50 outline-none">
                                </div>
                                <div class="col-span-2 flex justify-center border-r-2 border-slate-400">
                                    <p class="self-center px-1" id="hpp"></p>
                                </div>
                                <div class="col-span-2 flex justify-center border-r-2 border-slate-400" style="text-align: center;">
                                    <input type="text" name="harga2" id="harga" value="" class="w-full px-1 bg-slate-50 outline-none">
                                </div>
                                <div class="col-span-2 flex justify-center">
                                    <input type="text" name="mark2" id="mark" value="" class="w-full px-1 bg-slate-50 outline-none">
                                </div>
                                <div class="-right-6 absolute self-center" id="button-filter">
                                    <button type="button" class="bg-slate-50 p-1" id="plus">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                            <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"></path>
                                        </svg>
                                    </button>
                                    <button type="button" class="bg-slate-50 p-1 hidden" id="minus">
                                        <i class="flex justify-center fa-solid fa-minus fa text-[#ff0000]"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="grid grid-cols-12 border-b-2 border-slate-400 text-sm relative" id="grid-in">
                                <div class="col-span-1 flex justify-center border-r-2 border-slate-400">
                                    <p class="self-center">3</p>
                                </div>
                                <div class="col-span-2 flex justify-center border-r-2 border-slate-400">
                                    <input type="text" name="barcode3" id="barcode" value="" class="w-full py-1 px-1 bg-slate-50 outline-none">
                                </div>
                                <div class="col-span-3 flex border-r-2 border-slate-400">
                                    <input type="text" name="nama3" id="nama" value="" class="w-full py-1 px-1 bg-slate-50 outline-none">
                                </div>
                                <div class="col-span-2 flex justify-center border-r-2 border-slate-400">
                                    <p class="self-center px-1" id="hpp"></p>
                                </div>
                                <div class="col-span-2 flex justify-center border-r-2 border-slate-400" style="text-align: center;">
                                    <input type="text" name="harga3" id="harga" value="" class="w-full px-1 bg-slate-50 outline-none">
                                </div>
                                <div class="col-span-2 flex justify-center">
                                    <input type="text" name="mark3" id="mark" value="" class="w-full px-1 bg-slate-50 outline-none">
                                </div>
                                <div class="-right-6 absolute self-center" id="button-filter">
                                    <button type="button" class="bg-slate-50 p-1" id="plus">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                            <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"></path>
                                        </svg>
                                    </button>
                                    <button type="button" class="bg-slate-50 p-1 hidden" id="minus">
                                        <i class="flex justify-center fa-solid fa-minus fa text-[#ff0000]"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="grid grid-cols-12 border-b-2 border-slate-400 text-sm relative" id="grid-in">
                                <div class="col-span-1 flex justify-center border-r-2 border-slate-400">
                                    <p class="self-center">4</p>
                                </div>
                                <div class="col-span-2 flex justify-center border-r-2 border-slate-400">
                                    <input type="text" name="barcode4" id="barcode" value="" class="w-full py-1 px-1 bg-slate-50 outline-none">
                                </div>
                                <div class="col-span-3 flex border-r-2 border-slate-400">
                                    <input type="text" name="nama4" id="nama" value="" class="w-full py-1 px-1 bg-slate-50 outline-none">
                                </div>
                                <div class="col-span-2 flex justify-center border-r-2 border-slate-400">
                                    <p class="self-center px-1" id="hpp"></p>
                                </div>
                                <div class="col-span-2 flex justify-center border-r-2 border-slate-400" style="text-align: center;">
                                    <input type="text" name="harga4" id="harga" value="" class="w-full px-1 bg-slate-50 outline-none">
                                </div>
                                <div class="col-span-2 flex justify-center">
                                    <input type="text" name="mark4" id="mark" value="" class="w-full px-1 bg-slate-50 outline-none">
                                </div>
                                <div class="-right-6 absolute self-center" id="button-filter">
                                    <button type="button" class="bg-slate-50 p-1" id="plus">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                            <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"></path>
                                        </svg>
                                    </button>
                                    <button type="button" class="bg-slate-50 p-1 hidden" id="minus">
                                        <i class="flex justify-center fa-solid fa-minus fa text-[#ff0000]"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="grid grid-cols-12 border-b-2 border-slate-400 text-sm relative" id="grid-in">
                                <div class="col-span-1 flex justify-center border-r-2 border-slate-400">
                                    <p class="self-center">5</p>
                                </div>
                                <div class="col-span-2 flex justify-center border-r-2 border-slate-400">
                                    <input type="text" name="barcode5" id="barcode" value="" class="w-full py-1 px-1 bg-slate-50 outline-none">
                                </div>
                                <div class="col-span-3 flex border-r-2 border-slate-400">
                                    <input type="text" name="nama5" id="nama" value="" class="w-full py-1 px-1 bg-slate-50 outline-none">
                                </div>
                                <div class="col-span-2 flex justify-center border-r-2 border-slate-400">
                                    <p class="self-center px-1" id="hpp"></p>
                                </div>
                                <div class="col-span-2 flex justify-center border-r-2 border-slate-400" style="text-align: center;">
                                    <input type="text" name="harga5" id="harga" value="" class="w-full px-1 bg-slate-50 outline-none">
                                </div>
                                <div class="col-span-2 flex justify-center">
                                    <input type="text" name="mark5" id="mark" value="" class="w-full px-1 bg-slate-50 outline-none">
                                </div>
                                <div class="-right-6 absolute self-center" id="button-filter">
                                    <button type="button" class="bg-slate-50 p-1" id="plus">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                            <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"></path>
                                        </svg>
                                    </button>
                                    <button type="button" class="bg-slate-50 p-1 hidden" id="minus">
                                        <i class="flex justify-center fa-solid fa-minus fa text-[#ff0000]"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="grid grid-cols-12 relative text-sm" id="grid-in">
                                <div class="col-span-1 flex justify-center border-r-2 border-slate-400">
                                    <p class="self-center">6</p>
                                </div>
                                <div class="col-span-2 flex justify-center border-r-2 border-slate-400">
                                    <input type="text" name="barcode6" id="barcode" value="" class="w-full py-1 px-1 bg-slate-50 outline-none">
                                </div>
                                <div class="col-span-3 flex border-r-2 border-slate-400">
                                    <input type="text" name="nama6" id="nama" value="" class="w-full py-1 px-1 bg-slate-50 outline-none">
                                </div>
                                <div class="col-span-2 flex justify-center border-r-2 border-slate-400">
                                    <p class="self-center px-1" id="hpp"></p>
                                </div>
                                <div class="col-span-2 flex justify-center border-r-2 border-slate-400" style="text-align: center;">
                                    <input type="text" name="harga6" id="harga" value="" class="w-full px-1 bg-slate-50 outline-none">
                                </div>
                                <div class="col-span-2 flex justify-center">
                                    <input type="text" name="mark6" id="mark" value="" class="w-full px-1 bg-slate-50 outline-none">
                                </div>
                                <div class="-right-6 absolute self-center" id="button-filter">
                                    <button type="button" class="bg-slate-50 p-1" id="plus">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                            <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"></path>
                                        </svg>
                                    </button>
                                    <button type="button" class="bg-slate-50 p-1 hidden" id="minus">
                                        <i class="flex justify-center fa-solid fa-minus fa text-[#ff0000]"></i>
                                    </button>
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
                            <input type="text" name="kategori-brg" id="" value="" class="rounded-md px-2 py-1 w-auto bg-slate-100 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none">
                        </div>
                        <div class="col-span-1">
                            <label for="dimensi" class="text-xl font-semibold block">Dimensi</label>
                            <input type="text" name="dimensi" id="" value="" class="rounded-md px-2 py-1 w-auto bg-slate-100 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none">
                        </div>
                        <div class="col-span-1">
                            <label for="berat" class="text-xl font-semibold block">Berat</label>
                            <input type="text" name="berat" id="" value="" class="rounded-md px-2 py-1 w-auto bg-slate-100 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none">
                        </div>
                    </div>
                    <div class="mt-4 grid grid-cols-4 gap-2">
                        <div class="col-span-1">
                            <label for="ongkir" class="text-xl font-semibold block">Ongkir</label>
                            <input type="text" name="ongkir" id="" value="" class="rounded-md px-2 py-1 w-auto bg-slate-100 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none">
                        </div>
                        <div class="col-span-1">
                            <label for="estimasi" class="text-xl font-semibold block">Estimasi</label>
                            <input type="text" name="estimasi" id="" value="" class="rounded-md px-2 py-1 w-auto bg-slate-100 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none">
                        </div>
                    </div>

                    <div class="w-full h-auto mt-8" id="gambar">
                        <h1 class="font-semibold text-xl">Atur Gambar</h1>
                        <div class="grid grid-cols-6">
                            <div class="col-span-1">
                                <h2 class="font-semibold">Gambar 1</h2>
                                <img src="/img/none.png" alt="" class="gambar w-20 h-20 mx-auto object-cover">
                                <div class="flex justify-center mt-1">
                                    <div class="col-span-1 flex justify-center flex py-1 space-x-4">
                                        <label for="foto1" class="flex justify-center py-1 font-semibold hover:bg-slate-300">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512" id="pen">
                                                    <path d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"/>
                                                </svg>
                                            </span>
                                        </label>
                                        <input type="file" name="foto1" class="inputfile" id="foto1">

                                        <button class="self-center" id="button-hps">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512" id="sampah">
                                                <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-1">
                                <h2 class="font-semibold">Gambar 2</h2>
                                <img src="/img/none.png" alt="" class="w-20 h-20 mx-auto object-cover">
                                <div class="flex justify-center mt-1">
                                    <div class="col-span-1 flex justify-center flex py-1 space-x-4">
                                        <label for="foto2" class="flex justify-center py-1 font-semibold hover:bg-slate-300">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512" id="pen">
                                                    <path d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"/>
                                                </svg>
                                            </span>
                                        </label>
                                        <input type="file" name="foto2" class="inputfile" id="foto2">

                                        <button class="self-center" id="button-hps">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512" id="sampah">
                                                <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-1">
                                <h2 class="font-semibold">Gambar 3</h2>
                                <img src="/img/none.png" alt="" class="w-20 h-20 mx-auto object-cover">
                                <div class="flex justify-center mt-1">
                                    <div class="col-span-1 flex justify-center flex py-1 space-x-4">
                                        <label for="foto3" class="flex justify-center py-1 font-semibold hover:bg-slate-300">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512" id="pen">
                                                    <path d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"/>
                                                </svg>
                                            </span>
                                        </label>
                                        <input type="file" name="foto3" class="inputfile" id="foto3">

                                        <button class="self-center" id="button-hps">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512" id="sampah">
                                                <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-1">
                                <h2 class="font-semibold">Gambar 4</h2>
                                <img src="/img/none.png" alt="" class="w-20 h-20 mx-auto object-cover">
                                <div class="flex justify-center mt-1">
                                    <div class="col-span-1 flex justify-center flex py-1 space-x-4">
                                        <label for="foto4" class="flex justify-center py-1 font-semibold hover:bg-slate-300">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512" id="pen">
                                                    <path d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"/>
                                                </svg>
                                            </span>
                                        </label>
                                        <input type="file" name="foto4" class="inputfile" id="foto4">

                                        <button class="self-center" id="button-hps">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512" id="sampah">
                                                <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-1">
                                <h2 class="font-semibold">Gambar 5</h2>
                                <img src="/img/none.png" alt="" class="w-20 h-20 mx-auto object-cover">
                                <div class="flex justify-center mt-1">
                                    <div class="col-span-1 flex justify-center flex py-1 space-x-4">
                                        <label for="foto5" class="flex justify-center py-1 font-semibold hover:bg-slate-300">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512" id="pen">
                                                    <path d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"/>
                                                </svg>
                                            </span>
                                        </label>
                                        <input type="file" name="foto5" class="inputfile" id="foto5">

                                        <button class="self-center" id="button-hps">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512" id="sampah">
                                                <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-1">
                                <h2 class="font-semibold">Gambar 6</h2>
                                <img src="/img/none.png" alt="" class="w-20 h-20 mx-auto object-cover">
                                <div class="flex justify-center mt-1">
                                    <div class="col-span-1 flex justify-center flex py-1 space-x-4">
                                        <label for="foto6" class="flex justify-center py-1 font-semibold hover:bg-slate-300">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512" id="pen">
                                                    <path d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"/>
                                                </svg>
                                            </span>
                                        </label>
                                        <input type="file" name="foto6" class="inputfile" id="foto6">

                                        <button class="self-center" id="button-hps">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512" id="sampah">
                                                <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/>
                                            </svg>
                                        </button>
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

    <section class="modal-filter" id="modal-filter" style="background-color: rgba( 0, 0, 0, .2);">
        <div class="content-modal py-4 px-6">
            <button type="button" class="float-right" id="close-button">
                <i class="fa-solid fa-xmark fa-xl hover:text-[red]"></i>
            </button>
            <form action="" method="GET" enctype="multipart/form-data" class="flex mb-2">
                <input type="text" name="search" id="search" class="rounded-sm w-1/3 px-1 bg-gray-100 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none">
                <button type="sumbit" id="btn-cari" class="bg-slate-200 px-2 font-semibold text-lg ">Cari</button>
            </form>
            <p class="mb-2 text-lg font-semibold">Hasil :</p>
            <div class="h-3/4 w-auto overflow-auto">
                <div class="flex h-full" id="ikon-cari">
                    <div class="self-center w-full">
                        <div class="w-24 h-24 mx-auto">
                            <img src="/img/cari.png" alt="">
                        </div>
                        <p class="flex justify-center text-xl font-bold">Belum ada pencarian..</p>
                    </div>
                </div>
                <div class="flex h-full hidden" id="ikon-notfound">
                    <div class="self-center w-full">
                        <span class="flex justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-24 h-24" style="fill: rgb(225 25 25)">
                                <path d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM175 175c-9.4 9.4-9.4 24.6 0 33.9l47 47-47 47c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l47-47 47 47c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-47-47 47-47c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-47 47-47-47c-9.4-9.4-24.6-9.4-33.9 0z"/>
                            </svg>
                        </span>
                        <p class="flex justify-center text-xl font-bold text-red-600">Data tidak ditemukan</p>
                    </div>
                </div>
                <div class="sticky top-0 bg-white hidden" id="head-tab">
                    <div class="grid grid-cols-12 border-y-2 border-slate-400 bg-slate-200">
                        <div class="col-span-4 flex justify-center border-x-2 border-slate-400 py-1">barcode</div>
                        <div class="col-span-5 flex justify-center border-r-2 border-slate-400 py-1">nama</div>
                        <div class="col-span-3 flex justify-center border-r-2 border-slate-400 py-1">hpp</div>
                    </div>
                </div>
                <div class="overflow-hidden" id="view"></div>
            </div>
        </div>
    </section>
<?= $this->endSection()?>

<?= $this->section('script')?>
    <script>
        CKEDITOR.replace( 'editor1' );

        $(document).ready(function(){
            let number  = new Intl.NumberFormat('en-US')
            var modal   = document.getElementById('modal-filter');
            var button  = document.getElementById('close-button');

            button.onclick = function() {
                modal.style.display = "none";
            }

            var inputs = document.querySelectorAll('.inputfile');
            var gambar = document.querySelector('.gambar')
            for (i = 0; i < inputs.length; i++) {
                inputs[i].addEventListener("click", function(e) {
                    this.onchange = function() {
                        var path = URL.createObjectURL(this.files[0])
                        var parent = this.parentNode.parentNode.parentNode
                        parent.querySelector("img").src = path
                    }
                })
            }


            var minus = document.querySelectorAll("#minus")
            for (i = 0; i < minus.length; i++){
                minus[i].onclick = function(){
                    if (this){
                        var par = $(".putin").find(".terpilih")
                        $(par).find("#barcode").val("")
                        $(par).find("#nama").val("")
                        $(par).find("#hpp").text("")
                        $(par).find("#harga").val("")
                        $(par).find("#mark").val("")
                        $(par).find("#plus").show()
                        $(par).find("#minus").hide()
                    }
                }
            }

            var grid = document.querySelectorAll("#grid-in")
            for (i = 0; i < grid.length; i++){
                var hrg    = $(grid[i]).find("#harga")
                var format = ""
                $(hrg).on("change", function(){
                    if (this.value == ""){
                        this.value = ""
                    } else {
                        this.value = number.format(this.value)
                    }
                })
            }

            var filter  = document.querySelectorAll('#plus');
            for (i = 0; i < filter.length; i++){
                filter[i].onclick = function() {
                    modal.style.display = "block"
                    this.classList.add("clicked")
                }
            }

            var tambah = document.querySelectorAll("#grid-in")
            for (i = 0; i < tambah.length; i++) {                
                (function (index) {
                    tambah[index].addEventListener("click", function () {
            
                        for (var i = 0; i < tambah.length; i++){
                            tambah[i].classList.remove("terpilih");                            
                        };
            
                        let isPresent = false;
                        //   Check if the class is present or not
                        this.classList.forEach(function (e) {
                            if (e == "terpilih") {
                                isPresent = true;                                                        
                            } else {
                                isPresent = false;
                            }                                            
                        });                    
            
                        //   toggle the presence of class on the basis of the isPresent variable
                        if (isPresent) {
                            this.classList.remove("terpilih");
                        } else {
                            this.classList.add("terpilih");                            
                        }
                    });
                })(i);
            }

            var isklik = 0
            $("#btn-cari").click(function(){
                isklik++
                
                if ($("#search").val() == ""){
                    $("#search").attr("required", "required")
                } else {
                    $(this).html("Mencari...").attr("disabled", "disabled")
                    $.ajax({
                    url: '/adm/dash/post/tambah/cari',
                    type: 'POST',
                    data: {search: $("#search").val()},
                    dataType: "json",
                    beforeSend: function(e) {
                        if(e && e.overrideMimeType) {
                        e.overrideMimeType("application/json;charset=UTF-8");
                        }
                    },
                    success: function(res){
                        var hasil       = res.data

                        if (hasil == 0){
                            $("#btn-cari").html("Cari").removeAttr("disabled", "disabled")
                            $("#ikon-notfound").removeClass("hidden")
                            $("#view").empty()
                            $("#ikon-cari").addClass("hidden")
                            $("#head-tab").addClass("hidden")
                        } else {
                            for (i = 0; i < hasil.length; i++){
                                var $diff =  $('<div class="grid grid-cols-12 relative hover:cursor-pointer hover:bg-slate-100 isklik-'+isklik+'" id="hasil-cari">'+
                                            '<div class="col-span-4 flex justify-center border-x-2 border-b-2 border-slate-400 py-1" id="bar">'+hasil[i]['barcode']+'</div>' +
                                            '<div class="col-span-5 flex border-r-2 border-b-2 border-slate-400 py-1">'+
                                            '<input type="text" name="nam" id="nam" value="'+hasil[i]["nama"]+'" class="text-center w-full outline-none hover:cursor-pointer" style="background-color: transparent" disabled>'+
                                            '</div>' +
                                            '<div class="col-span-3 flex justify-center border-r-2 border-b-2 border-slate-400 py-1" id="hpp">'+number.format(hasil[i]['hpp'])+'</div>'+
                                            '</div>')

                                if (isklik > 1){
                                    $("#view").find(".isklik-"+(isklik-1)+"").remove()
                                    $("#view").append($diff)
                                } else {
                                    $("#view").append($diff)
                                }
                            }
                            $("#btn-cari").html("Cari").removeAttr("disabled")
                            $("#ikon-cari").addClass("hidden")
                            $("#head-tab").removeClass("hidden")
                            $("#ikon-notfound").addClass("hidden")
                        }

                        $("#close-button").click(function(){
                            $("#ikon-cari").removeClass("hidden")
                            $("#head-tab").addClass("hidden")
                            $("#view").empty()
                            $("#search").val("")
                            $("#ikon-notfound").addClass("hidden")
                            isklik = 0
                        })

                        var hasil  = document.querySelectorAll("#hasil-cari")
                        for (i = 0; i < hasil.length; i++){
                            hasil[i].onclick = function() {
                                var par = $(".putin").find(".terpilih")
                                $(par).find("#barcode").val($(this).find("#bar").text())
                                $(par).find("#nama").val($(this).find("#nam").val())
                                $(par).find("#hpp").text($(this).find("#hpp").text())
                                $("#modal-filter").css("display", "none")
                                $(par).find("#plus").hide()
                                $(par).find("#minus").show()
                            }
                        }
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                            alert(xhr.responseText)
                        }
                    })
                }
            })
        })
    </script>
<?= $this->endSection()?>