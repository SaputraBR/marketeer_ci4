<head>
    <?= $this->include('layout/store/head')?>
    <style>
        #market {
            background-color: #ff4800;
            float: left;
            align-self: flex-start;
            color: #fff;
        }

        #klien {
            background-color: rgb(243, 244, 246);
            align-self: flex-end;
            float: right;
        }
    </style>
</head>

<body class="bg-gray-300">
    <?= $this->include('layout/store/navbar')?>

    <main class="w-full sm:w-10/12 h-auto sm:my-4 md:w-4/5 mx-auto sm:px-2 sm:py-3 md:px-12 md:py-4">
        <section class="w-full h-auto rounded-lg bg-gray-50">
            <div class="py-4 px-2 sm:py-6 sm:px-14">
                <div class="flex mb-3">
                    <div class="w-14 h-14">
                        <img src="/img/3.png" alt="" class="h-auto w-full rounded-full object-scale-down">
                    </div>
                    <h1 class="font-bold text-xl sm:text-2xl self-center ml-2">Marketeer</h1>

                </div>
                <div class="w-full h-2/3 bg-slate-300 rounded-t-md overflow-y-scroll relative p-4">
                    <ul class="flex flex-col">
                        <li class="mx-auto bg-slate-100 rounded-md px-2 py-1 text-sm mb-2">06/01/23</li>
                        <li class="p-2 mb-2 rounded-lg max-w-[60%] inline-block text-sm sm:text-base relative" id="market">
                            <p>Segera lakukan pembayaran untuk pesanan FK23010603 sebelum 14.00 06/01/23</p>
                            <p class="float-right text-xs">08.12</p>
                        </li>
                        <li class="p-2 mb-2 rounded-lg max-w-[60%] inline-block text-sm sm:text-base relative" id="market">
                            <p>Pesanan FK23010603 sedang dikemas dan akan diserahkan ke jasa pengiriman</p>
                            <p class="float-right text-xs">10.33</p>
                        </li>
                        <li class="p-2 mb-2 rounded-lg max-w-[60%] inline-block text-sm sm:text-base relative" id="klien">
                            <p>Okyy dokeyy</p>
                            <p class="float-left text-xs">10.33</p>
                        </li>
                    </ul>
                    <ul class="flex flex-col">
                        <li class="mx-auto bg-slate-100 rounded-md px-2 py-1 text-sm mb-2">07/01/23</li>
                        <li class="p-2 mb-2 rounded-lg max-w-[60%] inline-block text-sm sm:text-base relative" id="market">
                            <p>P</p>
                            <p class="float-right text-xs">08.12</p>
                        </li>
                        <li class="p-2 mb-2 rounded-lg max-w-[60%] inline-block text-sm sm:text-base relative" id="klien">
                            <p>P</p>
                            <p class="float-left text-xs">10.33</p>
                        </li>
                    </ul>
                </div>
                <div class="bg-slate-600 rounded-b-md w-full py-3 px-2">
                    <div class="bg-white flex w-2/3 mx-auto">
                        <input type="text" name="balas" id="balas" class="h-10 w-full px-6 rounded-md outline-none">
                        <button class="px-2 py-1 w-32 hover:bg-slate-200 text-lg">balas</button>
                    </div>
                </div>
                <button class="py-2 px-2 mt-6 rounded-md ml-auto bg-blue-700 hover:bg-blue-800 font-semibold text-white self-center">
                    kembali
                </button>
            </div>
        </section>
    </main>

</body>