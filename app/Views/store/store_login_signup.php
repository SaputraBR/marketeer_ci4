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
                <form action="/signup/new" method="post" enctype="multipart/form-data" class="w-4/5 mx-auto">
                    <label for="email" class="font-semibold" id="form">Email</label>
                    <input type="text" name="email" class="block w-full rounded-sm bg-slate-100 mb-2 py-1 px-2 mx-auto border focus:border-sky-300 focus:ring-sky-300 focus:ring-1 focus:outline-none">
                    
                    <label for="password1" class="font-semibold">Password</label>
                    <div class="flex relative mb-2">
                        <input type="password" name="password1" id="check1" class="w-full rounded-sm bg-slate-100 py-1 px-2 mx-auto border focus:border-sky-300 focus:ring-sky-300 focus:ring-1 focus:outline-none">
                        <span class="absolute self-center right-0 mr-2 cursor-pointer" id="password">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" class="" id="uye">
                                <path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512" class="hidden" id="uye-hide">
                                <path d="M38.8 5.1C28.4-3.1 13.3-1.2 5.1 9.2S-1.2 34.7 9.2 42.9l592 464c10.4 8.2 25.5 6.3 33.7-4.1s6.3-25.5-4.1-33.7L525.6 386.7c39.6-40.6 66.4-86.1 79.9-118.4c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C465.5 68.8 400.8 32 320 32c-68.2 0-125 26.3-169.3 60.8L38.8 5.1zM223.1 149.5C248.6 126.2 282.7 112 320 112c79.5 0 144 64.5 144 144c0 24.9-6.3 48.3-17.4 68.7L408 294.5c8.4-19.3 10.6-41.4 4.8-63.3c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3c0 10.2-2.4 19.8-6.6 28.3l-90.3-70.8zM373 389.9c-16.4 6.5-34.3 10.1-53 10.1c-79.5 0-144-64.5-144-144c0-6.9 .5-13.6 1.4-20.2L83.1 161.5C60.3 191.2 44 220.8 34.5 243.7c-3.3 7.9-3.3 16.7 0 24.6c14.9 35.7 46.2 87.7 93 131.1C174.5 443.2 239.2 480 320 480c47.8 0 89.9-12.9 126.2-32.5L373 389.9z"/>
                            </svg>
                        </span>
                    </div>

                    <label for="password2" class="font-semibold">Konfirmasi Password</label>
                    <div class="flex relative">
                        <input type="password" name="password2" id="check2" onkeyup="doubleCheck()" class="w-full rounded-sm bg-slate-100 py-1 px-2 mx-auto border focus:border-sky-300 focus:ring-sky-300 focus:ring-1 focus:outline-none">
                        <span class="absolute self-center right-0 mr-2 cursor-pointer" id="password">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" class="" id="uye">
                                <path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512" class="hidden" id="uye-hide">
                                <path d="M38.8 5.1C28.4-3.1 13.3-1.2 5.1 9.2S-1.2 34.7 9.2 42.9l592 464c10.4 8.2 25.5 6.3 33.7-4.1s6.3-25.5-4.1-33.7L525.6 386.7c39.6-40.6 66.4-86.1 79.9-118.4c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C465.5 68.8 400.8 32 320 32c-68.2 0-125 26.3-169.3 60.8L38.8 5.1zM223.1 149.5C248.6 126.2 282.7 112 320 112c79.5 0 144 64.5 144 144c0 24.9-6.3 48.3-17.4 68.7L408 294.5c8.4-19.3 10.6-41.4 4.8-63.3c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3c0 10.2-2.4 19.8-6.6 28.3l-90.3-70.8zM373 389.9c-16.4 6.5-34.3 10.1-53 10.1c-79.5 0-144-64.5-144-144c0-6.9 .5-13.6 1.4-20.2L83.1 161.5C60.3 191.2 44 220.8 34.5 243.7c-3.3 7.9-3.3 16.7 0 24.6c14.9 35.7 46.2 87.7 93 131.1C174.5 443.2 239.2 480 320 480c47.8 0 89.9-12.9 126.2-32.5L373 389.9z"/>
                            </svg>
                        </span>
                        <p class="text-xs text-red-600 hidden absolute bottom-0 mt-4" style="bottom: -15px" id="onkey">Password tidak cocok!</p>
                    </div>


                    <div class="flex justify-center mt-4 sm:mt-5">
                        <button type="submit" class="w-full py-2 rounded-lg font-bold text-white border-2 bg-login">Daftar</button>
                    </div>
                </form>
                <div class="flex border-t-2 border-[#ff4800] w-3/4 mx-auto">
                    <a href="/login">
                        <div class="mt-2 self-center font-semibold text-sm text-[#2f75c5]">Login</div>
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

    <script>
        signup()

        function doubleCheck(){
            var pass1   = document.getElementById('check1');
            var pass2   = document.getElementById('check2');

            if (pass1.value == pass2.value){
                document.getElementById("onkey").classList.add('hidden')
            } else {
                document.getElementById("onkey").classList.remove('hidden')
            }
        }
    </script>
</body>
</html>