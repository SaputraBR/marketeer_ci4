<?= $this->extend('layout/admin/admin')?>
<?= $this->section('style')?>
    <style>
        #market {
            background-color: #ff4800;
            float: right;
            align-self: flex-end;
            color: #fff;
        }

        #klien {
            background-color: #e8e8e8;
            align-self: flex-start;
            float: left;
        }

        #sampahh:hover{
            fill: #ff4800;
            color: #ff0000;
        }
    </style>
<?= $this->endSection()?>

<?= $this->section('content')?>
    <main class="w-10/12 h-auto md:w-4/5 ml-auto px-2 py-3 md:px-12 md:py-4">
        <section class="w-full h-auto rounded-lg bg-gray-300">
            <div class="py-6 px-14">
                <div class="mb-3">
                    <h1 class="text-2xl font-semibold">Andreas Christensen</h1>
                    <p class="">25 jan 2023 2:32 am</p>
                </div>
                <div class="w-full h-2/3 bg-gray-50 rounded-t-md overflow-y-scroll relative p-4">
                    <ul class="flex flex-col">
                        <li class="mx-auto bg-slate-100 rounded-md px-2 py-1 text-sm mb-2">06/01/23</li>
                        <li class="p-2 mb-2 rounded-lg max-w-[60%] flex relative" id="market">
                            <span class="self-center -left-6 absolute ">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512" id="sampahh">
                                    <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/>
                                </svg>
                            </span> 
                            <p>Segera lakukan pembayaran untuk pesanan FK23010603</p>
                            <p class="float-right ml-1 text-xs">08.12</p>
                        </li>
                        <li class="p-2 mb-2 rounded-lg max-w-[60%] flex relative" id="market">
                            <span class="self-center -left-6 absolute ">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512" id="sampahh">
                                    <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/>
                                </svg>
                            </span> 
                            <p>Pesanan FK23010603 sedang dikemas dan akan diserahkan ke jasa pengiriman</p>
                            <p class="float-right ml-1 text-xs">08.33</p>
                        </li>
                        <li class="p-2 mb-2 rounded-lg max-w-[60%] flex relative" id="klien">
                            <p>Okyy dokeyy</p>
                            <p class="float-right ml-1 text-xs">08.34</p>
                            <span class="self-center -right-6 absolute ">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512" id="sampahh">
                                    <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/>
                                </svg>
                            </span> 
                        </li>
                    </ul>
                </div>
                <form class="bg-slate-600 rounded-b-md w-full py-3 px-2">
                    <div class="bg-white flex w-2/3 mx-auto">
                        <input type="text" name="balas" id="balas" class="h-10 w-full px-6 rounded-md outline-none">
                        <button type="submit" class="px-2 py-1 w-32 hover:bg-slate-200 text-lg">balas</button>
                    </div>
                </form>
                <button class="py-2 px-2 mt-3 rounded-md ml-auto bg-[#ff950b] hover:bg-[#e48100] font-semibold text-white self-center">
                    kembali
                </button>
            </div>
        </section>
    </main>
<?= $this->endSection()?>
