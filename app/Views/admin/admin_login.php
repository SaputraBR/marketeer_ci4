<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <title>MarketEer</title>
  <link rel="stylesheet" type="text/css" href="/dist/tailwind.css">
  <link rel="stylesheet" type="text/css" href="/src/custom.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Sulphur+Point:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/20fcff0bce.js" crossorigin="anonymous"></script>
  <style>
      .box-main
    {
        position: relative;
        top: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        background: #7bc5bd;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to bottom, #7bc5bd, #d1c891);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to bottom, #7bc5bd, #d1c891); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    }
    
    .content
    {
        position: fixed;
        width: 500px;
        height: 500px;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        margin: auto;
        background-image: url(/img/1.png);
        background-size: cover;
        border-radius: 2%;
        overflow: hidden;
    }
  </style>
</head>

<body class="max-w-screen-2xl max-h-max mx-auto">
    <div class="box-main">
        <div class="content">
            <div class="relative h-3/4 w-2/3 mx-auto top-1/2 bg-slate-600/[.7] border-2 border-sky-500 rounded-lg" style="transform: translateY(-50%)">
                <form action="" class="w-3/4 mx-auto pt-4">
                    <label for="user" class="font-bold text-lg text-white">Nama</label>
                    <input type="text" name="user" class="block w-full mb-3 rounded-lg bg-white py-1 px-2 mx-auto border focus:border-sky-300 focus:ring-sky-300 focus:ring-1 focus:outline-none">

                    <label for="password" class="font-bold text-lg text-white">Password</label>
                    <input type="password" name="password" class="block w-full rounded-lg bg-slate-100 py-1 px-2 mx-auto border focus:border-sky-300 focus:ring-sky-300 focus:ring-1 focus:outline-none">

                    <div class="flex justify-center mt-6">
                        <button type="submit" class="px-4 py-2 rounded-lg font-bold border-2 border-[#d1c891] bg-[#d1c891] hover:bg-slate-200">Login</button>
                    </div>
                </form>
                <div class="flex border-t-2 border-slate-300 w-3/4 mx-auto">
                    <a href="#" class="mx-auto">
                        <div class="mt-2 font-bold text-lg text-white">Forgot Password</div>
                    </a>
                </div>
                <div class="absolute flex w-full bottom-0 px-2 py-2">
                    <div class="self-center mx-auto">
                        <p class="font-bold text-lg text-white">MarketEer &copy; 2022</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>