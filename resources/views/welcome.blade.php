@php
    $categorie = [
    'All',
    'Music',
    'News',
    'Sports',
    'Live',
    'Gaming',
    'Education',
    'Technology',
    'Comedy',
    'Entertainment',
    'Travel',
    'Food',
    'Health',
    'Movies',
    'Lifestyle',
    'Pets',
    'Nature',
    'Kids'
];
@endphp

<x-layout>
    
    <x-navbar/>
    <div class="flex mt-14">
        
         <x-sidbar/>
          <!-- Categories -->
           <div class="ml-60 w-[calc(100%-15rem)]  px-4 "> 
                <div class=" relative">
                     <i class="bi mt-4 bi-chevron-left absolute flex justify-center cursor-pointer left-icon items-center -translate-x-1/2 rounded-full w-10 h-10 z-500 hover:bg-gray-400    bg-zinc-100"></i>

                    <i class="bi bi-chevron-right cursor-pointer my-4 right-icon absolute flex justify-center items-center right-3 hover:bg-gray-400  translate-x-1/2   rounded-full w-10 h-10 z-500   bg-zinc-100"></i>
    
    
                    <div class="flex   left-0 right-0 gap-3 overflow-x-auto scrollbar-hide whitespace-nowrap top-bar p-4 relative ">
                    @foreach ($categorie as $item)
                         <div class="bg-gray-200 px-7 py-2 rounded-lg shrink-0 hover:bg-gray-300 cursor-pointer">
                            {{ $item }}
                         </div>
                     @endforeach
                  </div>
             </div>

            

            <div class="grid gap-4 grid-cols-1 rounded-lg overflow-hidden  md:grid-cols-2 lg:grid-cols-3">

                @foreach ($allVideos as $item)
                  <a href="/watch/{{ $item['id'] }}" class=" hover:bg-gray-300 rounded-lg cursor-pointer transition-all duration-200 p-3">
                <img src="{{ asset('/storage/'. $item['thumbnail']) }}" width="100%" class=" rounded-lg h-[220px] object-fit-cover" alt="video thumbnail">
                 <div class="flex mt-2 justify-between ">
                     <div class="flex gap-2">
                          <img src="https://images.ctfassets.net/hrltx12pl8hq/28ECAQiPJZ78hxatLTa7Ts/2f695d869736ae3b0de3e56ceaca3958/free-nature-images.jpg?fit=fill&w=1200&h=630" class="w-10 h-10 rounded-full" alt="">

                          <div class=" space-y-1">
                              <h1 class=" font-medium">{{ $item['title'] }}</h1>
                              <div class="hover:text-blue-500">
                                   <p class="text-sm text-gray-600 text-capitalize font-medium">
                                    {{ $item->user->name }}
                                   </p>
                              <p class="text-xs font-medium text-gray-500">
                               <span> 1,234 views</span> 
                               <span>•</span>  
                                <span class="upload-time">
                                    {{ $item['created_at']  }}
                                </span>
                            </p></div>
                          </div>
                      </div>
                    <i class="bi bi-three-dots-vertical text-2xl flex justify-center items-center hover:bg-gray-400 h-8 w-8 rounded-full"></i>
                 </div>
           </a>
           
             @endforeach

           
       </div>


     </div>
    </div>


    <script>
     $('.right-icon').on('click',function(){
        $('.top-bar').animate({
            scrollLeft: "+=100"
        },200);
     })

      $('.left-icon').on('click',function(){
        $('.top-bar').animate({
            scrollLeft: "-=100"
        },200);
     })

     document.querySelectorAll('.upload-time').forEach((item, index) => {
        item.innerText = moment(item.innerText).fromNow();
        
     });


    </script>

</x-layout>
    
    
