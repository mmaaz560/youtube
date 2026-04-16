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
      <div class="ml-60 w-[calc(100%-15rem)]  px-4">
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
         <div class="max-w-5xl video-list mx-auto space-y-2">
              <x-video-skeleton/>
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
     let title = decodeURIComponent(window.location.pathname.split('/').pop())
     $.ajax({
        url:'/getsearchvideo',
        type: 'GET',
        data:{
            title:title
        },
        success:function(response){
            console.log(response)
            let content = ''
            response.forEach((item,index) => {
                content += `
                <div class="flex gap-4 hover:bg-gray-300 p-3 rounded-lg">
        
        <div class="w-[320px] rounded-lg overflow-hidden  h-[180px] shrink-0">
            <img width="100%" src="/storage/${item.thumbnail}" class="h-[180px] object-fit-cover" alt="">
        </div>

        <div class="flex flex-col w-full">
            <h2 class="text-lg font-semibold">
                ${item.title}
            </h2>
               <div class="flex gap-2">
                  <div class="w-7 h-7 rounded-full flex items-center justify-center bg-green-300">
                    A
                    </div>
                  <div class="text-sm text-gray-600 mt-1">
                     ${item.user.name}
                  </div>
              </div>

            <p class="text-sm text-gray-500 mt-2">
               ${item.description}
            </p>
        </div>

             </div>
                `
            })
            $('.video-list').html(content)
        }
     })


</script>

</x-layout>