<x-flash/>

<div class="flex fixed z-600  top-0 left-0 right-0 h-14  justify-between bg-zinc-300 items-center p-1">
    <div class="logo flex gap-2 items-center">
        <i class="bi bi-list text-2xl"></i>
        <img src="https://www.freeiconspng.com/uploads/youtube-logo-png-transparent-image-5.png" width="100px" alt="">
    </div>
    <div class="search flex gap-2 w-[500px] items-center">

      <div class="">
        <div class="flex gap- outline-1  overflow-hidden rounded-full">
            <input type="text" class="w-100 ps-3 outline-none search-bar"  placeholder="Search">
            <i class="bi bi-search px-3 py-1 bg-gray-400"></i>
        </div>
        <div class=" ">
            <ul class="bg-gray-400   overflow-hidden mt-1 w-100 rounded-md unstyled absolute search-list video-list hidden  text-gray-700">
                
               
            </ul>

        </div>
       </div>



        <i class="bi bi-mic px-2 py-1  bg-gray-400 rounded-full "></i>
    </div>
    <div class="create  flex gap-2 items-center">
       
        <i class="bi bi-bell bg-gray-400 w-[25px] h-[25px] rounded-full flex items-center justify-center p-4"></i>
      
       @guest
          <a href="/login">
            <i class="bi bi-person login bg-gray-400 w-[25px] h-[25px] rounded-full flex items-center justify-center p-4"></i>
         </a>
       @endguest


       @auth
        <a href="/studio" class="flex bg-gray-400 px-2 py-1 rounded-full items-center ">
            <i class="bi bi-plus-lg"></i>
            <div class="">Create</div>
        </a>
        <div class="flex bg-gray-400 py-1 cursor-pointer px-3 justify-center  rounded-full items-center ">
           {{ auth()->user()->name }}
        </div>
        <form action="/logout" method="POST">
            @csrf
            <button type="submit" class="bg-gray-400 hover:bg-gray-500 cursor-pointer font-semibold py-1 px-4 rounded-full">
                Logout
            </button>
        </form>
       @endauth

    </div>
</div>

<script>
  $('.search-bar').on('keyup', function(e){
    let val = $(this).val();
    if(val.length > 0){
        $('.search-list').removeClass('hidden')

        $.ajax({
            url:'/search',
            type:'POST',
            data:{
                searchtrem: val
            },
            success: function(response){
                let list = ''
                response.forEach((item , index) =>{
                    list += ` 
                    <a href='/search/${item.title}' class="ps-3 block hover:bg-gray-500 pt-1">
                      <li >
                        ${item.title}
                      </li>
                    </a>`
                    
                })
                $('.search-list').html(list);
            }
        })
        
    }else{
        $('.search-list').addClass('hidden')
    }
  })
</script>