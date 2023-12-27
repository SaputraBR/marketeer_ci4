<?= $this->extend('layout/admin/admin')?>

<?= $this->section('content')?>
    <main class="w-10/12 md:w-4/5 ml-auto px-2 py-3 md:px-12 md:py-4">
        <section class="mt-4 bg-gray-300 rounded-lg">
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
                        <a href="/adm/order/pesanan/konfirmasi">FK23010606</a>
                    </p>
                    <p class="col-span-6 p-4 flex justify-center">
                        <a href="/adm/order/pesanan/konfirmasi">Isla Trinidad 1548, V9410FFH Ushuaia, Tierra del Fuego, Argentin</a>
                    </p>
                    <p class="col-span-3 p-4 flex justify-center">
                        <button class="h-8 px-2 rounded-lg bg-amber-600 text-white font-semibold">konfirmasi</button>
                    </p>
                </div>

                <div class="grid grid-cols-12 border-b-2">
                    <p class="col-span-1 p-4 flex justify-center">2</p>
                    <p class="col-span-2 p-4 flex justify-center">
                       <a href="/adm/order/pesanan/batal">FK23010607</a>
                    </p>
                    <p class="col-span-6 p-4 flex justify-center">
                        <a href="/adm/order/pesanan/batal">3VJM+8R, Ilimanaq, Greenland</a>
                    </p>
                    <p class="col-span-3 p-4 flex justify-center">
                        <button class="h-8 px-2 rounded-lg bg-red-600 text-white font-semibold">dibatalkan</button>
                    </p>
                </div>
            </div>
        </section>
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
    </main>
<?= $this->endSection()?>