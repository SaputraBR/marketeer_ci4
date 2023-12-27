<?= $this->extend('layout/admin/admin')?>

<?= $this->section('content')?>
    <main class="w-10/12 md:w-4/5 ml-auto px-2 py-10 md:px-12 md:py-4">
        <section class="w-full h-auto py-8 px-12 rounded-lg bg-slate-400">
            <div class="bg-slate-100 py-6 px-8 rounded-t-lg font-semibold">
                <form action="" class="">
                    <div class="flex mb-4">
                        <label for="no-pesan" class="w-1/5 self-center">No Pesanan</label>
                        <input type="text" name="no-pesan" class="w-2/4 rounded-md px-3 py-2 bg-gray-200 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none">
                    </div>
                    <div class="flex mb-2">
                        <label for="no-resi" class="w-1/5 self-center">No Resi</label>
                        <input type="text" name="no-resi" class="w-2/4 rounded-md px-3 py-2 bg-gray-200 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none">
                    </div>
                    <div class="flex mb-2">
                        <label for="dari" class="w-1/5 self-center">Alamat Pengiriman</label>
                        <input type="text" name="dari" class="w-2/4 rounded-md px-3 py-2 bg-gray-200 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none">
                    </div>
                    <div class="flex mb-2">
                        <label for="tujuan" class="w-1/5 self-center">Alamat Tujuan</label>
                        <input type="text" name="tujuan" class="w-2/4 rounded-md px-3 py-2 bg-gray-200 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none">
                    </div>
                    <div class="flex mb-4">
                        <label for="kurir" class="w-1/5 self-center">Pengiriman</label>
                        <select type="text" name="kurir" class="w-2/4 rounded-md px-3 py-2 bg-gray-200 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none">
                            <option selected disabled>Pilih Kurir</option>
                            <option value="JNE" class="py-2">JNE</option>
                            <option value="J&T" class="py-2">J&T</option>
                            <option value="SICEPAT" class="py-2">SICEPAT</option>
                            <option value="FEDEX" class="py-2">FEDEX</option>
                        </select>
                    </div>

                    <button type="submit" class="mt-4 p-2 rounded-lg bg-[#fa8c00] hover:bg-[#fda127]">
                       <p class="font-semibold text-slate-100">Simpan</p>
                    </button>
                </form>
            </div>

            <div class="mt-2 bg-slate-100 py-6 px-8 font-semibold" id="daftar-kurir">
                <h1 class="text-xl">Daftar Pengiriman</h1>

                <div class="grid grid-cols-6 items-center mt-4 divide-x-2 divide-slate-400 border-b-2 border-slate-400">
                    <div class="col-span-1 flex justify-center p-2">Nama</div>
                    <div class="col-span-3 text-sm divide-y-2 divide-slate-400">
                        <div class="flex justify-center">Tarif</div>
                        <div class="grid grid-cols-3 divide-x-2 divide-slate-400">
                            <p class="flex justify-center">Reguler</p>
                            <p class="flex justify-center">Ekonomi</p>
                            <p class="flex justify-center">Kargo</p>
                        </div>
                    </div>
                    <div class="col-span-1 flex justify-center p-2">Status</div>
                    <div class="col-span-1 flex justify-center p-2">Edit</div>
                </div> 

                <div class="grid grid-cols-6 items-center border-b-2 border-slate-400 py-1">
                    <div class="col-span-1 flex kurir-merk" id="kurir-merk">
                        <p class="mx-auto">JNE</p>
                    </div>
                    <div class="col-span-3 grid grid-cols-3" id="ongkos-kurir">
                        <div class="col-span-1 flex justify-center ongkos-kurir">Rp20.000</div>
                        <div class="col-span-1 flex justify-center ongkos-kurir">Rp18.000</div>
                        <div class="col-span-1 flex justify-center ongkos-kurir">Rp51.000</div>
                    </div>
                    <div class="col-span-1 flex justify-center on" id="status">ON</div>
                    <div class="col-span-1 flex justify-center sss">
                        <button class="hover:text-[#fa8c00]" id="button-pen">
                            <i class="self-center fa-solid fa-pencil mr-1"></i>
                        </button>
                    </div>
                </div>

                <div class="grid grid-cols-6 items-center border-b-2 border-slate-400 py-1">
                    <div class="col-span-1 flex kurir-merk" id="kurir-merk">
                        <p class="mx-auto">J&T</p>
                    </div>
                    <div class="col-span-3 grid grid-cols-3" id="ongkos-kurir">
                        <div class="col-span-1 flex justify-center ongkos-kurir">Rp18.000</div>
                        <div class="col-span-1 flex justify-center ongkos-kurir">Rp20.000</div>
                        <div class="col-span-1 flex justify-center ongkos-kurir">Rp54.000</div>
                    </div>
                    <div class="col-span-1 flex justify-center off" id="status">OFF</div>
                    <div class="col-span-1 flex justify-center">
                        <button class="hover:text-[#fa8c00]" id="button-pen">
                            <i class="self-center fa-solid fa-pencil mr-1"></i>
                        </button>
                    </div>
                </div>
                
                <div class="flex space-x-3 mt-8" id="offin">
                    <button id="button-tambah" type="button" class="py-2 px-3 rounded-lg hover:bg-slate-100 bg-[#fa8c00] hover:text-[#fa8c00] border-2 border-[#fa8c00] text-white">
                        <p class="font-semibold">Tambah</p>
                     </button>
                </div>
            </div>

            <div class="mt-2 bg-slate-100 py-6 px-8 font-semibold">
                <div class="grid grid-cols-12 border-y-2 border-slate-400">
                    <h1 class="col-span-1 p-2 flex justify-center border-r-2 border-slate-400">Id</h1>
                    <h1 class="col-span-2 p-2 flex justify-center border-r-2 border-slate-400">No Pesan</h1>
                    <h1 class="col-span-2 p-2 flex justify-center border-r-2 border-slate-400">No Resi</h1>
                    <h1 class="col-span-3 p-2 flex justify-center border-r-2 border-slate-400">Dari</h1>
                    <h1 class="col-span-3 p-2 flex justify-center border-r-2 border-slate-400">Tujuan</h1>
                    <h1 class="col-span-1 p-2 flex justify-center">Kurir</h1>
                </div>
                <div class="grid grid-cols-12 border-b-2 border-slate-400">
                    <p class="col-span-1 p-2 flex justify-center">1</p>
                    <p class="col-span-2 p-2 flex justify-center">FK23010603</p>
                    <p class="col-span-2 p-2 flex justify-center">10001844339414</p>
                    <p class="col-span-3 p-2 flex justify-center">Jl Heleneborgsgatan 16, 117 32 Stockholm, Swedia</p>
                    <p class="col-span-3 p-2 flex justify-center">Beco da Cruz Vermelha 2, Portimão, Portugal</p>
                    <p class="col-span-1 p-2 flex justify-center">FEDEX</p>
                </div>
            </div>
        </section>
    </main>

    <section class="modal-filter" id="modal-edit">
        <div class="content-modal p-6">
            <div class="flex">
                <h1 class="font-bold text-lg mb-1">Tambah</h1>
                <button class="ml-auto" id="close-button">
                    <i class="fa-solid fa-xmark fa-xl hover:text-[red]"></i>
                </button>
            </div>
            
            <form action="" id="form-summit" class="mt-3">
                <div class="grid grid-cols-6 font-semibold">
                    <label for="nama" class="col-span-1 self-center">Nama</label>
                    <input type="text" name="nama"  id="nama-kurir" class="col-span-5 w-2/3 rounded-md px-3 bg-gray-200 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none">
                </div>
                <div class="grid grid-cols-6 mt-4 font-semibold">
                    <p class="col-span-1">Tarif</p>
                    <div class="col-span-5"  id="mod-tarif">
                        <div class="grid grid-cols-10 mb-2">
                            <label for="reguler" class="col-span-1 self-center block">Reguler</label>
                            <input type="text" name="reguler" id="tarif-reg" class="col-span-9 w-2/3 rounded-md px-3 ml-12 bg-gray-200 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none">
                        </div>
                        <div class="grid grid-cols-10 mb-2">
                            <label for="ekonomi" class="col-span-1 self-center block">Ekonomi</label>
                            <input type="text" name="ekonomi" id="tarif-eko" class="col-span-9 flex w-2/3 rounded-md px-3 ml-12 bg-gray-200 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none">
                        </div>
                        <div class="grid grid-cols-10">
                            <label for="kargo" class="col-span-1 self-center block">Kargo</label>
                            <input type="text" name="kargo" id="tarif-kar" class="col-span-9 flex w-2/3 rounded-md px-3 ml-12 bg-gray-200 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none">
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-6 mt-4 font-semibold">
                    <h1 class="col-span-1">Status</h1>
                    <div class="flex col-span-5" id="status-modal">
                        <div class="flex">
                            <label class="incont self-center">
                                <input type="checkbox" value="on" name="status" class="pilih-item" id="pilih-item"> 
                                <span class="checkmark"></span>
                            </label>
                            <p class="ml-1 text-lg font-bold self-center">ON</p>
                        </div>
                        <div class="flex ml-4">
                            <label class="incont self-center">
                                <input type="checkbox" value="off" name="status" class="pilih-item" id="pilih-item"> 
                                <span class="checkmark"></span>
                            </label>
                            <p class="ml-1 text-lg font-bold self-center">OFF</p>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center mt-4">
                    <button id="summit" type="submit" class="py-2 px-4 bg-[#fa8c00] rounded-lg text-white hover:bg-[#f89f2b] text-lg font-semibold">save</button>

                    <button id="button-hapus" type="button" class="hidden ml-3 py-2 px-4 rounded-lg hover:bg-slate-100 bg-[#f30000] hover:text-[#f30000] border-2 border-[#f30000] text-white">
                        <p class="font-semibold">Hapus</p>
                     </button>
                </div>
            </form>
        </div>
    </section>
<?= $this->endSection()?>

<?= $this->section('script')?>
    <script>
        orderKrm()
    </script>
<?= $this->endSection()?>