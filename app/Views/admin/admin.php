<?= $this->extend('layout/admin/admin')?>
<?= $this->section('style')?>
    <style>
        i {
            display: flex !important;
        }

        #button-filter:hover {
            fill: rgb(250, 140, 0);
        }
    </style>
<?= $this->endSection()?>

<?= $this->section('content')?>
    <main class="w-10/12 md:w-4/5 ml-auto px-2 py-3 md:px-12 md:py-4">
        <header class="h-16">
            <div class="flex h-full w-full text-[#fa8c00]" id="adminArea">
                <p class="text-4xl font-bold self-center mt-4 mx-4 w-full border-b-2 border-slate-800">Admin Area</p>
            </div>
        </header>

        <section class="my-4 mx-4">
            <div class="grid grid-rows-2 gap-4">
                <div class="flex bg-[#fa8c00] h-auto">
                    <div class="self-center w-full">
                        <h2 class="text-2xl font-bold flex justify-center mb-10">MarketEer</h2>
                        <div class="grid grid-cols-2 lg:grid-cols-3 mx-4">
                            <div>
                                <p class="flex justify-center font-semibold">PENGHASILAN</p>
                                <p class="flex justify-center font-bold">Rp834.592.063,00</p>
                                <div class="flex justify-center font-bold circle">
                                    <span class="block self-center">
                                        <i class="flex justify-center text-[20c20e] fa-solid fa-arrow-trend-up fa-3x"></i>
                                        <p class="flex justify-center text-xl">50%</p>
                                    </span>
                                </div>
                            </div>
                            <div>
                                <p class="flex justify-center font-semibold">TERJUAL</p>
                                <p class="flex justify-center font-bold">532 produk</p>
                                <div class="flex justify-center font-bold circle">
                                    <span class="block self-center">
                                        <i class="flex justify-center fa-solid fa-plus fa-2x text-[#0000ff]"></i>
                                        <p class="flex justify-center text-lg">20 pcs</p>
                                    </span>
                                </div>
                            </div>
                            <div>
                                <p class="flex justify-center font-semibold">SISA STOK</p>
                                <p class="flex justify-center font-bold">742 produk</p>
                                <div class="flex justify-center font-bold circle">
                                    <span class="block self-center">
                                        <i class="flex justify-center fa-solid fa-minus fa-2x text-[#ff0000]"></i>
                                        <p class="flex justify-center text-lg">532 pcs</p>
                                    </span>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>

                <div class="w-full h-auto bg-neutral-400">
                    <div class="flex justify-center p-6">
                        <div class="self-center">
                            <a href="/adm/dash/pesan">
                                <i class="flex justify-center bg-[#ff5386] hover:bg-[#df4e7a] rounded-xl w-24 p-6 fa-solid fa-envelope fa-2x"></i>
                            </a>
                            <p class="flex justify-center font-semibold cursor-default">Pesan</p>
                        </div>
                        <div class="self-center mx-10">
                            <a href="/adm/dash/penilaian">
                                <i class="flex justify-center bg-[#abe4ff] hover:bg-[#99cce4] rounded-xl w-24 p-6 fa-solid fa-star fa-2x"></i>
                            </a>
                            <p class="flex justify-center font-semibold cursor-default">Penilaian</p>
                        </div>
                        <div class="self-center">
                            <a href="/adm/dash/post">
                                <i class="flex justify-center bg-[#7cf49a] hover:bg-[#71df8c] rounded-xl w-24 p-6 fa-solid fa-bag-shopping fa-2x"></i>
                            </a>
                            <p class="flex justify-center font-semibold cursor-default">Post</p>
                        </div>
                    </div>

                    <div class="mx-10 mt-1 mb-10 p-4 bg-slate-100 rounded-lg">
                        <div class="flex">
                            <p class="text-xl font-semibold mb-2">Profil Toko</p>
                            <button class="ml-auto"  id="button-filter">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512">
                                        <path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"/>
                                    </svg>
                                </span>
                            </button>
                        </div>
                        <div class="grid grid-rows-5">
                            <div class="grid grid-cols-12 ">
                                <p class="font-semibold col-span-2 self-center">Nama</p>
                                <p class="font-semibold col-span-1 mx-auto self-center">:</p>
                                <p class="font-semibold col-span-9 self-center">MarketEer</p>
                            </div>
                            <div class="grid grid-cols-12">
                                <p class="font-semibold col-span-2 self-center">Deskripsi</p>
                                <p class="font-semibold col-span-1 mx-auto self-center">:</p>
                                <p class="font-semibold col-span-9 self-center">Beli Semua Tanpa Khawatir</p>
                            </div>
                            <div class="grid grid-cols-12">
                                <p class="font-semibold col-span-2 self-center">Alamat</p>
                                <p class="font-semibold col-span-1 mx-auto self-center">:</p>
                                <p class="font-semibold col-span-8 self-center">Jl Heleneborgsgatan 16, 117 32 Stockholm, Swedia</p>
                            </div>
                            <div class="grid grid-cols-12">
                                <p class="font-semibold col-span-2 self-center">Rating</p>
                                <p class="font-semibold col-span-1 mx-auto self-center">:</p>
                                <div class="font-semibold flex col-span-9">
                                    <span class="self-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 h-4 w-4" viewBox="0 0 576 512">
                                            <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/>
                                        </svg>
                                    </span>

                                    <p class="self-center">4.5</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    <section class="modal-filter" id="modal-filter">
        <div class="content-modal py-8 px-10">
            <div class="flex">
                <h1 class="font-bold text-lg mb-1">Profil Toko</h1>
                <button class="ml-auto" id="close-button">
                    <i class="fa-solid fa-xmark fa-xl hover:text-[red]"></i>
                </button>
            </div>

            <form action="" class="mt-3">
                <div class="grid grid-cols-12">
                    <p class="font-semibold col-span-2 self-center">Nama</p>
                    <p class="font-semibold col-span-1 mx-auto self-center">:</p>
                    <p class="font-semibold col-span-9 self-center">
                        <input type="text" name="nama" id="nama" class="w-full px-2 py-1" value="MarketEer">
                    </p>
                </div>
                <div class="grid grid-cols-12 mt-1">
                    <p class="font-semibold col-span-2 self-center">Deskripsi</p>
                    <p class="font-semibold col-span-1 mx-auto self-center">:</p>
                    <p class="font-semibold col-span-9 self-center">
                        <input type="text" name="desk" id="desk" class="w-full px-2 py-1" value="Beli Semua Tanpa Khawatir">
                    </p>
                </div>
                <div class="grid grid-cols-12 mt-1">
                    <p class="font-semibold col-span-2 self-center">Alamat</p>
                    <p class="font-semibold col-span-1 mx-auto self-center">:</p>
                    <p class="font-semibold col-span-8 self-center">
                        <input type="text" name="alamat" id="alamat" class="w-full px-2 py-1" value="Jl Heleneborgsgatan 16, 117 32 Stockholm, Swedia">
                    </p>
                </div>
                
                <div class="flex justify-center mt-4">
                    <button class="py-1 px-4 bg-[#fa8c00] rounded-lg text-white hover:bg-[#f89f2b] text-lg font-semibold">save</button>
                </div>
            </form>
            
        </div>
    </section>
<?= $this->endSection()?>

<?= $this->section('script')?>
    <script>
        diskon()
    </script>
<?= $this->endSection()?>
