<?= $this->extend('layout/store/market')?>
<?= $this->section('style')?>
    <style>
        .hiden {
            display: none !important;
        }
        
        #centang {
            fill: #fd4800;
        }
        
        .navbio-aktif {
            text-decoration-line: underline;
            text-decoration-color: #2200ff;
            text-decoration-thickness: 4px;
            text-underline-offset: 4px;
        }

        .alamat-off {
            border-color: #64748b;
            border-width: 1px;
        }

        .alamat-aktif {
            background-color: rgba(255, 72, 0, 0.04);
            border-color: #ff4800;
            border-width: 1px;
        }

        .alamat-aktif::before{
            content: "";
            border-color: #ff4800;
            border-width: 12px 12px 20px 0px;
            border-top-left-radius: 0;
            border-top-right-radius: 0.3rem;
            border-bottom-right-radius: 0.3rem;
            border-bottom-left-radius: 0;
            position: absolute;
            left: 0;
            top: 15%;
            color: #2658e2;
        }

        .ubah-aktif{
            background-color: #dc3e00;
        }

        #sampahh:hover{
            fill: #ff4800;
            color: #ff0000;
        }

        #foto {
            width: 0.1px;
            height: 0.1px;
            opacity: 0;
            overflow: hidden;
            position: absolute;
            z-index: -1;
        }
    </style>
<?= $this->endSection()?>

