<html lang="en">
<?= $this->extend('layout/store/market')?>

<?= $this->section('content')?>
    
    <main class="w-full bg-gray-100">
        <div class="sm:grid sm:grid-cols-4">
            <div class="col-span-1 content-center px-4 md:px-6 mt-8 relative">
                <div class="justify-items-center sm:justify-items-start grid grid-cols-4 sm:grid-cols-none border-2 border-sky-300 divide-x sm:divide-x-0 sm:divide-y divide-gray-400 overflow-hidden bg-white top-28 sticky" id="navigation">
                    <div class="px-3 py-2 sm:w-full font-semibold hover:bg-slate-200" id="aboutBtn">About</div>  
                    <div class="px-3 py-2 sm:w-full font-semibold hover:bg-slate-200" id="termBtn">Terms of Use</div>  
                    <div class="px-3 py-2 sm:w-full font-semibold hover:bg-slate-200" id="privacyBtn">Privacy & Security</div>  
                    <div class="px-3 py-2 sm:w-full font-semibold hover:bg-slate-200" id="helpBtn">Help & Contact</div>  
                </div>
            </div>
            <div class="col-span-3 mt-8 pr-2 md:pr-14 px-4 md:px-0 sm:h-full">
                <div class="bg-white border-2 border-sky-300 px-6 py-4">
                    <div id="about">
                        <p class="font-bold text-lg sm:text-xl">About</p>

                        <p class="mb-1 text-sm sm:text-base">At MarketEer, we create pathways to connect millions of sellers and buyers in more than 190 markets around the world. Our technology empowers our customers, providing everyone the opportunity to grow and thrive — no matter who they are or where they are in the world. And the ripple effect of our work creates waves of change for our customers, our company, our communities and our planet.</p>

                        <p class="text-sm sm:text-base">We strive to build community and connections through ecommerce. As part of this journey, we make selling and buying equitable and attainable for all – with a goal to empower everyone, everywhere to grow, thrive and succeed on our global marketplace while making meaningful choices for their purchases and businesses.</p>
                    </div>

                    <div class="mt-6" id="term">
                        <p class="font-bold text-lg sm:text-xl">Terms of Use</p>
                        <p class="mb-1 text-sm sm:text-base">Last updated: September 14, 2022</p>

                        <p class="mb-1 text-sm sm:text-base">Welcome to MarketEer.com. MarketEer.com Services LLC and/or its affiliates ("MarketEer") provide website features and other products and services to you when you visit or shop at MarketEer.com, use MarketEer products or services, use MarketEer applications for mobile, or use software provided by MarketEer in connection with any of the foregoing (collectively, "MarketEer Services"). By using the MarketEer Services, you agree, on behalf of yourself and all members of your household and others who use any Service under your account, to the following conditions.</p>
        
                        <p class="text-sm sm:text-base">Please read these conditions carefully.</p>
                        <p class="text-sm sm:text-base">We offer a wide range of MarketEer Services, and sometimes additional terms may apply. When you use an MarketEer Service (for example, Your Profile, Gift Cards, MarketEer Video, Your Media Library, MarketEer devices, or MarketEer applications) you also will be subject to the guidelines, terms and agreements applicable to that MarketEer Service ("Service Terms"). If these Conditions of Use are inconsistent with the Service Terms, those Service Terms will control.</p>
                    </div>                

                    <div class="mt-6" id="privacy">
                       <p class="font-bold text-lg sm:text-xl">Privacy & Security</p>

                       <ol class="list-decimal list-inside mt-1 text-sm sm:text-base">
                           <p>Untuk menjaga keamanan akun MarketEer kamu dan mencegah penipuan oleh pihak yang tidak bertanggung jawab, pastikan Anda memahami panduan keamanan  berikut:</p>
                       <li class="font-semibold mt-1">Rahasiakan Kode atau PIN</li>
                       <p>Kode verifikasi atau kode one-time password (OTP) adalah informasi rahasia, jangan sampai kamu terpancing untuk memberikannya ke pihak manapun termasuk kepada yang mengaku sebagai karyawan MarketEer, ya.</p>
                       <li class="font-semibold mt-1">Transfer dana sesuai dengan nominal transaksi</li>
                       <p>Saat melakukan pembayaran, lakukan transfer dana hanya ke rekening resmi MarketEer sesuai dengan nominal total tagihan di halaman pembayaran. Jangan melakukan transfer dana dengan nominal yang berbeda atau melakukan transfer ke rekening Penjual secara langsung.</p>
                       <li class="font-semibold mt-1">Rahasiakan data pribadi</li>
                       <p>Hindari juga untuk memberitahukan data pribadi kamu serta data penting, seperti bukti pembayaran, ke Penjual maupun ke pihak yang mengaku sebagai karyawan MarketEer. Simpan bukti pembayaran kamu sampai transaksi selesai</p>
                       <li class="font-semibold mt-1">Waspada akun penipuan</li>
                       <p>Mohon berhati-hati apabila Anda mendapatkan pesan dari seseorang untuk mengakses suatu link tertentu. Website resmi MarketEer hanya ada di <a href="/" class="text-sky-600">https://www.marketeer.com</a>.</p>
                       <li class="font-semibold mt-1">Ganti password</li>
                       <p>Lakukan penggantian password akun MarketEer kamu secara berkala. Usahakan jangan menggunakan password yang sama dengan akun Anda yang lain, ya. Kamu juga bisa mengatur password dengan menggunakan simbol dan minimal mencapai 8 karakter. Hindari penggunaan nama pribadi atau username. Apabila kamu lupa kata sandi</p>
                       <li class="font-semibold mt-1">Waspada informasi hoax</li>
                       <p>MarketEer akan menyampaikan informasi tentang promo, undian, dan info lain melalui media resmi seperti website, blog, Twitter, Instagram, dan Facebook yang terverifikasi. Users diharapkan untuk berhati-hati apabila mendapatkan informasi yang mengatasnamakan MarketEer di luar media resmi.</p>
                        </ol>
                    </div>

                    <div class="mt-6" id="help">
                        <h1 class="text-lg sm:text-xl font-bold mb-4">Any question or suggestion</h1>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-0 md:divide-x divide-gray-400">
                            <div class="col-span-1">
                                <span class="flex justify-center">
                                    <i class="fa-brands fa-whatsapp fa-3x text-green-600"></i>
                                </span>
                                <p class="flex justify-center font-semibold text-md lg:text-xl mt-3">0847-1455-7698</p>
                            </div>
                            <div class="col-span-1">
                                <span class="flex justify-center">
                                    <i class="fa-solid fa-envelope fa-3x text-[#e40000]"></i>
                                </span>
                                <p class="flex justify-center font-semibold text-md lg:text-xl mt-3">help@marketeer.com</p>
                            </div>
                            <div class="col-span-1">
                                <span class="flex justify-center">
                                    <i class="fa-solid fa-phone fa-3x"></i>
                                </span>
                                <p class="flex justify-center font-semibold text-md lg:text-xl mt-3">0211 15498635</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        
    </main>
<?= $this->endSection()?>

<?= $this->section('script') ?>
    <script>
        tou()
    </script>
<?= $this->endSection('') ?>
</html>