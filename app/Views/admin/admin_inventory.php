<?= $this->extend('layout/admin/admin')?>

<?= $this->section('content')?>
    <main class="w-10/12 md:w-4/5 ml-auto px-2 py-3 md:px-12 md:py-4">
        <section class="">

            <div class="mb-4" id="adminArea">
                <p class="text-4xl font-bold self-center w-full text-[#fa8c00] border-b-2 border-slate-800">Product</p>
                <div class="flex mt-2">

                    <a href="/adm/inventory/tambah">
                        <button class="px-2 py-1 flex rounded-md bg-red-100 hover:bg-red-200">
                            <span class="self-center mr-1" style="fill: rgb(220 38 38)">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/>
                                </svg>
                            </span>
                            <p class="text-red-600 text-lg font-semibold">Tambah</p>
                        </button>
                    </a>
                    <button class="ml-auto px-2 py-1 flex rounded-md bg-blue-100 text-[blue] hover:bg-blue-200 hover:pointer" id="button-filter">
                        <span class="self-center">
                            <i class="fa-sharp fa-solid fa-filter"></i>
                        </span>
                        <p class="ml-1 text-lg font-semibold">Filter</p>
                    </button>
                </div>
            </div>
            <?php $i = 0; foreach ($barang as $produk): $i++ ?>
                <div class="flex mb-8" id="produk">
                    <h1 class="text-2xl mr-2"><?= $i ?></h1>
                    <div class="grid grid-cols-4 gap-4 bg-[#89a7b1] p-2 rounded-lg overflow-hidden">
                        <div class="col-span-1">
                            <img class="relative object-cover h-48 w-48 rounded-l-lg" src="/img/post_picture/<?= $produk["gambar"]?>" alt="">
                        </div>
                        <div class="col-span-3 ml-2 mr-4 mt-3">
                            <p class="text-xl font-semibold text-w mb-2"><?= $produk["nama"]?></p>
                            <div class="grid grid-cols-5 gap-3">
                                <div class="col-span-1">
                                    <span class="flex">
                                        <p>HPP</p>
                                        <p class="ml-auto">:</p>
                                    </span>
                                    <span class="flex">
                                        <p>Harga Jual</p>
                                        <p class="ml-auto">:</p>
                                    </span>
                                    <span class="flex">
                                        <p>Stok</p>
                                        <p class="ml-auto">:</p>
                                    </span>
                                </div>
                                <span class="col-span-4">
                                    <p>Rp<span><?= number_format($produk["hpp"])?></span></p>
                                    <p>Rp<span><?= number_format($produk["jual"])?></span></p>
                                    <p><?= $produk["stok"]?></p>
                                </span>
                                <div class="flex col-span-5 mt-1 mb-3">
                                    <a href="<?= base_url('adm/inventory/'.$produk["plu"].'/edit')?>" class="px-2 py-1 mr-3 rounded-lg font-semibold text-white bg-[#005bc5] hover:bg-[#006ae2]">
                                        edit
                                    </a>
                                    <a href="#" class="px-2 py-1 mr-3 rounded-lg font-semibold text-white bg-[#fd0a54] hover:bg-[#ff2b6b]">
                                        delete
                                    </a>
                                    <p class="kondisi hidden"><?= $produk["kondisi"]?></p>
                                    <div class="mr-3 buttons r" id="button-1">
                                        <input type="checkbox" class="checkbox" value="" id="input-on">
                                        <div class="knobs"></div>
                                        <div class="layer"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </section>
    </main>

    <section class="modal-filter" id="modal-filter">
        <div class="content-modal py-8 px-10">
            <div class="flex">
                <h1 class="font-bold text-lg mb-1">Filter</h1>
                <button class="ml-auto" id="close-button">
                    <i class="fa-solid fa-xmark fa-xl hover:text-[red]"></i>
                </button>
            </div>

            <div class="grid grid-cols-3">
                <div>
                    <h2 class="font-semibold">Kategori :</h2>
                    <span class="flex">
                        <input type="checkbox" class="mr-1">
                        <p>fashion pria</p>
                    </span>
                    <span class="flex">
                        <input type="checkbox" class="mr-1">
                        <p>fashion wanita</p>
                    </span>
                    <span class="flex">
                        <input type="checkbox" class="mr-1">
                        <p>gadget</p>
                    </span>
                </div>
                <div>
                    <h2 class="font-semibold">Harga :</h2>
                    <span class="flex">
                        <input type="checkbox" class="mr-1">
                        <p>Rp 0 - 50,000</p>
                    </span>
                    <span class="flex">
                        <input type="checkbox" class="mr-1">
                        <p>Rp 50,000 - 200,000</p>
                    </span>
                    <span class="flex">
                        <input type="checkbox" class="mr-1">
                        <p>Rp 200,000 +</p>
                    </span>
                </div>
                <div>
                    <h2 class="font-semibold">Kondisi :</h2>
                    <span class="flex">
                        <input type="checkbox" class="mr-1">
                        <p>ON</p>
                    </span>
                    <span class="flex">
                        <input type="checkbox" class="mr-1">
                        <p>OFF</p>
                    </span>
                </div>
            </div>

            <div class="mt-4">
                <h1 class="font-bold text-lg">Sort</h1>
                <span class="flex">
                    <input type="checkbox" class="mr-1">
                    <p>A-Z</p>
                </span>
                <span class="flex">
                    <input type="checkbox" class="mr-1">
                    <p>Z-A</p>
                </span>
            </div>
            
            <div class="flex justify-center">
                <button class="py-1 px-4 bg-[#fa8c00] rounded-lg text-white hover:bg-[#f89f2b] text-lg font-semibold">save</button>
            </div>
            
        </div>
    </section>
<?= $this->endSection()?>

<?= $this->section('script')?>
    <script>
        diskon()
        
        var statusButton = document.querySelectorAll("#button-1")
        for (i = 0; i < statusButton.length; i++){
            var a = statusButton[i].querySelector("#input-on")
            a.addEventListener("click", function(){
                if (this.checked){
                    this.value = "off"
                } else {
                    this.value = "on"
                }
            })
        }

        var kond = document.querySelectorAll(".kondisi")
        for (i = 0; i < kond.length; i++){
            var a = kond[i].nextElementSibling.querySelector("input")
           if (kond[i].innerText == "ON"){
               a.checked = false
           } else {
               a.checked = true
           }
            
        }
    </script>
<?= $this->endSection()?>