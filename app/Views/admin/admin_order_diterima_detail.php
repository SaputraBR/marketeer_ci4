<?= $this->extend('layout/admin/admin')?>

<?= $this->section('content')?>
    <main class="w-10/12 md:w-4/5 ml-auto px-2 py-10 md:px-12 md:py-4">
        <section class="w-full h-auto py-8 px-12 rounded-lg bg-slate-400">
            <div class="bg-slate-100 py-6 px-8 rounded-t-lg font-semibold">
                <h1 class="text-xl mb-1">Detail customer</h1>
                <div class="grid grid-cols-12">
                    <div class="col-span-2">nama</div>
                    <div class="col-span-10">Emon Lusk</div>
                </div>
                <div class="grid grid-cols-12">
                    <div class="col-span-2">alamat</div>
                    <div class="col-span-10">Isla Trinidad 1548, V9410FFH Ushuaia, Tierra del Fuego, Argentina</div>
                </div>
                <div class="grid grid-cols-12">
                    <div class="col-span-2">no. hp</div>
                    <div class="col-span-10">085268732122</div>
                </div>
            </div>
            <div class="mt-1 bg-slate-100 py-6 px-8 font-semibold">
                <h1 class="text-xl mb-2">Detail pesanan</h1>
                <div class="flex mt-2">
                    <div class="w-1/2 flex">
                        <div class="w-1/5">
                            <img class="w-full" src="/img/nike-jordan.jpg" alt="">
                        </div>
                        <div class="ml-2 w-4/5">
                            <p>Air Jordan 7 Retro SE Men's Shoes 40-47</p>
                            <p class="text-sm font-normal">1 barang x Rp3.999.999</p>
                        </div>
                    </div>
                    <div class="w-1/2 flex">
                        <div class="w-1/5">
                            <img class="w-full" src="/img/1655699125.jpeg" alt="">
                        </div>
                        <div class="ml-2 w-4/5">
                            <p>Scarlett Whitening Body Lotion by Felicya Angelista Romansa</p>
                            <p class="text-sm font-normal">1 barang x Rp75.000</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-1 bg-slate-100 py-6 px-8 font-semibold">
                <h1 class="text-xl mb-2">Pembayaran</h1>
                <div class="grid grid-cols-12 mb-2">
                    <div class="col-span-3">Metode pembayaran</div>
                    <div class="col-span-9">BRIVa</div>
                </div>
                <div class="grid grid-cols-12">
                    <div class="col-span-3">Subtotal</div>
                    <div class="col-span-9">Rp4.074.000,00</div>
                </div>
                <div class="grid grid-cols-12">
                    <div class="col-span-3">Ongkos kirim</div>
                    <div class="col-span-9">Rp1.000.000,00</div>
                </div>
                <div class="grid grid-cols-12">
                    <div class="col-span-3 flex">Diskon Ongkos kirim<i class="fa-solid fa-minus ml-auto self-center"></i></div>
                    <div class="col-span-9">Rp1.000,00</div>
                </div>
                <div class="grid grid-cols-12 mt-2">
                    <div class="col-span-3">Total</div>
                    <div class="col-span-9">Rp5.073.000,00</div>
                </div>
            </div>
            <div class="mt-1 bg-slate-100 py-6 px-8 font-semibold">
                <h1 class="text-xl mb-2">Pengiriman & Penilaian</h1>
                <div class="grid grid-cols-12 mt-2">
                    <div class="col-span-3">Pilihan Pengiriman</div>
                    <div class="col-span-9">FedEx</div>
                </div>
                <div class="grid grid-cols-12">
                    <div class="col-span-3">Dikirim</div>
                    <div class="col-span-9">8 Jan 2023</div>
                </div>
                <div class="grid grid-cols-12">
                    <div class="col-span-3">Diterima</div>
                    <div class="col-span-9">10 Jan 2023</div>
                </div>
                <div class="grid grid-cols-12 mt-2">
                    <div class="col-span-3">Penilaian</div>
                    <p class="font-semibold col-span-9"><i class="fa-solid fa-star mr-1"></i>4.5</p>
                </div>
                <div class="grid grid-cols-12">
                    <div class="col-span-3">Ulasan</div>
                    <div class="col-span-9 mt-1">
                        <textarea class="w-full px-3 py-2 font-normal rounded-lg border-none focus:border-none focus:outline-none" name="" id="" cols="" rows="5">Alhamdulilah kurirnya selamat sampai rumah saya...</textarea>                        
                    </div>
                </div>
            </div>

            <div class="flex mt-4">
                <button class="py-2 px-4 bg-[#ff950b] hover:bg-[#ff9f21] font-semibold">hapus</button>
                <button class="py-2 px-4 bg-white hover:bg-gray-200 ml-4 font-semibold">kembali</button>
            </div>
        </section>
    </main>
<?= $this->endSection()?>