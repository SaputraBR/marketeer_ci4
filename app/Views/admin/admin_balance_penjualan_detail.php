<?= $this->extend('layout/admin/admin')?>

<?= $this->section('content')?>
    <main class="w-10/12 md:w-4/5 ml-auto px-2 py-10 md:px-8 md:py-4">
        <section class="w-full h-auto py-4 px-4 rounded-lg bg-slate-400">
            <div class="bg-slate-100 py-6 px-8 rounded-t-lg font-semibold">
                <form>
                    <label for="period" class="block mb-2">Pilih Periode :</label>
                    <input type="date" id="period" name="period" class="px-2 py-1 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none">
                    <input type="date" id="period" name="period" class="px-2 py-1 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none">
                    <button class="block mt-4 px-4 py-2 border-2 bg-[#ff950b] hover:bg-[#f38a00] text-white rounded-lg font-semibold" type="submit">Submit</button>
                </form>
            </div>
            <div class="mt-1 bg-slate-100 p-4">
                <div class="flex">
                    <div class="font-semibold mb-3">
                        <h1 class="text-xl">Laporan Penjualan Detail</h1>
                        <p>Periode 01 Oktober 2023 - 3 Oktober 2023</p>
                    </div>
                    <p class="ml-auto self-center text-3xl hidden sm:block text-[#ff4800]">MarketEer</p>
                </div>
                <div class="flex space-x-1 h-72 max-h-96">
                    <div class="block w-1/4 h-1/2 border-2 border-slate-400 overflow-auto">
                        <div class="grid grid-cols-2 border-b-2 border-slate-400 sticky top-0 bg-slate-100">
                            <div class="col-span-1 flex justify-center border-r-2 border-slate-400">Tanggal</div>
                            <div class="col-span-1 flex justify-center">Total</div>
                        </div>                 
                        <div class="grid grid-cols-2 text-sm border-b-2 border-slate-400 cursor-pointer">
                            <div class="col-span-1 flex justify-center border-r-2 border-slate-400">01/10/23</div>
                            <div class="col-span-1 flex justify-center">7,999,998</div>
                        </div>
                    </div>
                    <div class="block w-3/4 space-y-1">
                        <div class="h-1/2 overflow-auto border-2 border-slate-400">
                            <div class="grid grid-cols-6 border-b-2 border-slate-400 font-semibold sticky top-0 bg-slate-100">
                                <div class="col-span-1 flex justify-center border-r-2 border-slate-400">Id Trans</div>
                                <div class="col-span-1 flex justify-center border-r-2 border-slate-400">Total</div>
                                <div class="col-span-1 flex justify-center border-r-2 border-slate-400">Discount</div>
                                <div class="col-span-1 flex justify-center border-r-2 border-slate-400">Bayar</div>
                                <div class="col-span-1 flex justify-center border-r-2 border-slate-400">Note</div>
                                <div class="col-span-1 flex justify-center">Saved</div>
                            </div>    
                            <div class="grid grid-cols-6 text-sm border-b-2 border-slate-400 cursor-pointer">
                                <div class="col-span-1 flex justify-center border-r-2 border-slate-400">FK23100101</div>
                                <div class="col-span-1 flex justify-center border-r-2 border-slate-400">7,999,998</div>
                                <div class="col-span-1 flex justify-center border-r-2 border-slate-400">1,199,998</div>
                                <div class="col-span-1 flex justify-center border-r-2 border-slate-400">6,800,000</div>
                                <div class="col-span-1 flex justify-center border-r-2 border-slate-400">BRIVA</div>
                                <div class="col-span-1 flex justify-center">01/10/23 10:23</div>
                            </div>                                                    
                        </div>
                        <div class="h-1/2 overflow-auto border-2 border-slate-400">
                            <div class="grid grid-cols-12 divide-x-2 divide-slate-400 border-b-2 border-slate-400 font-semibold sticky top-0 bg-slate-100">
                                <div class="col-span-1 flex justify-center">No</div>
                                <div class="col-span-3 flex justify-center">Nama</div>
                                <div class="col-span-1 flex justify-center">QTY</div>
                                <div class="col-span-2 flex justify-center">HPP</div>
                                <div class="col-span-2 flex justify-center">Jual</div>
                                <div class="col-span-2 flex justify-center">Laba</div>
                                <div class="col-span-1 flex justify-center">Margin</div>
                            </div>
                            <div class="item-detail">
                                <div class="grid grid-cols-12 text-sm border-b-2 border-slate-400 divide-x-2 divide-slate-400"> 
                                    <div class="col-span-1 flex justify-center self-center" id="nomor">1</div>
                                    <div class="col-span-3 flex justify-center p-1" id="item-nama">Air Jordan 7 Retro SE Men's Shoes</div>
                                    <div class="col-span-1 flex justify-center" id="qty">2</div>
                                    <div class="col-span-2 flex justify-center" id="hpp">3,000,123</div>
                                    <div class="col-span-2 flex justify-center" id="jual">6,800,000</div>
                                    <div class="col-span-2 flex justify-center" id="laba"></div>
                                    <div class="col-span-1 flex justify-center" id="margin"></div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-1 bg-slate-100 py-6 px-8 flex rounded-b-lg font-semibold">
                <button type="button" class="px-4 py-2 border-2 bg-[#ff950b] hover:bg-[#f38a00] text-white rounded-lg font-semibold">
                    Back
                </button>
                <button type="button" class="ml-auto flex px-4 py-2 border-2 border-[#ff950b] text-[#ff950b] rounded-lg font-bold">
                    <p class="mr-2">Export</p>
                    <span class="self-center">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" style="fill: #ff950b;">
                            <path d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V288H216c-13.3 0-24 10.7-24 24s10.7 24 24 24H384V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zM384 336V288H494.1l-39-39c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l80 80c9.4 9.4 9.4 24.6 0 33.9l-80 80c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l39-39H384zm0-208H256V0L384 128z"/>
                        </svg>
                    </span>
                </button>
                <button type="button" class="ml-4 flex px-4 py-2 border-2 border-[#ff950b] text-[#ff950b] rounded-lg font-bold">
                    <p class="mr-2">Print</p>
                    <span class="self-center">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512" style="fill: #ff950b;">
                            <path d="M128 0C92.7 0 64 28.7 64 64v96h64V64H354.7L384 93.3V160h64V93.3c0-17-6.7-33.3-18.7-45.3L400 18.7C388 6.7 371.7 0 354.7 0H128zM384 352v32 64H128V384 368 352H384zm64 32h32c17.7 0 32-14.3 32-32V256c0-35.3-28.7-64-64-64H64c-35.3 0-64 28.7-64 64v96c0 17.7 14.3 32 32 32H64v64c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V384zM432 248a24 24 0 1 1 0 48 24 24 0 1 1 0-48z"/>
                        </svg>
                    </span>
                </button>
                </a>
            </div>
        </section>
    </main>
<?= $this->endSection()?>

<?= $this->section('script')?>
    <script>
        jualDetail()
    </script>
<?= $this->endSection()?>
  