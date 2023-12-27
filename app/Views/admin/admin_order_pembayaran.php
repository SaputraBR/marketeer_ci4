<?= $this->extend('layout/admin/admin')?>

<?= $this->section('content')?>
    <main class="w-10/12 md:w-4/5 ml-auto px-2 py-10 md:px-12 md:py-4">
        <section class="w-full h-auto py-8 px-12 rounded-lg bg-slate-400">
            <div class="bg-slate-100 py-6 px-8 rounded-t-lg font-semibold">
                <form action="" class="">
                    <div class="flex mb-4">
                        <label for="nama" class="w-1/5 self-center">Jenis Pembayaran</label>
                        <select type="text" name="nama" class="w-2/4 rounded-md px-3 py-2 bg-gray-200 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none">
                            <option value="p" class="py-2">E-Wallet</option>
                            <option value="c" class="py-2">Transfer</option>
                            <option value="c" class="py-2">Virtual Account</option>
                        </select>
                    </div>
                    <div class="flex mb-4">
                        <label for="nama" class="w-1/5 self-center">Nama Bank</label>
                        <input type="text" name="nama" class="w-2/4 rounded-md px-3 py-2 bg-gray-200 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none">
                    </div>
                    <div class="flex mb-2">
                        <label for="nama" class="w-1/5 self-center">No Rekening</label>
                        <input type="text" name="nama" class="w-2/4 rounded-md px-3 py-2 bg-gray-200 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none">
                    </div>

                    <button type="submit" class="mt-4 adminArea p-2 rounded-lg bg-[#fa8c00] hover:bg-[#fda127]">
                       <p class="font-semibold text-slate-100">Simpan</p>
                    </button>
                </form>
            </div>
            <div class="mt-1 bg-slate-100 py-6 px-8 font-semibold">
                <h1 class="text-xl">Jenis Pembayaran</h1>
                <div class="flex mt-1">
                    <p class="font-bold">E-Wallet</p>
                    <button onclick="check()" class="ml-auto hover:text-blue-800" id="edit">
                        <i class="self-center fa-solid fa-pencil"></i>
                        edit
                    </button>
                </div>
                
                <div class="grid grid-cols-12 mb-1">
                    <p class="col-span-1">Gopay</p>
                    <p class="col-span-1 mx-auto">:</p>
                    <div class="col-span-10 flex">
                        <p class="">087545685451</p>
                        <span class="ml-1 self-center">
                            <i class="fa-solid fa-circle-check text-[#02c502] on"></i>
                        </span>
                        <input type="checkbox" class="w-5 h-5 self-center ml-2">
                    </div>                    
                </div>
                <div class="grid grid-cols-12 mb-1">
                    <p class="col-span-1">OVO</p>
                    <p class="col-span-1 mx-auto">:</p>
                    <div class="col-span-10 flex">
                        <p class="">082341235623</p>
                        <span class="ml-1 self-center">
                            <i class="fa-solid fa-circle-minus text-[#ff0000] off"></i>
                        </span>
                        <input type="checkbox" class="w-5 h-5 self-center ml-2">
                    </div>                    
                </div>
                <div class="grid grid-cols-12 mb-1">
                    <p class="col-span-1">Dana</p>
                    <p class="col-span-1 mx-auto">:</p>
                    <div class="col-span-10 flex">
                        <p class="">085168465838</p>
                        <span class="ml-1 self-center">
                            <i class="fa-solid fa-circle-check text-[#02c502] on"></i>
                        </span>
                        <input type="checkbox" class="w-5 h-5 self-center ml-2">
                    </div>                    
                </div>

                <p class="mt-2 font-bold">Transfer Bank</p>
                <div class="grid grid-cols-12">
                    <p class="col-span-1">BRI</p>
                    <p class="col-span-1 mx-auto">:</p>
                    <div class="col-span-10 flex">
                        <p class="">114531548</p>
                        <span class="ml-1 self-center">
                            <i class="fa-solid fa-circle-check text-[#02c502] on"></i>
                        </span>
                        <input type="checkbox" class="w-5 h-5 self-center ml-2">
                    </div>                    
                </div>
                <div class="grid grid-cols-12">
                    <p class="col-span-1">BCA</p>
                    <p class="col-span-1 mx-auto">:</p>
                    <div class="col-span-10 flex">
                        <p class="">488763515</p>
                        <span class="ml-1 self-center">
                            <i class="fa-solid fa-circle-check text-[#02c502] on"></i>
                        </span>
                        <input type="checkbox" class="w-5 h-5 self-center ml-2">
                    </div>                    
                </div>
                <div class="grid grid-cols-12">
                    <p class="col-span-1">BNI</p>
                    <p class="col-span-1 mx-auto">:</p>
                    <div class="col-span-10 flex">
                        <p class="">221354788</p>
                        <span class="ml-1 self-center">
                            <i class="fa-solid fa-circle-check text-[#02c502] on"></i>
                        </span>
                        <input type="checkbox" class="w-5 h-5 self-center ml-2">
                    </div>                    
                </div>

                <p class="mt-2 font-bold">Transfer Virtual Account</p>
                <div class="grid grid-cols-12">
                    <p class="col-span-3">BRIVA</p>
                    <p class="col-span-1 mx-auto">:</p>
                    <div class="col-span-8 flex">
                        <p class="">114531548</p>
                        <span class="ml-1 self-center">
                            <i class="fa-solid fa-circle-check text-[#02c502] on"></i>
                        </span>
                        <input type="checkbox" class="w-5 h-5 self-center ml-2">
                    </div>                    
                </div>
                <div class="grid grid-cols-12">
                    <p class="col-span-3">BCA Virtual Account</p>
                    <p class="col-span-1 mx-auto self-center">:</p>
                    <div class="col-span-8 flex">
                        <p class="self-center">488763515</p>
                        <span class="ml-1 self-center">
                            <i class="fa-solid fa-circle-minus text-[#ff0000] off"></i>
                        </span>
                        <input type="checkbox" class="w-5 h-5 self-center ml-2">
                    </div>                    
                </div>
                <div class="grid grid-cols-12">
                    <p class="col-span-3">BNI Virtual Account</p>
                    <p class="col-span-1 mx-auto self-center">:</p>
                    <div class="col-span-8 flex">
                        <p class="self-center">221354788</p>
                        <span class="ml-1 self-center">
                            <i class="fa-solid fa-circle-check text-[#02c502] on"></i>
                        </span>
                        
                        <input type="checkbox" class="w-5 h-5 self-center ml-2">
                    </div>                    
                </div>
            </div>
            <div class="mt-1 bg-slate-100 py-6 px-8 font-semibold rounded-b-lg">
                <div class="flex space-x-3 hidden" id="offin">
                    <button type="button" class="py-2 px-3 rounded-lg bg-slate-100 hover:bg-[#ff0000] border-2 border-[#ff0000] hover:text-white">
                        <p class="font-semibold">Off</p>
                     </button>

                     <button type="button" class="py-2 px-3 rounded-lg bg-slate-100 hover:bg-[#02c502] border-2 border-[#02c502] hover:text-white">
                        <p class="font-semibold">On</p>
                     </button>

                     <button type="button" class="py-2 px-3 rounded-lg bg-[#fa8c00] hover:bg-[#e48100]">
                        <p class="font-semibold text-slate-100">Hapus</p>
                     </button>
                </div>
            </div>
        </section>
    </main>
<?= $this->endSection()?>

<?= $this->section('script')?>
    <script>
        var cekbok  = document.querySelectorAll("input[type='checkbox']");
        var edit    = document.getElementById( "edit");
        var offin     = document.getElementById("offin");

        cekbok.forEach(e => {
            e.classList.add("hidden")
        })

        function check() {
            cekbok.forEach(e => {
                e.classList.toggle("hidden")
            })

            offin.classList.toggle("hidden")
        }        
    </script>
<?= $this->endSection()?>
  
