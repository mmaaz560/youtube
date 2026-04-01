<div class="flex justify-between bg-zinc-300 items-center p-1">
    <div class="logo flex gap-2 items-center">
        <i class="bi bi-list text-2xl"></i>
        <img src="https://www.freeiconspng.com/uploads/youtube-logo-png-transparent-image-5.png" width="100px" alt="">
    </div>
    <div class="search flex gap-2 w-[500px] items-center">
        <div class="flex gap-2 outline-1 ps-2 overflow-hidden rounded-full">
            <input type="text" class="w-100 "  placeholder="Search">
            <i class="bi bi-search px-3 py-1 bg-gray-400"></i>
        </div>
        <i class="bi bi-mic px-2 py-1  bg-gray-400 rounded-full "></i>
    </div>
    <div class="create  flex gap-2 items-center">
       
        <i class="bi bi-bell bg-gray-400 w-[25px] h-[25px] rounded-full flex items-center justify-center p-4"></i>
      
       @guest
            <i class="bi bi-person login bg-gray-400 w-[25px] h-[25px] rounded-full flex items-center justify-center p-4"></i>
       @endguest


       @auth
        <a href="/studio" class="flex bg-gray-400 px-2 py-1 rounded-full items-center ">
            <i class="bi bi-plus-lg"></i>
            <div class="">Create</div>
        </a>
        <div class="flex bg-gray-400 py-1 cursor-pointer px-3 justify-center  rounded-full items-center ">
           {{ auth()->user()->name }}
        </div>
       @endauth

    </div>
</div>