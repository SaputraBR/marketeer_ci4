<?= $this->extend('layout/admin/admin')?>

<?= $this->section('style')?>
    <style>
        #pen:hover {
            fill: #ff950b;
            cursor: pointer;
        }

        #smpah:hover {
            fill: #ee8700;
            cursor: pointer;
        }
    </style>
<?= $this->endSection()?>

<?= $this->section('content')?>
    <main class="w-10/12 h-auto md:w-4/5 ml-auto px-2 py-3 md:px-12 md:py-4 relative">
        <h1 class="text-4xl font-bold border-b-2 border-slate-400 text-[#ff950b]">Manage Content</h1>
        <div class="w-full h-auto mt-4" id="best-offers">
            <div class="flex mb-1">
                <h1 class="text-2xl font-semibold">Best Offers</h1>
                <a href="/adm/dash/post/tambah" class="ml-auto">
                    <button class="flex bg-[#ff950b] hover:bg-[#ee8700] px-2 py-1 rounded-md text-white">
                        <span class="self-center mr-1">
                            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512" style="fill: #fff;">
                                <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/>
                            </svg>
                        </span>
                        <p class="font-semibold">Tambah</p>
                    </button>
                </a>
            </div>
            <div class="w-full h-auto border border-slate-800">
                <div class="bg-slate-400 grid grid-cols-12 text-lg border-b border-slate-800 text-white font-semibold">
                    <div class="col-span-1 flex justify-center py-1">No</div>
                    <div class="col-span-4 flex justify-center py-1">Nama</div>
                    <div class="col-span-2 flex justify-center py-1">Kategori</div>
                    <div class="col-span-2 flex justify-center py-1">HPP</div>
                    <div class="col-span-2 flex justify-center py-1">Harga</div>
                    <div class="col-span-1 flex justify-center py-1">Ubah</div>
                </div>
                <div class="bg-slate-50 grid grid-cols-12">
                    <div class="col-span-1 flex justify-center py-1">1</div>
                    <div class="col-span-4 py-1">Google Pixel 7 Pro 12/512GB</div>
                    <div class="col-span-2 flex justify-center py-1">Best Seller</div>
                    <div class="col-span-2 flex justify-center py-1">8,311,100</div>
                    <div class="col-span-2 flex justify-center py-1">9,119,999</div>
                    <div class="col-span-1 flex justify-center flex py-1 space-x-4">
                        <a href="/adm/dash/post/detail" class="self-center" title="">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512" id="pen">
                                    <path d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"/>
                                </svg>
                            </span>
                        </a>
                        <span class="self-center" id="button-hps">
                            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512" id="smpah">
                                <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/>
                            </svg>
                        </span>
                    </div>
                </div>
                <div class="bg-slate-200 grid grid-cols-12">
                    <div class="col-span-1 flex justify-center py-1">2</div>
                    <div class="col-span-4 py-1">Polo Bear by Ralph Lauren M/L/XL/XXL</div>
                    <div class="col-span-2 flex justify-center py-1">Favorite</div>
                    <div class="col-span-2 flex justify-center py-1">10,845,631</div>
                    <div class="col-span-2 flex justify-center py-1">13,020,000</div>
                    <div class="col-span-1 flex justify-center flex py-1 space-x-4">
                        <a href="/adm/dash/post/detail" class="self-center">
                            <span class="self-center">
                                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512" id="pen">
                                    <path d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"/>
                                </svg>
                            </span>
                        </a>
                        <span class="self-center" id="button-hps">
                            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512" id="smpah">
                                <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/>
                            </svg>
                        </span>
                    </div>
                </div>
                <div class="bg-slate-50 grid grid-cols-12">
                    <div class="col-span-1 flex justify-center py-1">3</div>
                    <div class="col-span-4 py-1">Air Jordan 7 Retro SE Men's Shoes 40-47</div>
                    <div class="col-span-2 flex justify-center py-1">Men</div>
                    <div class="col-span-2 flex justify-center py-1">3,000,123</div>
                    <div class="col-span-2 flex justify-center py-1">3,400,000</div>
                    <div class="col-span-1 flex justify-center flex py-1 space-x-4">
                        <a href="/adm/dash/post/detail" class="self-center">
                            <span class="self-center">
                                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512" id="pen">
                                    <path d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"/>
                                </svg>
                            </span>
                        </a>
                        <span class="self-center" id="button-hps">
                            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512" id="smpah">
                                <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/>
                            </svg>
                        </span>
                    </div>
                </div>
                <div class="bg-slate-200 grid grid-cols-12">
                    <div class="col-span-1 flex justify-center py-1">4</div>
                    <div class="col-span-4 py-1">(HSS) Kelly Sellier 28 Nata and Craie Epsom..</div>
                    <div class="col-span-2 flex justify-center py-1">Women</div>
                    <div class="col-span-2 flex justify-center py-1">293,313,012</div>
                    <div class="col-span-2 flex justify-center py-1">388,228,938</div>
                    <div class="col-span-1 flex justify-center flex py-1 space-x-4">
                        <a href="/adm/dash/post/detail" class="self-center">
                            <span class="self-center">
                                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512" id="pen">
                                    <path d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"/>
                                </svg>
                            </span>
                        </a>
                        <span class="self-center" id="button-hps">
                            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512" id="smpah">
                                <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/>
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full h-auto mt-4" id="daily-offers">
            <h1 class="text-2xl font-semibold">Daily Offers</h1>
            <div class="w-full h-auto border border-slate-800">
                <div class="bg-slate-400 grid grid-cols-12 text-lg border-b border-slate-800 text-white font-semibold">
                    <div class="col-span-1 flex justify-center py-1">No</div>
                    <div class="col-span-4 flex justify-center py-1">Nama</div>
                    <div class="col-span-2 flex justify-center py-1">Kategori</div>
                    <div class="col-span-2 flex justify-center py-1">HPP</div>
                    <div class="col-span-2 flex justify-center py-1">Harga</div>
                    <div class="col-span-1 flex justify-center py-1">Ubah</div>
                </div>
                <div class="bg-slate-50 grid grid-cols-12">
                    <div class="col-span-1 flex justify-center py-1">1</div>
                    <div class="col-span-4 py-1">Scarlett Whitening Body Lotion by Felicya A..</div>
                    <div class="col-span-2 flex justify-center py-1">Personal Care</div>
                    <div class="col-span-2 flex justify-center py-1">61,000</div>
                    <div class="col-span-2 flex justify-center py-1">75,000</div>
                    <div class="col-span-1 flex justify-center flex py-1 space-x-4">
                        <a href="/adm/dash/post/detail" class="self-center">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512" id="pen">
                                    <path d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"/>
                                </svg>
                            </span>
                        </a>
                        <span class="self-center" id="button-hps">
                            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512" id="smpah">
                                <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/>
                            </svg>
                        </span>
                    </div>
                </div>
                <div class="bg-slate-200 grid grid-cols-12">
                    <div class="col-span-1 flex justify-center py-1">2</div>
                    <div class="col-span-4 py-1">Scarlett Whitening Body Lotion by Felicya A..</div>
                    <div class="col-span-2 flex justify-center py-1">Personal Care</div>
                    <div class="col-span-2 flex justify-center py-1">61,000</div>
                    <div class="col-span-2 flex justify-center py-1">75,000</div>
                    <div class="col-span-1 flex justify-center flex py-1 space-x-4">
                        <a href="/adm/dash/post/detail" class="self-center">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512" id="pen">
                                    <path d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"/>
                                </svg>
                            </span>
                        </a>
                        <span class="self-center" id="button-hps">
                            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512" id="smpah">
                                <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/>
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full h-auto mt-4" id="daily-offers">
            <h1 class="text-2xl font-semibold">Trends</h1>
            <div class="w-full h-auto border border-slate-800">
                <div class="bg-slate-400 grid grid-cols-12 text-lg border-b border-slate-800 text-white font-semibold">
                    <div class="col-span-1 flex justify-center py-1">No</div>
                    <div class="col-span-4 flex justify-center py-1">Nama</div>
                    <div class="col-span-2 flex justify-center py-1">Kategori</div>
                    <div class="col-span-2 flex justify-center py-1">HPP</div>
                    <div class="col-span-2 flex justify-center py-1">Harga</div>
                    <div class="col-span-1 flex justify-center py-1">Ubah</div>
                </div>
                <div class="bg-slate-50 grid grid-cols-12">
                    <div class="col-span-1 flex justify-center py-1">1</div>
                    <div class="col-span-4 py-1">Scarlett Whitening Body Lotion by Felicya A..</div>
                    <div class="col-span-2 flex justify-center py-1">Personal Care</div>
                    <div class="col-span-2 flex justify-center py-1">61,000</div>
                    <div class="col-span-2 flex justify-center py-1">75,000</div>
                    <div class="col-span-1 flex justify-center flex py-1 space-x-4">
                        <a href="/adm/dash/post/detail" class="self-center">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512" id="pen">
                                    <path d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"/>
                                </svg>
                            </span>
                        </a>
                        <span class="self-center" id="button-hps">
                            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512" id="smpah">
                                <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/>
                            </svg>
                        </span>
                    </div>
                </div>
                <div class="bg-slate-200 grid grid-cols-12">
                    <div class="col-span-1 flex justify-center py-1">2</div>
                    <div class="col-span-4 py-1">Scarlett Whitening Body Lotion by Felicya A..</div>
                    <div class="col-span-2 flex justify-center py-1">Personal Care</div>
                    <div class="col-span-2 flex justify-center py-1">61,000</div>
                    <div class="col-span-2 flex justify-center py-1">75,000</div>
                    <div class="col-span-1 flex justify-center flex py-1 space-x-4">
                        <a href="/adm/dash/post/detail" class="self-center">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512" id="pen">
                                    <path d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"/>
                                </svg>
                            </span>
                        </a>
                        <span class="self-center" id="button-hps">
                            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512" id="smpah">
                                <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/>
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
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

    <section class="modal-filter" id="modal-delete">
        <div class="content-modal relative overflow-hidden border-4 border-slate-200">
            <div class="flex bg-slate-400 w-full h-1/6 px-6 text-white">
                <h1 class="font-bold text-2xl mb-1 self-center">Hapus</h1>
                <button class="ml-auto" id="tutup-button">
                    <i class="fa-solid fa-xmark fa-xl hover:text-[red]"></i>
                </button>
            </div>
            <div class="py-3 px-4">
                <h1 class="text-xl">Yakin hapus Google Pixel 7 Pro 12/512GB dari toko?</h1>
            </div>
            <div class="flex justify-center space-x-8 mt-6">
                <button class="py-1 px-4 bg-[#fa8c00] rounded-lg text-white hover:bg-[#f89f2b] text-lg font-semibold">batal</button>
                <button class="py-1 px-4 bg-red-500 rounded-lg text-white hover:bg-red-600 text-lg font-semibold">hapus</button>
            </div>
            
        </div>
    </section>
<?= $this->endSection()?>

<?= $this->section('script')?>
    <script>
            var dlte    = document.getElementById('modal-delete');
            var bttn  = document.getElementById('tutup-button');
            var trash   = document.querySelectorAll("#smpah")

            for (i = 0; i < trash.length; i++){
                trash[i].onclick = function() {
                    dlte.style.display = "block";
                }

                bttn.onclick = function() {
                    dlte.style.display = "none";
                }

                window.onclick = function(e) {
                    if (e.target == dlte) {
                        dlte.style.display = "none";
                    }
                }
            }
    </script>
<?= $this->endSection()?>