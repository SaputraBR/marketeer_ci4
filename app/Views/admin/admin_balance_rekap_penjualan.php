<?= $this->extend('layout/admin/admin')?>

<?= $this->section('content')?>
    <main class="w-10/12 md:w-4/5 ml-auto px-2 py-10 md:px-12 md:py-4">
        <section class="w-full h-auto py-8 px-12 rounded-lg bg-slate-400">
            <div class="bg-slate-100 py-6 px-8 rounded-t-lg font-semibold">
                <form>
                    <label for="period" class="block mb-2">Pilih Periode :</label>
                    <input type="date" id="period-start" name="period-start" class="px-2 py-1 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none">
                    <input type="date" id="period-end" name="period-end" class="px-2 py-1 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none">
                    <button class="block mt-4 px-4 py-2 border-2 bg-[#ff950b] hover:bg-[#f38a00] text-white rounded-lg font-semibold" type="submit">Submit</button>
                </form>
            </div>
            <div class="mt-1 bg-slate-100 py-6 px-8 font-semibold">
                <div class="flex">
                    <div>
                        <h1 class="text-xl">Rekap Penjualan</h1>
                        <p>Periode 01 Oktober 2023 - 3 Oktober 2023</p>
                    </div>
                    <p class="ml-auto self-center text-3xl hidden sm:block text-[#ff4800]">MarketEer</p>
                </div>
                <div class="mt-4 border-2 border-slate-400 rounded-sm">
                    <div class="grid grid-cols-12 border-b-2 border-slate-400 font-bold">
                        <h1 class="col-span-2 p-2 flex justify-center border-r-2 border-slate-400">Tanggal</h1>
                        <h1 class="col-span-2 p-2 flex justify-center border-r-2 border-slate-400">Total</h1>
                        <h1 class="col-span-2 p-2 flex justify-center border-r-2 border-slate-400">Discount</h1>
                        <h1 class="col-span-2 p-2 flex justify-center border-r-2 border-slate-400">Bayar</h1>
                        <h1 class="col-span-2 p-2 flex justify-center border-r-2 border-slate-400">Note</h1>
                        <h1 class="col-span-1 p-2 flex justify-center border-r-2 border-slate-400">Struk</h1>
                        <h1 class="col-span-1 p-2 flex justify-center">Variant</h1>
                    </div>
                    <div class="grid grid-cols-12 text-sm" id="grid-item">
                        <h1 class="col-span-2 p-2 flex justify-center" id="tangga">1 Okt 2023</h1>
                        <h1 class="col-span-2 p-2 flex justify-center" id="total">7,999,998</h1>
                        <h1 class="col-span-2 p-2 flex justify-center" id="discount">1,199,998</h1>
                        <h1 class="col-span-2 p-2 flex justify-center" id="bayar">6,800,000</h1>
                        <h1 class="col-span-2 p-2 flex justify-center" id="note">Briva</h1>
                        <h1 class="col-span-1 p-2 flex justify-center" id="struk">2</h1>
                        <h1 class="col-span-1 p-2 flex justify-center" id="variant"></h1>
                    </div>
                    <div class="grid grid-cols-12 text-sm" id="grid-item">
                        <h1 class="col-span-2 p-2 flex justify-center" id="tangga">2 Okt 2023</h1>
                        <h1 class="col-span-2 p-2 flex justify-center" id="total">14,999,999</h1>
                        <h1 class="col-span-2 p-2 flex justify-center" id="discount">5,880,000</h1>
                        <h1 class="col-span-2 p-2 flex justify-center" id="bayar">9,119,999</h1>
                        <h1 class="col-span-2 p-2 flex justify-center" id="note">Mandiri</h1>
                        <h1 class="col-span-1 p-2 flex justify-center" id="struk">1</h1>
                        <h1 class="col-span-1 p-2 flex justify-center" id="variant"></h1>
                    </div>
                    <div class="grid grid-cols-12 text-sm" id="grid-item">
                        <h1 class="col-span-2 p-2 flex justify-center" id="tanggal">3 Okt 2023</h1>
                        <h1 class="col-span-2 p-2 flex justify-center" id="total">504,193,425</h1>
                        <h1 class="col-span-2 p-2 flex justify-center" id="discount">115,964,487</h1>
                        <h1 class="col-span-2 p-2 flex justify-center" id="bayar">388,228,938</h1>
                        <h1 class="col-span-2 p-2 flex justify-center" id="note">BCA</h1>
                        <h1 class="col-span-1 p-2 flex justify-center" id="struk">1</h1>
                        <h1 class="col-span-1 p-2 flex justify-center" id="variant"></h1>
                    </div>
                </div>
                <div class="h-auto w-full mt-1 border-2 border-slate-400">
                    <div class="grid grid-cols-12 text-sm">
                        <h1 class="col-span-2 p-2 flex justify-center"></h1>
                        <h1 class="col-span-2 p-2 flex justify-center" id="jumlah-total"></h1>
                        <h1 class="col-span-2 p-2 flex justify-center" id="jumlah-disc"></h1>
                        <h1 class="col-span-2 p-2 flex justify-center" id="jumlah-bayar"></h1>
                        <h1 class="col-span-2 p-2 flex justify-center" id=""></h1>
                        <h1 class="col-span-1 p-2 flex justify-center" id="rata-struk"></h1>
                        <h1 class="col-span-1 p-2 flex justify-center" id="jml-variant"></h1>
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
        rekapJual()
    </script>
<?= $this->endSection()?>
  