<?= $this->extend('layout/admin/admin')?>

<?= $this->section('content')?>
    <main class="w-10/12 h-full md:w-4/5 ml-auto px-2 py-3 md:px-12 md:py-4">
        <section class="w-full h-auto py-10 px-12 rounded-lg bg-slate-400">
            <div class="p-4 rounded-t-lg bg-slate-200">
                <div class="grid grid-cols-12">
                    <p class="font-semibold text-lg col-span-2">Id Transaksi</p>
                    <p class="font-semibold text-lg col-span-1 mx-auto">:</p>
                    <p class="font-semibold text-lg col-span-9">FK23010605</p>
                </div>
                <div class="grid grid-cols-12">
                    <p class="font-semibold text-lg col-span-2">Nama Pembeli</p>
                    <p class="font-semibold text-lg col-span-1 mx-auto">:</p>
                    <p class="font-semibold text-lg col-span-9">Pablo El Queque</p>
                </div>
                <div class="grid grid-cols-12">
                    <p class="font-semibold text-lg col-span-2">Alamat</p>
                    <p class="font-semibold text-lg col-span-1 mx-auto">:</p>
                    <p class="font-semibold text-lg col-span-9">Avenida Principal, La Rinconada 21355, Peru</p>
                </div>
            </div>
            <div class="p-4 mt-2 bg-slate-200">
                <div class="grid grid-cols-12">
                    <p class="font-semibold text-lg col-span-2">Nama Barang</p>
                    <p class="font-semibold text-lg col-span-1 mx-auto">:</p>
                    <p class="font-semibold text-lg col-span-9">Air Jordan 7 Retro SE Men's Shoes 40-47</p>
                </div>
                <div class="grid grid-cols-12">
                    <p class="font-semibold text-lg col-span-2">Jumlah</p>
                    <p class="font-semibold text-lg col-span-1 mx-auto">:</p>
                    <p class="font-semibold text-lg col-span-9">1</p>
                </div>
                <div class="grid grid-cols-12">
                    <p class="font-semibold text-lg col-span-2">Harga</p>
                    <p class="font-semibold text-lg col-span-1 mx-auto">:</p>
                    <p class="font-semibold text-lg col-span-9">3,400,000</p>
                </div>
                <div class="grid grid-cols-12">
                    <p class="font-semibold text-lg col-span-2">Ongkir</p>
                    <p class="font-semibold text-lg col-span-1 mx-auto">:</p>
                    <p class="font-semibold text-lg col-span-9">20,000</p>
                </div>
                <div class="grid grid-cols-12">
                    <p class="font-semibold text-lg col-span-2">Pembayaran</p>
                    <p class="font-semibold text-lg col-span-1 mx-auto">:</p>
                    <p class="font-semibold text-lg col-span-9">BRIVA</p>
                </div>
            </div>
            <div class="p-4 mt-2 rounded-b-lg bg-slate-200">
                <div class="grid grid-cols-12">
                    <p class="font-semibold text-lg col-span-2">No Resi</p>
                    <p class="font-semibold text-lg col-span-1 mx-auto">:</p>
                    <p class="font-semibold text-lg col-span-9">10001844339414</p>
                </div>
                <div class="grid grid-cols-12">
                    <p class="font-semibold text-lg col-span-2">Tanggal Out</p>
                    <p class="font-semibold text-lg col-span-1 mx-auto">:</p>
                    <p class="font-semibold text-lg col-span-9">06/01/23</p>
                </div>
                <div class="grid grid-cols-12">
                    <p class="font-semibold text-lg col-span-2">Status</p>
                    <p class="font-semibold text-lg col-span-1 mx-auto">:</p>
                    <p class="font-semibold text-lg col-span-9">Selesai</p>
                </div>
            </div>
        </section>
    </main>
<?= $this->endSection()?>