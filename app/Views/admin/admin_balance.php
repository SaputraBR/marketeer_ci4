<?= $this->extend('layout/admin/admin')?>

<?= $this->section('style')?>
    <style>
        .on {
            background-color: #0029ce;
        }
    </style>
<?= $this->endSection()?>

<?= $this->section('content')?>
    <main class="w-10/12 md:w-4/5 ml-auto px-2 py-3 md:px-12 md:py-4">
        <header class="h-44 bg-[#0033ff] rounded-lg p-2">
            <div class="h-full w-full flex border-white border-2 rounded-lg">
                <div class="self-center w-full">
                    <p class="flex justify-center text-xl text-white font-bold">Penjualan Hari Ini</p>
                    <p class="flex justify-center text-4xl text-white font-bold">Rp 29.735.720.462,00</p>
                </div>
            </div>
        </header>

        <section class="mt-4 p-2 h-auto rounded-lg">
            <div class="flex justify-center w-full mt-2" id="button-club">
                <div class="w-auto mr-4 relative">
                    <button class="bg-[#0033ff] w-full hover:bg-[#0029ce] rounded-xl text-white hover:text-gray-200 p-4 on">
                        <i class="fa-solid fa-money-bill-wave fa-2x"></i>
                    </button>
                    <p class="flex mx-auto font-semibold cursor-default mx-auto">Penjualan</p>
                </div>
                <div class="w-auto self-center mr-4">
                    <button class="bg-[#0033ff] w-full hover:bg-[#0029ce] rounded-xl text-white hover:text-gray-200 p-4">
                        <i class="fa-solid fa-cart-shopping fa-2x"></i>
                    </button>
                    <p class="flex justify-center font-semibold cursor-default">Pembelian</p>
                </div>
            </div>
        </section>

        <section class="w-full overflow-hidden" id="contains-lap">
            <div class="grid grid-cols-2 gap-4 w-full" id="translate" style="transform: translateX(25%);">
                <div class="col-span-1 w-full font-semibold" id="slide" style="transition: opacity 0.3s; opacity: 1;">
                    <div class="bg-slate-100 border-2 border-[#0033ff]">
                        <a href="/adm/balance/rekap">
                            <div class="py-2 px-3 hover:bg-slate-200 border-b border-[#0033ff]">Rekap Penjualan</div>
                        </a>
                        <a href="/adm/balance/penjualan">
                            <div class="py-2 px-3 hover:bg-slate-200 border-b border-[#0033ff]">Laporan Penjualan</div>
                        </a>
                        <a href="/adm/balance/jual_detail">
                            <div class="py-2 px-3 hover:bg-slate-200 border-b border-[#0033ff]">Laporan Penjualan Detail</div>
                        </a>
                        <a href="/adm/balance/margin">
                            <div class="py-2 px-3 hover:bg-slate-200 border-b border-[#0033ff]">Laporan Margin Penjualan</div>
                        </a>
                        <a href="/adm/balance/nielsen">
                            <div class="py-2 px-3 hover:bg-slate-200">Nielsen</div>
                        </a>
                    </div>
                </div>
    
                <div class="col-span-1 w-full font-semibold" id="slide" style="transition: opacity 0.3s; opacity: 0;">
                    <div class="bg-slate-100 border-2 border-[#0033ff]">
                        <a href="/adm/balance/beli">
                            <div class="py-2 px-3 hover:bg-slate-200 border-b border-[#0033ff]">Rekap Pembelian</div>
                        </a>
                        <a href="/adm/balance/beli_barang">
                            <div class="py-2 px-3 hover:bg-slate-200">Pembelian Per Barang</div>
                        </a>                                                
                    </div>                    
                </div>

        </section>
    </main>
<?= $this->endSection()?>

<?= $this->section('script')?>
    <script>
        balance()
    </script>
<?= $this->endSection()?>