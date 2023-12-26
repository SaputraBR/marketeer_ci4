<?= $this->extend('layout/admin/admin')?>
    <?= $this->section('style')?>
        <style>
            .show {
                display: block;
                
            }
        </style>
    <?= $this->endSection()?>

    <?= $this->section('content')?>
        <main class="w-10/12 md:w-4/5 ml-auto px-2 py-3 md:px-12 md:py-4">
            <section class="ml-6">
                <h1 class="font-bold text-3xl text-slate-600 border-b border-slate-300 pb-1 max-w-4xl">Profile</h1>
                <div class="flex mt-6 max-w-4xl">
                    <div class="w-3/4">
                        <form action="">
                            <label for="nama-profil" class="font-semibold">Nama</label>
                            <input type="text" name="nama-profil" class="block w-3/4 mt-1 mb-6 rounded-md px-2 py-1 bg-gray-100 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none" value="Roberto Di Gianncolo">

                            <label for="email-profil" class="font-semibold">Email</label>
                            <input type="text" name="email-profil" class="block w-3/4 mt-1 mb-6 rounded-md px-2 py-1 bg-gray-100 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none" value="robertoDG@gmail.com">

                            <button type="submit" class="mt-2 p-2 rounded-lg bg-[#fa8c00] hover:bg-[#fda127]">
                            <p class="font-semibold text-slate-100">update profile</p>
                            </button>
                        </form>
                    </div>
                    <div class="">
                        <div class="w-72 h-72 ml-8 relative">
                            <p class="ml-auto font-semibold">Profil Picture</p>
                            <img src="/img/pisang.jpg" id="PP" class="rounded-full border-2 border-slate-800 h-full w-full object-scale-down" alt="">
                            <div class="absolute bottom-0 ml-4">
                                <button class="dropbtn flex px-4 py-1 rounded-sm font-semibold bg-amber-300 shadow-xl hover:bg-amber-400" id="button-down" onclick="myFunction()">
                                    <i class="self-center fa-solid fa-pencil mr-1"></i>
                                    <p>edit</p>    
                                </button>
                                <div class="absolute mt-1 bg-slate-200 rounded-sm drop-content hidden" id="drop-content">
                                    <button class="w-full py-1 font-semibold hover:bg-slate-300">change</button>
                                    <button class="w-full py-1 font-semibold hover:bg-slate-300">delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="ml-6 mt-24">
                <h1 class="font-bold text-3xl text-slate-600 border-b border-slate-300 pb-1 max-w-4xl">Password & Security</h1>
                <div class="w-3/4 mt-6">
                    <h2 class="font-semibold text-xl mb-3">Change Password</h2>
                    <form action="">
                        <label for="op" class="font-semibold">Old Password</label>
                        <div class="flex relative mb-6 w-3/4" id="container-input">
                            <button class="absolute self-center right-0 mr-2" id="fa-eye" type="button"">
                                <i class="fa-solid fa-eye"></i>
                            </button>
                            <button class="absolute self-center right-0 mr-2" id="fa-eye-slash" type="button" hidden>
                                <i class="fa-solid fa-eye-slash"></i>
                            </button>
                            <input type="password" name="old-pass" id="password" class="block w-full mt-1 rounded-md px-2 py-1 bg-gray-100 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none">
                        </div>

                        <label for="np" class="font-semibold">New Password</label>
                        <div class="flex relative mb-6 w-3/4" id="container-input">
                            <button class="absolute self-center right-0 mr-2" id="fa-eye" type="button">
                                <i class="fa-solid fa-eye"></i>
                            </button>
                            <button class="absolute self-center right-0 mr-2" id="fa-eye-slash" type="button" hidden>
                                <i class="fa-solid fa-eye-slash"></i>
                            </button>
                            <input type="password" name="new-pass" id="passw" class="block w-full mt-1 rounded-md px-2 py-1 bg-gray-100 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none">
                        </div>                    

                        <label for="cnp" class="font-semibold">Confirm New Password</label>
                        <div class="flex relative mb-6 w-3/4" id="container-input">
                            <button class="absolute self-center right-0 mr-2" id="fa-eye" type="button">
                                <i class="fa-solid fa-eye"></i>
                            </button>
                            <button class="absolute self-center right-0 mr-2" id="fa-eye-slash" type="button" hidden>
                                <i class="fa-solid fa-eye-slash"></i>
                            </button>
                            <input type="password" name="confirm-newpass" id="pass" class="block w-full mt-1 rounded-md px-2 py-1 bg-gray-100 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none">
                        </div>                    

                        <button type="submit" class="mt-2 p-2 rounded-lg bg-[#fa8c00] hover:bg-[#fda127]">
                        <p class="font-semibold text-slate-100">update Password</p>
                        </button>
                    </form>
                </div>
            </section>

            <section class="ml-6 mt-24">
                <h1 class="font-bold text-3xl text-slate-600 border-b border-slate-300 pb-1 max-w-4xl">Create User</h1>
                <div class="w-3/4 mt-6">
                    <form action="">
                        <label for="nama" class="font-semibold">Nama</label>
                        <input type="text" name="nama" id="nama-new" class="block w-3/4 mb-4 rounded-md px-2 py-1 bg-gray-100 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none">

                        <label for="nama" class="font-semibold">Email</label>
                        <input type="text" name="email" id="email-new" class="block w-3/4 mb-4 rounded-md px-2 py-1 bg-gray-100 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none">

                        <label for="new-passUser" class="font-semibold">Password</label>
                        <div class="flex relative mb-6 w-3/4" id="container-input">
                            <button class="absolute self-center right-0 mr-2" id="fa-eye" type="button"">
                                <i class="fa-solid fa-eye"></i>
                            </button>
                            <button class="absolute self-center right-0 mr-2" id="fa-eye-slash" type="button" hidden>
                                <i class="fa-solid fa-eye-slash"></i>
                            </button>
                            <input type="password" name="new-passUser" id="password" class="block w-full mt-1 rounded-md px-2 py-1 bg-gray-100 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none">
                        </div>

                        <label for="confirm-pass" class="font-semibold">Konfirmasi Password</label>
                        <input type="password" name="confirm-pass" id="password" class="block w-3/4 mb-4 rounded-md px-2 py-1 bg-gray-100 border border-slate-300 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 focus:outline-none">

                        <button type="submit" class="mt-2 py-2 px-4 rounded-lg bg-[#fa8c00] hover:bg-[#fda127]">
                        <p class="font-semibold text-slate-100">Save</p>
                        </button>
                    </form>
                </div>
            </section>
        </main>
    <?= $this->endSection()?>
    <?= $this->section('script')?>
        <script>
            settings()
        </script>
    <?= $this->endSection()?>
