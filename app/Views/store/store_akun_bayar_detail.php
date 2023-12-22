<head>
    <?= $this->include('layout/store/head')?>
</head>

<body>
    <main class="w-full h-full flex bg-slate-400 relative top-0 bottom-0">
        <section class="absolute flex right-0 bottom-0 left-0 top-0 mx-4 sm:mx-auto w-auto sm:w-2/3 md:w-1/2 h-auto">
            <div class="w-full self-center">
                <div class="bg-slate-100 py-2 px-4 sm:py-4 sm:px-8 rounded-t-lg font-semibold space-y-1">
                    <h1 class="text-base sm:text-lg mb-1">Detail Pembayaran</h1>
                    <div class="text-sm sm:text-base flex">
                        <p>Harga Barang</p>
                        <p class="ml-auto font-semibold">Rp<span id="harga-barang">504,193,425</span></p>
                    </div>
                    <div class="text-sm sm:text-base flex">
                        <p>Biaya Admin</p>
                        <p class="ml-auto font-semibold">Rp<span id="biaya-adm">1,500</span></p>
                    </div>
                    <div class="text-sm sm:text-base flex">
                        <p>Ongkos Kirim</p>
                        <p class="ml-auto font-semibold">Rp<span id="ongkos-kirim">23,000</span></p>
                    </div>
                    <div class="text-sm sm:text-base flex">
                        <p>Diskon Barang</p>
                        <p class="ml-auto font-semibold">-Rp<span id="diskon-barang">115,964,487</span></p>
                    </div>
                    <div class="text-sm sm:text-base flex">
                        <p>Diskon Ongkir</p>
                        <p class="ml-auto font-semibold">-Rp<span id="diskon-ongkir">2,000</span></p>
                    </div>
                                                                
                    <div class="flex border-t border-gray-300 mt-2">
                        <div class="text-sm sm:text-base font-semibold">
                            <p>BRIVA</p>
                            <p>80777087813796688</p>
                        </div>
                        <div class="ml-auto self-center">
                            <p class="sm:text-lg font-semibold">Rp <span id="sub-bayar"></span></p>
                        </div>
                    </div> 
                </div>
                <div class="mt-1 bg-slate-100 py-2 px-4 sm:py-4 sm:px-8 font-semibold">
                    <h1 class="sm:text-lg mb-1">Detail Barang</h1>
                    <div class="text-sm sm:text-base flex">
                        <div>
                            <p class="font-semibold">(HSS) Kelly Sellier 28 Nata and Craie Epsom Gold</p>
                            <p class="text-sm">Rp388,228,938 X 1</p>
                        </div>
                    </div>
                </div>
                <div class="mt-1 bg-slate-100 py-2 px-4 sm:py-4 sm:px-8 font-semibold rounded-b-lg">
                    <h1 class="sm:text-lg mb-1">Detail Alamat</h1>
                    <p class="text-sm sm:text-base font-semibold">Thorin Oakenshield</p>
                    <p class="text-sm sm:text-base font-semibold">3VJM+8R, Ilimanaq, Greenland</p>
                </div>
            </div>
        </section>
    </main>

    <script>
        bayarDtl()
    </script>
</body>
  
