<?= $this->extend('layout/admin/admin')?>

<?= $this->section('content')?>
    <main class="w-10/12 md:w-4/5 ml-auto px-2 py-10 md:px-12 md:py-4">
        <section class="w-full h-auto py-8 px-12 rounded-lg bg-slate-400">
            <div class="bg-slate-100 py-2 px-8 rounded-t-lg font-semibold">
            </div>

            <div class="bg-slate-100 rounded-b-lg mt-1 py-4 px-4 font-semibold">
                <div class="flex mb-4">
                    <div class="flex">
                        <div class="w-48">
                            <p class="mb-1">gambar 1</p>
                            <img class="relative object-cover rounded-lg border-2 border-sky-500 h-48" src="/img/none.png" alt="">
                        </div>
                        <div class="col-span-3 ml-8 mr-4 self-center">
                            <button class="py-2 px-4 mb-5 w-24 block bg-[#ff950b] hover:bg-[#f28900] text-white font-semibold rounded-sm">delete</button>
                            <button class="py-2 px-4 w-24 block border-2 border-[#f28900] hover:bg-[#f28900] hover:border-[#f28900] hover:text-white font-semibold rounded-sm">change</button>
                        </div>
                    </div>
 
                    <div class="flex ml-auto">
                        <div class="w-48">
                            <p class="mb-1">gambar 2</p>
                            <img class="relative object-cover rounded-lg border-2 border-sky-500 h-48" src="/img/none.png" alt="">
                        </div>
                        <div class="col-span-3 ml-8 mr-4 self-center">
                            <button class="py-2 px-4 mb-5 w-24 block bg-[#ff950b] hover:bg-[#f28900] text-white font-semibold rounded-sm">delete</button>
                            <button class="py-2 px-4 w-24 block border-2 border-[#f28900] hover:bg-[#f28900] hover:border-[#f28900] hover:text-white font-semibold rounded-sm">change</button>
                        </div>
                    </div>
                </div>
                <div class="flex mb-4">
                    <div class="flex">
                        <div class="w-48">
                            <p class="mb-1">gambar 3</p>
                            <img class="relative object-cover rounded-lg border-2 border-sky-500 h-48" src="/img/none.png" alt="">
                        </div>
                        <div class="col-span-3 ml-8 mr-4 self-center">
                            <button class="py-2 px-4 mb-5 w-24 block bg-[#ff950b] hover:bg-[#f28900] text-white font-semibold rounded-sm">delete</button>
                            <button class="py-2 px-4 w-24 block border-2 border-[#f28900] hover:bg-[#f28900] hover:border-[#f28900] hover:text-white font-semibold rounded-sm">change</button>
                        </div>
                    </div>
 
                    <div class="flex ml-auto">
                        <div class="w-48">
                            <p class="mb-1">gambar 4</p>
                            <img class="relative object-cover rounded-lg border-2 border-sky-500 h-48" src="/img/none.png" alt="">
                        </div>
                        <div class="col-span-3 ml-8 mr-4 self-center">
                            <button class="py-2 px-4 mb-5 w-24 block bg-[#ff950b] hover:bg-[#f28900] text-white font-semibold rounded-sm">delete</button>
                            <button class="py-2 px-4 w-24 block border-2 border-[#f28900] hover:bg-[#f28900] hover:border-[#f28900] hover:text-white font-semibold rounded-sm">change</button>
                        </div>
                    </div>
                </div>     
                <div class="flex mb-4">
                    <div class="flex">
                        <div class="w-48">
                            <p class="mb-1">gambar 5</p>
                            <img class="relative object-cover rounded-lg border-2 border-sky-500 h-48" src="/img/none.png" alt="">
                        </div>
                        <div class="col-span-3 ml-8 mr-4 self-center">
                            <button class="py-2 px-4 mb-5 w-24 block bg-[#ff950b] hover:bg-[#f28900] text-white font-semibold rounded-sm">delete</button>
                            <button class="py-2 px-4 w-24 block border-2 border-[#f28900] hover:bg-[#f28900] hover:border-[#f28900] hover:text-white font-semibold rounded-sm">change</button>
                        </div>
                    </div>
 
                    <div class="flex ml-auto">
                        <div class="w-48">
                            <p class="mb-1">gambar 6</p>
                            <img class="relative object-cover rounded-lg border-2 border-sky-500 h-48" src="/img/none.png" alt="">
                        </div>
                        <div class="col-span-3 ml-8 mr-4 self-center">
                            <button class="py-2 px-4 mb-5 w-24 block bg-[#ff950b] hover:bg-[#f28900] text-white font-semibold rounded-sm">delete</button>
                            <button class="py-2 px-4 w-24 block border-2 border-[#f28900] hover:bg-[#f28900] hover:border-[#f28900] hover:text-white font-semibold rounded-sm">change</button>
                        </div>
                    </div>
                </div>      
            </div>
            
            <div class="flex mt-4">
                <button type="submit" class="mr-4 px-4 py-2 bg-[#ff950b] hover:bg-[#f28900] rounded-lg text-white font-semibold">simpan</button>
                <button type="submit" class="mr-4 px-4 py-2 bg-white hover:bg-slate-200 rounded-lg font-semibold">batal</button>
            </div>   
        </section>
    </main>
<?= $this->endSection()?>
  