<html lang="en">
<head>
    <?= $this->include('layout/store/head')?>
</head>

<body class="max-w-screen-2xl max-h-max mx-auto">
    <div class="box-main">
        <div class="content">
            <div class="w-full h-full bg-white pt-4 container-log">
                <div class="flex justify-center w-full h-auto">
                    <div class="exo text-3xl text-[#ff4800]">MarketEer</div>
                </div>
                <form action="" class="w-4/5 mx-auto mt-6 sm:pb-4">
                    <label for="email" class="font-semibold">Email</label>
                    <input type="text" name="email" placeholder="masukkan email pemulihan" class="block w-full mb-5 mt-1 rounded-sm bg-slate-100 py-1 px-2 mx-auto border focus:border-sky-300 focus:ring-sky-300 focus:ring-1 focus:outline-none">

                    <div class="flex justify-center mt-4 sm:mt-7">
                        <button type="submit" class="w-full py-1 rounded-lg font-bold text-white border-2 bg-login">Submit</button>
                    </div>
                </form>
                <div class="flex mt-12 border-t-2 border-[#ff4800] w-3/4 mx-auto">
                    <a href="/signup">
                        <div class="mt-2 font-semibold text-sm text-[#2f75c5]">Sign Up</div>
                    </a>
                    
                    <a href="/login" class="ml-auto">
                        <div class="mt-2 font-semibold text-sm text-[#2f75c5]">Login</div>
                    </a>
                </div>
                <div class="absolute flex w-full bottom-0 px-2 py-2">
                    <div class="self-center mx-auto">
                        <p class="font-semibold">MarketEer &copy; 2022</p>
                    </div>
                </div>

            </div>

        </div>
    </div>
</body>
</html>