<?= $this->section('content')?>
    <main class="flex w-auto sm:grid grid-cols-3 mt-4 sm:mt-10">
        <div class="col-span-1 w-auto mx-1">
            <div class="w-full sticky top-28 sm:top-32">
                <ul class="sm:w-2/3 bg-white mx-auto rounded-sm border-2 border-slate-300 overflow-hidden font-semibold sm:text-base text-sm" id="main-navbar">
                    <li class="py-2 sm:px-4 hover:bg-slate-100 hover:cursor-pointer flex">
                        <p class="hidden sm:block">Data Pribadi</p>
                        <span class="sm:hidden mx-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512">
                                <path d="M40 48C26.7 48 16 58.7 16 72v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V72c0-13.3-10.7-24-24-24H40zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM16 232v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V232c0-13.3-10.7-24-24-24H40c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V392c0-13.3-10.7-24-24-24H40z"/>
                            </svg>
                        </span>
                    </li>
                    <li class="py-2 sm:px-4 hover:bg-slate-100 hover:cursor-pointer flex">
                        <p class="hidden sm:block">Pesan</p>
                        <span class="sm:hidden mx-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512">
                                <path d="M64 0C28.7 0 0 28.7 0 64V352c0 35.3 28.7 64 64 64h96v80c0 6.1 3.4 11.6 8.8 14.3s11.9 2.1 16.8-1.5L309.3 416H448c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H64z"/>
                            </svg>
                        </span>
                    </li>                
                    <li class="py-2 sm:px-4 hover:bg-slate-100 hover:cursor-pointer flex">
                        <p class="hidden sm:block">Menunggu Pembayaran</p>
                        <span class="sm:hidden mx-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="20" viewBox="0 0 640 512" style="fill: #eb0000">
                                <path d="M535 41c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l64 64c4.5 4.5 7 10.6 7 17s-2.5 12.5-7 17l-64 64c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l23-23L384 112c-13.3 0-24-10.7-24-24s10.7-24 24-24l174.1 0L535 41zM105 377l-23 23L256 400c13.3 0 24 10.7 24 24s-10.7 24-24 24L81.9 448l23 23c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L7 441c-4.5-4.5-7-10.6-7-17s2.5-12.5 7-17l64-64c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9zM96 64H337.9c-3.7 7.2-5.9 15.3-5.9 24c0 28.7 23.3 52 52 52l117.4 0c-4 17 .6 35.5 13.8 48.8c20.3 20.3 53.2 20.3 73.5 0L608 169.5V384c0 35.3-28.7 64-64 64H302.1c3.7-7.2 5.9-15.3 5.9-24c0-28.7-23.3-52-52-52l-117.4 0c4-17-.6-35.5-13.8-48.8c-20.3-20.3-53.2-20.3-73.5 0L32 342.5V128c0-35.3 28.7-64 64-64zm64 64H96v64c35.3 0 64-28.7 64-64zM544 320c-35.3 0-64 28.7-64 64h64V320zM320 352a96 96 0 1 0 0-192 96 96 0 1 0 0 192z"/>
                            </svg>
                        </span>
                        </li>
                    <li class="py-2 sm:px-4 hover:bg-slate-100 hover:cursor-pointer flex">
                        <p class="hidden sm:block">Riwayat Pembelian</p>
                        <span class="sm:hidden mx-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512">
                                <path d="M160 112c0-35.3 28.7-64 64-64s64 28.7 64 64v48H160V112zm-48 48H48c-26.5 0-48 21.5-48 48V416c0 53 43 96 96 96H352c53 0 96-43 96-96V208c0-26.5-21.5-48-48-48H336V112C336 50.1 285.9 0 224 0S112 50.1 112 112v48zm24 48a24 24 0 1 1 0 48 24 24 0 1 1 0-48zm152 24a24 24 0 1 1 48 0 24 24 0 1 1 -48 0z"/>
                            </svg>
                        </span>
                    </li>
                </ul>
                <div class="mt-4 sm:w-2/3 bg-white sm:mx-auto rounded-sm border-2 border-slate-300 hover:bg-slate-100 hover:cursor-pointer flex py-2 sm:py-0 px-2 sm:px-0">
                    <a href="/logout" class="flex w-full">
                        <div class="py-2 px-4 font-semibold hidden sm:block">Log Out</div>
                        <span class="mx-auto sm:ml-auto sm:mr-4 self-center">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512" style="fill: #ff4800">
                                <path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"/>
                            </svg>
                        </span>
                    </a>
                </div>
                
            </div>
        </div>
        <div class="col-span-2 w-auto sm:mr-4" id="main-section">
            <section class="w-auto sm:w-full h-auto bg-white border-2 border-slate-300 relative pb-2 sm:pb-8" id="data-pribadi">
                <div class="flex bg-gray-300 divide-x-2 divide-gray-100" id="navbar-bio">
                    <span class="px-6 py-2 self-center text-sm sm:text-base hover:cursor-pointer nav-bio navbio-aktif">Biodata</span>
                    <span class="px-6 py-2 self-center text-sm sm:text-base hover:cursor-pointer nav-bio">Alamat</span>
                    <span class="px-6 py-2 self-center text-sm sm:text-base hover:cursor-pointer nav-bio">Keamanan</span>
                </div>

                    <div class="flex relative h-auto py-4 w-full absolute">
                        <div class="w-full h-auto sm:px-8 shrink-0 md:flex" id="biodata-diri">
                            <div class="w-auto md:w-1/3 h-36 sm:h-48 relative sm:text-base text-sm">
                                <p class="ml-2 sm:ml-4 mb-1 font-semibold">Photo Profil</p>
                                <div class="w-full sm:w-auto flex justify-center md:block">
                                    <img src="/img/Johnny_Depp.jpg" id="PP" class="rounded-full border-2 border-slate-800 h-24 w-24 sm:w-36 sm:h-36 md:h-full md:w-48 object-cover mt-2" alt="">
                                    <div class="absolute bottom-0">
                                        <button class="dropbn flex px-2 sm:px-4 py-1 rounded-sm font-semibold bg-amber-300 shadow-xl hover:bg-amber-400" id="button-down" onclick="myFunctions()">
                                            <i class="self-center fa-solid fa-pencil mr-1"></i>
                                            <p>edit</p>    
                                        </button>
                                        <div class="absolute w-full mt-1 bg-slate-200 rounded-sm drop-content hidden" id="drop-content">
                                            <label for="foto" class="flex justify-center py-1 font-semibold hover:bg-slate-300">change</label>
                                            <input type="file" name="foto" id="foto">
                                            <button class="w-full py-1 font-semibold hover:bg-slate-300">delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-auto ml-2 sm:text-base text-sm px-2 sm:px-0 mt-3 sm:mt-0">
                            <?php foreach($client as $user) :?>
                                <h1 class="font-semibold">Ubah Data Pribadi</h1>
                                <div class="grid grid-cols-12 gap-2 mt-2">
                                    <p class="col-span-4">Nama</p>
                                    <p class="col-span-1 sm:ml-auto">:</p>
                                    <p class="col-span-7"><?= $user["nama"]?></p>
                                </div>
                                <div class="grid grid-cols-12 gap-2">
                                    <p class="col-span-4">Tanggal Lahir</p>
                                    <p class="col-span-1 sm:ml-auto">:</p>
                                    <p class="col-span-7"><?= $user["lahir"]?></p>
                                </div>
                                <div class="grid grid-cols-12 gap-2">
                                    <p class="col-span-4">Jenis Kelamin</p>
                                    <p class="col-span-1 sm:ml-auto">:</p>
                                    <p class="col-span-7"><?= $user["kelamin"]?></p>
                                </div>
                                <div class="grid grid-cols-12 gap-2 mt-2">
                                    <p class="col-span-4">Email</p>
                                    <p class="col-span-1 sm:ml-auto">:</p>
                                    <p class="col-span-7"><?= $user["email"]?></p>
                                </div>
                                <div class="grid grid-cols-12 gap-2">
                                    <p class="col-span-4">No Telepon</p>
                                    <p class="col-span-1 sm:ml-auto">:</p>
                                    <p class="col-span-7"><?= $user["hp"]?></p>
                                </div>
                                <div class="mt-4 sm:mt-8 flex">
                                    <button class="px-4 py-2 text-white font-semibold bg-[#ff4800] hover:bg-[#dc3e00]">change</button>
                                </div>
                            <?php endforeach;?>
                            </div>
                        </div>

                <?php foreach($client as $user) :?>
                        <div class="w-full h-auto bg-white px-4 sm:px-0 shrink-0 hidden" id="data-alamat">
                            <?php foreach($user["alamat"] as $id => $address) :?>    
                                <div class="w-auto sm:w-2/3 h-auto mx-auto mt-4 relative rounded-lg hover:cursor-pointer border border-slate-600 address">
                                    <div class="px-6 sm:px-8 py-4 relative sm:text-base text-sm alamats">
                                        <span class="right-0 mr-4 absolute check-corner hidden">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512" class="w-7 h-7" id="centang">
                                                <path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/>
                                            </svg>
                                        </span>
                                        <p><?= $address["tempat"]?></p>
                                        <h1><?= $user["nama"]?></h1>
                                        <p><?= $address["alamat"] ?></p>
                                        <p><?= $address["phone"] ?></p>
                                    </div>
                                </div>
                            <?php endforeach;?>
                        </div>

                        <div class="w-full h-auto flex bg-white shrink-0 hidden" id="keamanan">
                            <div class="space-y-2 pl-4 self-center" id="tombol-ubah">
                                <button class="button-ubah w-14 sm:w-16 md:w-32 lg:w-36 py-2 text-xs sm:text-sm md:text-base bg-[#ff4800] hover:bg-[#dc3e00] text-white font-semibold block ubah-aktif">Ubah Password</button>
                                <button class="button-ubah w-14 sm:w-16 md:w-32 lg:w-36 py-2 text-xs sm:text-sm md:text-base bg-[#ff4800] hover:bg-[#dc3e00] text-white font-semibold block">Ubah Email</button>
                                <button class="button-ubah w-14 sm:w-16 md:w-32 lg:w-36 py-2 text-xs sm:text-sm md:text-base bg-[#ff4800] hover:bg-[#dc3e00] text-white font-semibold block">Ubah No Telp</button>
                            </div>
                            <div class="w-full sm:ml-4 lg:ml-10 p-4">
                                <form action="" class="relative" id="form-pass">
                                    <h1 class="text-lg font-semibold mb-3">Ubah Password</h1>
                                    <div class="md:grid grid-cols-12">
                                        <label for="nama" class="block self-center col-span-3 mr-3 text-sm sm:text-base">Password Lama</label>
                                        <input type="password" name="nama" class="sm:col-span-9 w-40 sm:w-auto m-1 mb-2 rounded-md px-2 py-1 bg-gray-100 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none">
                                    </div>
                                    <div class="md:grid grid-cols-12">
                                        <label for="nama" class="block self-center col-span-3 mr-3 text-sm sm:text-base">Password Baru</label>
                                        <input type="password" name="nama" class="sm:col-span-9 w-40 sm:w-auto m-1 mb-2 rounded-md px-2 py-1 bg-gray-100 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none">
                                    </div>
                                    <div class="md:grid grid-cols-12">
                                        <label for="nama" class="block self-center col-span-3 mr-3 text-sm sm:text-base">Verifikasi Password</label>
                                        <input type="password" name="nama" class="sm:col-span-9 w-40 sm:w-auto m-1 mb-2 rounded-md px-2 py-1 bg-gray-100 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none">
                                    </div>
            
                                    <button type="submit" class="absolute right-0 rounded-md mt-2 px-3 py-1 bg-[#2658e2] hover:bg-[#1d4ed8]">
                                    <p class="text-white">Ganti</p>
                                    </button>
                                </form>

                                <form action="" class="relative hidden" id="form-email">
                                    <h1 class="text-lg font-semibold mb-3">Ubah Email</h1>
                                    <div class="md:grid grid-cols-12 mb-2">
                                        <p class="self-center col-span-3 mr-3">Email</p>
                                        <p class="block col-span-9 w-auto m-1"><?= $user["email"]?></p>
                                    </div>
                                    <div class="md:grid grid-cols-12">
                                        <label for="nama" class="self-center col-span-3 mr-3">Email Baru</label>
                                        <input type="password" name="nama" class="block col-span-9 w-40 sm:w-auto m-1 rounded-md px-2 py-1 bg-gray-100 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none">
                                    </div>
            
                                    <button type="submit" class="absolute right-0 rounded-md mt-2 px-3 py-1 bg-[#2658e2] hover:bg-[#1d4ed8]">
                                    <p class="text-white">Ganti</p>
                                    </button>
                                </form>

                                <form action="" class="relative hidden" id="form-notel">
                                    <h1 class="text-lg font-semibold mb-3">Ubah No Telepon</h1>
                                    <div class="md:grid grid-cols-12 mb-2">
                                        <p class="self-center col-span-3 mr-3">No Telp</p>
                                        <p class="block col-span-9 w-auto m-1"><?= $user["hp"] ?></p>
                                    </div>
                                    <div class="md:grid grid-cols-12">
                                        <label for="nama" class="self-center col-span-3 mr-3">No Telp Baru</label>
                                        <input type="password" name="nama" class="block col-span-9 w-40 sm:w-auto m-1 rounded-md px-2 py-1 bg-gray-100 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none">
                                    </div>
            
                                    <button type="submit" class="absolute right-0 rounded-md mt-2 px-3 py-1 bg-[#2658e2] hover:bg-[#1d4ed8]">
                                    <p class="text-white">Ganti</p>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
            </section>

            <section class="w-full h-auto bg-white border-2 border-slate-300 relative mt-10" id="pesan">
                <div class="flex bg-gray-300 px-4 py-1">
                    <p class="font-semibold text-xl sm:text-2xl">Pesan</p>
                </div> 
                <div class="w-full h-auto pr-10 pl-2 sm:px-4 pt-4 pb-2">
                    <a href="/akun/pesan">
                        <div class="w-auto sm:w-2/3 h-auto p-2 mb-2 flex relative bg-gray-200 rounded-sm hover:cursor-pointer">
                            <div class="w-16 h-16">
                                <img src="/img/3.png" alt="" class="h-auto w-full rounded-full object-scale-down">
                            </div>
                            <div class="w-auto ml-4">
                                <p class="font-semibold text-lg sm:text-xl">Marketeer</p>
                                <p class="text-xs sm:text-base">Pesanan FK23010603 sedang dikemas dan akan diserahkan...</p>
                            </div>
                            <span class="self-center absolute -right-6">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512" id="sampahh">
                                    <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/>
                                </svg>
                            </span>                    
                        </div>
                    </a>
                    <a href="/akun/pesan">                        
                        <div class="w-auto sm:w-2/3 h-auto p-2 mb-2 flex relative bg-gray-200 rounded-sm hover:cursor-pointer">
                            <div class="w-16 h-16">
                                <img src="/img/3.png" alt="" class="h-auto w-full rounded-full object-scale-down">
                            </div>
                            <div class="w-auto ml-4">
                                <p class="font-semibold text-lg sm:text-xl">Marketeer</p>
                                <p class="text-xs sm:text-base">Segera lakukan pembayaran untuk pesanan FK23010603...</p>
                            </div>
                            <span class="self-center absolute -right-6">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512" id="sampahh">
                                    <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/>
                                </svg>
                            </span>                    
                        </div>
                    </a>
                </div>
            </section>

            <section class="w-full h-auto bg-white border-2 border-slate-300 relative mt-10" id="menunggu-pembayaran">
                <div class="flex bg-gray-300 px-4 py-1">
                    <p class="font-semibold text-xl sm:text-2xl">Menunggu Pembayaran</p>
                </div> 
                <div class="space-y-4 p-4">
                    <div class="w-auto sm:w-2/3 bg-gray-300 rounded-sm pb-2">
                        <a href="/akun/bayar" class="cursor-default">
                            <div class="flex px-4 py-2 font-semibold">
                                <p class="text-xs sm:text-base">31 Maret 2023</p>
                                <div class="text-xs sm:text-base ml-auto flex">
                                    <p class="mr-1">bayar sebelum</p>
                                    <div class="text-[#ff0000] px-1 rounded-md"> Apr 1, 13:45</div>
                                </div>
                            </div>
                            <div class="px-4 py-3 border-t border-white">
                                <div class="self-center flex">                                
                                    <p class="font-semibold text-base sm:text-xl">BRIVA</p>
                                    <span class="font-semibold text-base sm:text-xl ml-2">80777087813796688</span>
                                </div>
                                <div class="flex mt-1">
                                    <h2 class="sm:font-semibold text-sm sm:text-base">(HSS) Kelly Sellier 28 Nata and Craie Epsom Gold <span class="ml-1">X 1</span></h2>
                                </div>                            
                            </div>
                            <div class="px-4 pt-2 border-t border-white flex">
                                <div>
                                    <p class="text-sm sm:text-base">Total Harga</p>                            
                                    <p class="text-sm sm:text-lg font-bold self-center">Rp388,228,938</span></p>
                                </div>
                                <div class="ml-auto self-center">
                                    <button class="text-sm sm:text-base ml-auto flex bg-[#ff9c9c] hover:bg-[#f78282] px-2 py-1 rounded-md text-[#ce0000] font-semibold">
                                        Batalkan
                                    </button>
                                </div>
                            </div>  
                        </a>
                    </div>
                </div>                
            </section>

            <section class="w-full h-auto bg-white border-2 border-slate-300 relative mt-10" id="riwayat-pembelian">
                <div class="flex bg-gray-300 px-4 py-1">
                    <p class="font-semibold text-xl sm:text-2xl">Riwayat Pembelian</p>
                </div> 
                <div class="p-4 space-y-4">
                    <div class="w-auto sm:w-2/3 bg-gray-300 rounded-sm">
                        <div class="flex px-4 py-1 font-semibold border-b border-white">
                            <p class="text-xs sm:text-base">12 Mei 2023</p>
                            <div class="ml-auto flex bg-[#74ff9b] px-1 rounded-md">
                                <span class="self-center fill-[#00a22e] mr-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                        <path d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z"/>
                                    </svg>
                                </span>
                                <p class="text-[#00a22e] text-xs sm:text-sm self-center">Berhasil</p>
                            </div>
                        </div>
                        <div class="flex px-4 py-2">
                            <div class="self-center">                                
                                <div class="w-10 h-10 sm:w-20 sm:h-20 border border-sky-200"> 
                                    <img src="/img/nike-jordan.jpg" alt="" class="w-full h-full object-cover">
                                </div>
                            </div>
                            <div class="ml-2">
                                <h2 class="sm:font-semibold text-sm sm:text-xl">Air Jordan 7 Retro SE Men's Shoes 40-47</h2>
                                <div class="flex">
                                    <p class="text-sm sm:text-base font-semibold mr-1">Rp3,400,000 X 1 item</p>      
                                </div>
                            </div>                            
                        </div>
                        <div class="flex px-4 py-2">
                            <div class="self-center">                                
                                <div class="w-10 h-10 sm:w-20 sm:h-20 border border-sky-200"> 
                                    <img src="/img/ss21710829165003_1x.jpg" alt="" class="w-full h-full object-cover">
                                </div>
                            </div>
                            <div class="ml-2">
                                <h2 class="sm:font-semibold text-sm sm:text-xl">Polo Bear by Ralph Lauren M/L/XL/XXL</h2>
                                <div class="flex">
                                    <p class="text-sm sm:text-base font-semibold mr-1">Rp13,020,000 X 1 item</p>      
                                </div>
                            </div>                            
                        </div>
                        <div class="flex px-4 py-2">
                            <div class="self-center">                                
                                <div class="w-10 h-10 sm:w-20 sm:h-20 border border-sky-200"> 
                                    <img src="/img/Google-Pixel-7-Pro.jpg" alt="" class="w-full h-full object-cover">
                                </div>
                            </div>
                            <div class="ml-2">
                                <h2 class="sm:font-semibold text-sm sm:text-xl">Google Pixel 7 Pro 12/512GB</h2>
                                <div class="flex">
                                    <p class="text-sm sm:text-base font-semibold mr-1">Rp9,119,999 X 1 item</p>      
                                </div>
                            </div>                            
                        </div>
                        <div class="px-4 py-1 flex border-t border-white">
                            <div class="block">
                                <p class="text-sm sm:text-base">Total Harga</p>                            
                                <p class="text-sm sm:text-lg font-bold self-center">Rp25,539,999</span></p>
                            </div>
                            <div class="ml-auto self-center">
                                <button class="text-sm sm:text-base px-2 py-1 bg-amber-300 hover:bg-amber-400">Beri Penilaian</button>
                            </div>
                        </div>                 
                    </div>

                    <div class="w-auto sm:w-2/3 bg-gray-300 rounded-sm">
                        <div class="flex px-4 py-2 font-semibold border-b border-white">
                            <p class="text-xs sm:text-base">02 April 2023</p>
                            <div class="ml-auto flex bg-[#ff9c9c] px-1 rounded-md">
                                <span class="self-center fill-[#ce0000] mr-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512">
                                        <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/>
                                    </svg>
                                </span>
                                <p class="text-[#ce0000] text-xs sm:text-sm self-center">Gagal</p>
                            </div>
                        </div>
                        <div class="flex px-4 py-2">
                            <div class="self-center">                                
                                <div class="w-10 h-10 sm:w-20 sm:h-20 border border-sky-200"> 
                                    <img src="/img/Hermes-Kelly.jpg" alt="" class="w-full h-full object-cover">
                                </div>
                            </div>
                            <div class="ml-2">
                                <h2 class="sm:font-semibold text-sm sm:text-xl">(HSS) Kelly Sellier 28 Nata and Craie Epsom Gold</h2>
                                <div class="flex">
                                    <p class="text-sm sm:text-base font-semibold mr-1">Rp388,228,938 X 1 item</p>      
                                </div>
                            </div>                            
                        </div>
                        <div class="px-4 py-1 flex border-t border-white">
                            <div class="block">
                                <p class="text-sm sm:text-base">Total Harga</p>                            
                                <p class="text-sm sm:text-lg font-bold self-center">Rp388,228,938</span></p>
                            </div>
                            <div class="ml-auto self-center hidden">
                                <button class="px-2 py-1 bg-amber-300 hover:bg-amber-400">Beri Penilaian</button>
                            </div>
                        </div>                 
                    </div>
                </div>                
            </section>
        </div>
    </main>
<?= $this->endSection()?>

<?= $this->section('script')?>
    <script>       
        function myFunctions() {
            var content     = document.querySelectorAll(".drop-content"); 
            var button      = document.querySelectorAll(".dropbn");

            content[0].classList.toggle("hidden");

            window.onclick = function(e){
                if(!button[0].contains(e.target)){
                    for(var i = 0; i < content.length; i++){
                        if (!content[i].classList.contains("hidden")){
                            content[i].classList.add("hidden")
                        }
                    }
                }    
            }
        }

        akun()
    </script>
<?= $this->endSection()?>