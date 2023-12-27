<nav class="top-0 z-20 bg-main flex flex-col text-white sticky" id="navMain">
        <div class="h-5 w-full flex bg-gray-300 sticky top-0 sticky">
            <div class="flex ml-auto mr-1 sm:mr-4 text-black text-sm"> 
                <a href="/terms" class="mr-2 hover:text-[#ff2f00]">About</a>
                <a href="/terms" class="mr-2 hover:text-[#ff2f00]">Help Center</a>
                <a href="/login" class="flex mr-2 hover:text-[#ff2f00]">
                <span class="self-center" id="">        
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg> 
                </span>
                <p class="">Akun</p>
                </a>
            </div>
        </div>
    
        <div class="flex justify-between h-20 w-auto px-2 sm:px-6 md:px-16 lg:px-24 font-semibold ">
            <div class="trirong self-center">
                <a href="/" class="text-3xl hidden sm:block sm:text-4xl">MarketEer</a>
                <a href="/" class="h-full flex w-12 block sm:hidden">
                    <img src="/img/MARKETEER_CROPED.png" alt="" class="w-full self-center object-cover">
                </a>
            </div>
          <form class="w-8/12 h-full">
            <div class="h-full flex relative mx-2 sm:mx-4">
                <button id="dropdown-button" onclick="dropKlik()" data-dropdown-toggle="dropdown" class="dropbtn self-center flex-shrink-0 z-10 inline-flex items-center py-2.5 px-2 sm:px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-l-lg hover:bg-gray-200 focus:border-blue-700 focus:ring-blue-700 focus:ring-1 focus:outline-none" type="button">
                    <p class="hidden md:block">All categories</p>
                    <p class="block md:hidden text-xs md:text-sm">All</p>
                    <svg aria-hidden="true" class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div id="dropdown-category" class="w-36 z-10 bg-white divide-y divide-gray-100 rounded-lg shadow left-0 absolute mt-16 dropdown-category hidden">
                  <ul class="py-2 text-xs sm:text-sm text-gray-700" aria-labelledby="dropdown-button">
                    <li>
                        <a href="#" class="inline-flex w-full px-4 py-2 hover:bg-gray-100">fashion</a>
                    </li>
                    <li>
                        <a href="#" class="inline-flex w-full px-4 py-2 hover:bg-gray-100">personal care</a>
                    </li>
                    <li>
                        <a href="#" class="inline-flex w-full px-4 py-2 hover:bg-gray-100">gadgets</a>
                    </li>
                    <li>
                        <a href="#" class="inline-flex w-full px-4 py-2 hover:bg-gray-100">electronics</a>
                    </li>
                    <li>
                        <a href="#" class="inline-flex w-full px-4 py-2 hover:bg-gray-100">home</a>
                    </li>
                    <li>
                        <a href="#" class="inline-flex w-full px-4 py-2 hover:bg-gray-100">tools</a>
                    </li>
                  </ul>
                </div>
                <div class="relative w-full self-center">
                  <form action="">
                    <input type="text" name="search" id="search-dropdown" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-r-lg border-l-gray-50 border border-gray-300 focus:border-blue-700 focus:ring-blue-700 focus:ring-1 focus:outline-none text-xs md:text-sm" placeholder="Cari barang..." required>
                    <button type="submit" class="absolute top-0 right-0 p-2.5 text-sm font-medium text-white bg-blue-700 rounded-r-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                        <svg aria-hidden="true" class="w-4 h-4 md:w-5 md:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>
                  </form>
                </div>
            </div>
          </form>
          <div class="flex text-white space-x-1 md:space-x-2 lg:space-x-4 justify-content-center">
            <a href="/wishlist" class="flex relative justify-center self-center w-7 sm:w-12 h-auto " data-title="wishlist"> 
                <span class="badge text-xs sm:text-sm">2</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 sm:w-9 sm:h-9">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                </svg>                        
            </a>
            <a href="/keranjang" class="flex relative justify-center self-center w-7 sm:w-12 h-auto" data-title="keranjang">
                <span class="badge text-xs sm:text-sm">3</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 sm:w-9 sm:h-9">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                </svg>  
            </a>
            <a href="/akun" class="flex relative justify-center self-center w-7 sm:w-12 h-auto" data-title="akun">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 sm:w-9 sm:h-9">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>                  
            </a>
          </div>
        </div>
    </nav>