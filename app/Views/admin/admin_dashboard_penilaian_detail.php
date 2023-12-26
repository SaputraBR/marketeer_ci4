<?= $this->extend('layout/admin/admin')?>

<?= $this->section('content')?>
    <main class="w-10/12 h-full md:w-4/5 ml-auto px-2 py-3 md:px-12 md:py-4">
        <section class="w-full h-full rounded-lg bg-gray-300">
            <div class="py-10 px-12">
                <div class="flex">
                    <h1 class="text-2xl font-semibold">Andreas Christensen</h1>
                    <p class="ml-auto">11 jun 2023 3:43 pm</p>
                </div>
                <div class="mb-2">
                    <div class="row-span-1 grid grid-cols-12 gap-4">
                        <p class="col-span-1">id</p>
                        <p class="col-span-1 ml-auto">:</p>
                        <p class="col-span-10">23010601</p>
                    </div>
                    <div class="grid grid-cols-12 gap-4">
                        <p class="col-span-1">pesanan</p>
                        <p class="col-span-1 ml-auto">:</p>
                        <p class="col-span-10">Air Jordan 7 Retro SE Men's Shoes 40-47</p>
                    </div>
                    <div class="grid grid-cols-12 gap-4">
                        <p class="col-span-1">alamat</p>
                        <p class="col-span-1 ml-auto">:</p>
                        <p class="col-span-10">FIFA-Strasse 20, 8044 Zürich, Swiss</p>
                    </div>
                    <div class="grid grid-cols-12 gap-4">
                        <p class="col-span-1">rating</p>
                        <p class="col-span-1 ml-auto">:</p>
                        <div class="col-span-10 flex items-center">
                            <i class="fa-sharp fa-solid fa-star fa-sm self-center text-[#ff950b]"></i>
                            <i class="fa-sharp fa-solid fa-star fa-sm self-center text-[#ff950b]"></i>
                            <i class="fa-sharp fa-solid fa-star fa-sm self-center text-[#ff950b]"></i>
                            <i class="fa-sharp fa-solid fa-star fa-sm self-center text-[#ff950b]"></i>
                            <i class="fa-sharp fa-solid fa-star fa-sm self-center"></i>
                            <p class="text-sm font-semibold ml-1">4.5</p>
                        </div>
                    </div>

                </div>

                <div class="w-full h-2/4 mt-1 rounded-lg bg-gray-100 py-4">
                    <p class="ml-6">pengiriman cepat, barang bagus dan nyaman dipakai</p>
                </div>
                <div class="flex mt-4">
                    <a href="#" class="px-3 py-1 mr-2 rounded-lg border-2 border-black font-semibold detail-pesan">balas</a>
                    <a href="#" class="px-3 py-1 rounded-lg border-2 border-[#ff1100] text-[#dd0f00] font-semibold delete-pesan">delete</a>
                </div>

            </div>

        </section>
    </main>
<?= $this->endSection()?>