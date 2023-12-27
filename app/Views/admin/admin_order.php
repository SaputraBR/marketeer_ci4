<?= $this->extend('layout/admin/admin')?>

    <?= $this->section('content')?>
        <main class="w-10/12 md:w-4/5 ml-auto px-2 py-3 md:px-12 md:py-4">
            <header class="h-64 w-full px-4 py-8 my-4 rounded-lg bg-[#fa8c00]"> 
                <div class="flex justify-center mb-8">
                    <div class="w-36">
                        <a href="/adm/order/pesanan" class="flex justify-center bg-[#fffab0] hover:bg-[#ede8a7] rounded-xl mx-4 p-6">
                            <i class="fa-solid fa-cart-flatbed fa-2x"></i>
                        </a>
                        <p class="flex justify-center font-semibold text-xl">pesanan</p>
                    </div>
                    <div class="w-36">
                        <a href="/adm/order/pembayaran" class="flex justify-center bg-[#fffab0] hover:bg-[#ede8a7] rounded-xl mx-4 p-6">
                            <i class="fa-solid fa-money-bill fa-2x"></i>
                        </a>
                        <p class="flex justify-center font-semibold text-xl">pembayaran</p>
                    </div>
                    <div class="w-36">
                        <a href="/adm/order/dikirim" class="flex justify-center bg-[#fffab0] hover:bg-[#ede8a7] rounded-xl mx-4 p-6">
                            <i class="fa-solid fa-truck-fast fa-2x"></i>
                        </a>
                        <p class="flex justify-center font-semibold text-xl">dikirim</p>
                    </div>
                    <div class="w-36">
                        <a href="/adm/order/diterima" class="flex justify-center bg-[#fffab0] hover:bg-[#ede8a7] rounded-xl mx-4 p-6">
                            <i class="fa-solid fa-box fa-2x"></i>
                        </a>
                        <p class="flex justify-center font-semibold text-xl">diterima</p>
                    </div>
                </div>
                <div class="w-full">
                    <div class="flex justify-center">
                        <input type="text" placeholder="cari kode transaksi..." class="w-2/4 rounded-l-lg px-2">
                        <button type="submit" class="h-10 rounded-r-lg bg-white px-4 flex hover:bg-slate-300">
                            <i class="fa-solid fa-magnifying-glass self-center"></i>
                        </button>
                    </div>
                </div>
            </header>

            <section class="my-8 bg-gray-300 rounded-lg">
                <div class="grid grid-cols-12 border-b border-white">
                    <p class="col-span-1 border-r-2 flex justify-center p-4">No</p>
                    <p class="col-span-2 border-r-2 flex justify-center p-4">Id Transaksi</p>
                    <p class="col-span-6 border-r-2 flex justify-center p-4">Alamat</p>
                    <p class="col-span-3 border-r-2 flex justify-center p-4">Status</p>
                </div>
                <div class="">
                    <div class="grid grid-cols-12 border-b-2">
                        <p class="col-span-1 p-4 flex justify-center">1</p>
                        <p class="col-span-2 p-4 flex justify-center">
                            <a href="/adm/order/detail">FK23010601</a>
                        </p>
                        <p class="col-span-6 p-4 flex justify-center">
                            <a href="/adm/order/detail">Lövsångaregatan 29, 214 59 Malmö, Swedia</a>
                        </p>
                        <p class="col-span-3 p-4 flex justify-center">
                            <button class="max-h-13 py-1 px-2 rounded-lg bg-red-600 text-white font-semibold">belum bayar</button>
                        </p>
                    </div>
                    <div class="grid grid-cols-12 border-b-2">
                        <p class="col-span-1 p-4 flex justify-center">2</p>
                        <p class="col-span-2 p-4 flex justify-center">
                            <a href="/adm/order/detail">FK23010602</a>
                        </p>
                        <p class="col-span-6 p-4 flex justify-center">
                            <a href="/adm/order/detail">ólstaðarhlíð 8, 105 Reykjavík, Islandia</a>
                        </p>
                        <p class="col-span-3 p-4 flex justify-center">
                            <button class="h-8 px-2 rounded-lg bg-[#0d7b0d] text-white font-semibold">dikemas</button>
                        </p>
                    </div>
                    <div class="grid grid-cols-12 border-b-2">
                        <p class="col-span-1 p-4 flex justify-center">3</p>
                        <p class="col-span-2 p-4 flex justify-center">
                            <a href="/adm/order/detail">FK23010603</a>
                        </p>
                        <p class="col-span-6 p-4 flex justify-center">
                            <a href="/adm/order/detail">Beco da Cruz Vermelha 2, Portimão, Portugal</a>
                        </p>
                        <p class="col-span-3 p-4 flex justify-center">
                            <button class="h-8 px-2 rounded-lg bg-[#0d7b0d] text-white font-semibold">dikirim</button>
                        </p>
                    </div>
                    <div class="grid grid-cols-12 border-b-2">
                        <p class="col-span-1 p-4 flex justify-center">4</p>
                        <p class="col-span-2 p-4 flex justify-center">
                        <a href="/adm/order/detail">FK23010604</a>
                        </p>
                        <p class="col-span-6 p-4 flex justify-center">
                            <a href="/adm/order/detail">8 Riverside Dr, Milnerton, Cape Town, 7441, Afrika Sel.</a>
                        </p>
                        <p class="col-span-3 p-4 flex justify-center">
                            <button class="h-8 px-2 rounded-lg bg-[#0033ff] text-white font-semibold">diterima</button>
                        </p>
                    </div>
                    <div class="grid grid-cols-12 border-b-2">
                        <p class="col-span-1 p-4 flex justify-center">5</p>
                        <p class="col-span-2 p-4 flex justify-center">
                        <a href="#">FK23010605</a></p>
                        <p class="col-span-6 p-4 flex justify-center">
                        <a href="admin_order_detail.html">Avenida Principal, La Rinconada 21355, Peru</a>
                        </p>
                        <p class="col-span-3 p-4 flex justify-center">
                            <button class="h-8 px-2 rounded-lg bg-[#0033ff] text-white font-semibold">selesai</button>
                        </p>
                    </div>
                    <div class="grid grid-cols-12 border-b-2">
                        <p class="col-span-1 p-4 flex justify-center">6</p>
                        <p class="col-span-2 p-4 flex justify-center">
                        <a href="/adm/order/detail">FK23010606</a>
                        </p>
                        <p class="col-span-6 p-4 flex justify-center">
                            <a href="/adm/order/detail">Isla Trinidad 1548, V9410FFH Ushuaia, Tierra del Fuego, Argentin</a>
                        </p>
                        <p class="col-span-3 p-4 flex justify-center">
                            <button class="h-8 px-2 rounded-lg bg-amber-600 text-white font-semibold">konfirmasi</button>
                        </p>
                    </div>
                    <div class="grid grid-cols-12 border-b-2">
                        <p class="col-span-1 p-4 flex justify-center">7</p>
                        <p class="col-span-2 p-4 flex justify-center">
                            <a href="/adm/order/detail">FK23010607</a>
                        </p>
                        <p class="col-span-6 p-4 flex justify-center">
                            <a href="/adm/order/detail">3VJM+8R, Ilimanaq, Greenland</a>
                        </p>
                        <p class="col-span-3 p-4 flex justify-center">
                        <button class="h-8 px-2 rounded-lg bg-red-600 text-white font-semibold">dibatalkan</button>
                        </p>
                    </div>
                </div>
                <div class="flex justify-center mt-8 pb-4">
                    <a href="#" class="mr-2 self-center">
                        <i class="fa-solid fa-chevron-left fa-lg"></i>
                    </a>
                    <a href="#" class="p-2 bg-blue-400 hover:bg-blue-300 rounded-lg mr-2">1</a>
                    <a href="#" class="p-2 bg-blue-400 hover:bg-blue-300 rounded-lg mr-2">2</a>
                    <a href="#" class="p-2 bg-blue-400 hover:bg-blue-300 rounded-lg mr-2">3</a>
                    <a href="#" class="mr-2 self-center">
                        <i class="fa-solid fa-chevron-right fa-lg"></i>
                    </a>
                </div>
            </section>
        </main>
    <?= $this->endSection()?>