<x-layout>

   
    <x-navbar/>
    <x-flash/>
    <div class=" grid grid-cols-1 w-full h-screen lg:grid-cols-3 mt-14 p-5 mx-auto">
        <div class=" lg:col-span-2 ">
            <div class="  ">
                <div class=" w-full">
                    <video class="w-full h-[500px] object-contain rounded-xl bg-black"
                 src="{{ asset('/storage/' . $video->video) }}" 
                 controls width="100%" height="50%" type="video/mp4" ></video>
                </div>
                 
                <div class="font-bold z-600 text-xl mt-2">{{ $video['title'] }}

                </div>
    
    
               <div class="flex flex-wrap items-center justify-between gap-2 w-full my-4">

    <!-- Left Section -->
    <div class="flex items-center gap-3 sm:justify-between">
        <img src="https://images.ctfassets.net/hrltx12pl8hq/28ECAQiPJZ78hxatLTa7Ts/2f695d869736ae3b0de3e56ceaca3958/free-nature-images.jpg?fit=fill&w=1200&h=630"
             class="w-10 h-10 rounded-full object-cover"
             alt="logo">

        <div>
            <h2 class="font-semibold text-lg">{{ $video->user->name }}</h2>
            <p class="text-gray-600 text-sm">2.57K subscribers</p>
        </div>

        <button class="bg-black text-white px-5 py-2 rounded-full font-semibold hover:bg-gray-800">
            Subscribe
        </button>
    </div>

    <!-- Right Section -->
    <div class="flex flex-wrap items-center gap-3">

        <div class="flex items-center gap-3 bg-gray-100 px-5 py-2 rounded-full hover:bg-gray-200">
            <button>
                <i class="bi bi-hand-thumbs-up text-xl"></i>
            </button>

            <span class="font-semibold">6.9K</span>

            <button>
                <i class="bi bi-hand-thumbs-down text-xl"></i>
            </button>
        </div>

          

        <button class="flex items-center gap-2 bg-gray-100 px-5 py-2 rounded-full hover:bg-gray-200">
            <i class="bi bi-share text-xl"></i>
            <span class="font-semibold">Share</span>
        </button>

        <button class="flex items-center gap-2 bg-gray-100 px-5 py-2 rounded-full hover:bg-gray-200">
            <i class="bi bi-download text-xl"></i>
            <span class="font-semibold">Download</span>
        </button>

        <button class="bg-gray-100 px-4 py-2 rounded-full hover:bg-gray-200">
            <i class="bi bi-three-dots text-xl"></i>
        </button>

    </div>
</div>
                 {{-- discription --}}

                 

    <!-- Video Info -->
    <div class="px-6 py-4  bg-gray-50">
      <p class="text-sm text-gray-600">
        828K views • 1 month ago 
        
      </p>
      <div class="text-gray-400 text-sm mt-2 leading-relaxed">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus dolorum quod cupiditate in sequi totam nihil laborum, id fugiat. In voluptate, eos voluptatum natus quaerat reprehenderit asperiores ipsa odio? Modi?
      </div>
    </div>

    <!-- Comments Header -->
    <div class="px-6 py-4  flex items-center gap-4 bg-white">
      <div class="flex items-center gap-3">
        <h2 class="text-xl font-semibold text-gray-800">56 Comments</h2>
      </div>
      <div class="flex items-center gap-2 text-gray-600 hover:text-gray-800 cursor-pointer">
        <i class="bi bi-filter text-xl"></i>
        <span class="font-medium">Sort by</span>
      </div>
    </div>

    <!-- Add Comment -->
    <div class="px-6 py-5  flex gap-4 bg-white">
      <div class="w-10 h-10 rounded-full bg-linear-to-br from-orange-400 to-red-500 shrink-0 flex items-center justify-center text-white font-bold text-lg">
        M
      </div>
      <form  class="flex-1 bg-gray-100 px-4 rounded-md">
       <input type="hidden" value="{{ $video->id }}" name="video_id">
       @auth
        <input type="hidden" value="{{ auth()->user()->id }}" name="user_id">
       @endauth
        <input 
        type="text" 
        id="comm" 
        name="comment"
        placeholder="Add a comment..." 
        class="w-full com-input bg-transparent border-gray-400 py-2 focus:outline-none focus:border-blue-500 text-gray-700 placeholder-gray-400"
    >

    <!-- Buttons -->
    <div class="btn-com hidden justify-end gap-3 px-1 mt-2">
        <button 
            type="button"
            onclick="cancelComment()"
            class="bg-gray-400 px-4 py-2 rounded-full text-white font-medium hover:bg-gray-500 transition"
        >
            Cancel
        </button>

        <button 
            type="button"
            class="bg-blue-600 comment-btn px-4 py-2 rounded-full text-white font-medium hover:bg-blue-700 transition"
        >
            Comment
        </button>
    </div>

          
      </form>
      
    </div>
    

    <!-- Comments List -->
    <div class="">

      <!-- Comment 1 -->
      <div class="px-6 py-5 hover:bg-gray-50">
        <div class="flex gap-4">
          <div class="w-9 h-9 rounded-full bg-green-600 flex items-center justify-center text-white font-semibold shrink-0">
            R
          </div>
          <div class="flex-1">
            <div class="flex items-center gap-2">
              <span class="font-semibold text-gray-900">@RamRaj25-1</span>
              <span class="text-gray-500 text-sm">3 weeks ago</span>
            </div>
            <p class="text-gray-800 mt-1 leading-relaxed">
              zdjfvhJKHF.H
            </p>
            <div class="flex items-center gap-6 mt-3 text-gray-600">
              <div class="flex items-center gap-1.5 hover:text-blue-600 cursor-pointer">
                <i class="bi bi-hand-thumbs-up text-lg"></i>
                <span class="text-sm font-medium">14</span>
              </div>
              <div class="flex items-center gap-1.5 hover:text-red-600 cursor-pointer">
                <i class="bi bi-hand-thumbs-down text-lg"></i>
              </div>
              <span class="text-sm font-medium hover:text-blue-600 cursor-pointer">Reply</span>
            </div>
          </div>
          <button class="text-gray-400 hover:text-gray-600">
            <i class="bi bi-three-dots-vertical"></i>
          </button>
        </div>
      </div>

      <!-- Comment 2 -->
      <div class="px-6 py-5 hover:bg-gray-50">
        <div class="flex gap-4">
          <div class="w-9 h-9 rounded-full bg-blue-600 flex items-center justify-center text-white font-semibold shrink-0">
            R
          </div>
          <div class="flex-1">
            <div class="flex items-center gap-2">
              <span class="font-semibold text-gray-900">RameshGothwal-m8w3s</span>
              <span class="text-gray-500 text-sm">1 month ago</span>
            </div>
            <p class="text-gray-800 mt-1 leading-relaxed">
              ydtoyioickhgfilysil;p
            </p>
            <div class="flex items-center gap-6 mt-3 text-gray-600">
              <div class="flex items-center gap-1.5 hover:text-blue-600 cursor-pointer">
                <i class="bi bi-hand-thumbs-up text-lg"></i>
                <span class="text-sm font-medium">29</span>
              </div>
              <div class="flex items-center gap-1.5 hover:text-red-600 cursor-pointer">
                <i class="bi bi-hand-thumbs-down text-lg"></i>
              </div>
              <span class="text-sm font-medium hover:text-blue-600 cursor-pointer">Reply</span>
            </div>
          </div>
          <button class="text-gray-400 hover:text-gray-600">
            <i class="bi bi-three-dots-vertical"></i>
          </button>
        </div>
      </div>

      <!-- Comment 3 -->
      <div class="px-6 py-5 hover:bg-gray-50">
        <div class="flex gap-4">
          <img src="https://i.pravatar.cc/150?u=jacky" alt="User" class="w-9 h-9 rounded-full shrink-0">
          <div class="flex-1">
            <div class="flex items-center gap-2">
              <span class="font-semibold text-gray-900">@jackyjack..4842</span>
              <span class="text-gray-500 text-sm">1 month ago</span>
            </div>
            <p class="text-gray-800 mt-1 leading-relaxed">
              Vijay raaz best comedian.....!!!
            </p>
            <div class="flex items-center gap-6 mt-3 text-gray-600">
              <div class="flex items-center gap-1.5 hover:text-blue-600 cursor-pointer">
                <i class="bi bi-hand-thumbs-up text-lg"></i>
                <span class="text-sm font-medium">11</span>
              </div>
              <div class="flex items-center gap-1.5 hover:text-red-600 cursor-pointer">
                <i class="bi bi-hand-thumbs-down text-lg"></i>
              </div>
              <span class="text-sm font-medium hover:text-blue-600 cursor-pointer">Reply</span>
            </div>
          </div>
          <button class="text-gray-400 hover:text-gray-600">
            <i class="bi bi-three-dots-vertical"></i>
          </button>
        </div>
      </div>

      <!-- Comment 4 -->
      <div class="px-6 py-5 hover:bg-gray-50">
        <div class="flex gap-4">
          <img src="https://i.pravatar.cc/150?u=awdhesh" alt="User" class="w-9 h-9 rounded-full shrink-0">
          <div class="flex-1">
            <div class="flex items-center gap-2">
              <span class="font-semibold text-gray-900">@AwdheshKumar-ql7bq</span>
              <span class="text-gray-500 text-sm">1 month ago</span>
            </div>
            <p class="text-gray-800 mt-1 leading-relaxed">
              Thank.s sir
            </p>
            <div class="flex items-center gap-6 mt-3 text-gray-600">
              <div class="flex items-center gap-1.5 hover:text-blue-600 cursor-pointer">
                <i class="bi bi-hand-thumbs-up text-lg"></i>
                <span class="text-sm font-medium">7</span>
              </div>
              <div class="flex items-center gap-1.5 hover:text-red-600 cursor-pointer">
                <i class="bi bi-hand-thumbs-down text-lg"></i>
              </div>
              <span class="text-sm font-medium hover:text-blue-600 cursor-pointer">Reply</span>
            </div>
          </div>
          <button class="text-gray-400 hover:text-gray-600">
            <i class="bi bi-three-dots-vertical"></i>
          </button>
        </div>
      </div>

    </div>
  </div>

        </div>

        <div class=" ">

           <div class="max-w-3xl mx-auto px-3">
         
             <!-- Video 1 -->
             <div class="flex gap-3 mb-2 hover:bg-gray-400 p-2 rounded-xl group cursor-pointer">
               <div class="relative shrink-0">
                 <img src="https://i.ytimg.com/vi/example1/maxresdefault.jpg" 
                      class="thumbnail w-60 rounded-xl" alt="thumbnail">
                 <span class="absolute bottom-2 right-2 bg-black/80 text-white text-xs px-1.5 py-0.5 rounded font-medium">
                   23:44
                 </span>
               </div>
               <div class="flex-1">
                 <h3 class="font-semibold text-lg leading-tight line-clamp-2">
                   Lorem ipsum dolor, sit amet consectetur
                 </h3>
                 <p class="text-gray-400 mt-2">Bolly Shorts <span class="text-green-500">✔️</span></p>
                 <p class="text-gray-400 text-sm mt-1">13M views • 7 months ago</p>
                 
                 <div class="flex items-center gap-3 mt-4">
                   <button class="text-gray-400 hover:text-white">
                     <i class="bi bi-three-dots-vertical text-xl"></i>
                   </button>
                 </div>
               </div>
             </div>
         
             <!-- Video 2 -->
             <div class="flex gap-3 mb-2 hover:bg-gray-400 p-2 rounded-xl group cursor-pointer">
               <div class="relative shrink-0">
                 <img src="https://i.ytimg.com/vi/example2/maxresdefault.jpg" 
                      class="thumbnail w-60 rounded-xl" alt="thumbnail">
                 <span class="absolute bottom-2 right-2 bg-black/80 text-white text-xs px-1.5 py-0.5 rounded font-medium">
                   13:33
                 </span>
               </div>
               <div class="flex-1">
                 <h3 class="font-semibold text-lg leading-tight line-clamp-2">
                   Pakistan vs Taliban OPEN WAR | Why is it Happening? | Dhruv ...
                 </h3>
                 <p class="text-gray-400 mt-2">Dhruv Rathee <span class="text-green-500">✔️</span></p>
                 <p class="text-gray-400 text-sm mt-1">6.7M views • 4 days ago</p>
                 <span class="inline-block bg-red-600 text-white text-xs px-2 py-0.5 rounded mt-2">New</span>
               </div>
             </div>
         
             <div class="flex gap-4 mb-2 hover:bg-gray-400 p-2 rounded-xl group cursor-pointer">
               <div class="relative shrink-0">
                 <img src="https://i.ytimg.com/vi/example3/maxresdefault.jpg" 
                      class="thumbnail w-60 rounded-xl" alt="thumbnail">
                 <span class="absolute bottom-2 right-2 bg-black/80 text-white text-xs px-1.5 py-0.5 rounded font-medium">
                   58:17
                 </span>
               </div>
               <div class="flex-1">
                 <h3 class="font-semibold text-lg leading-tight line-clamp-2">
                   Ramdev Baba ने सिखाया Gulati को योगा | Best Of The Kapil ...
                 </h3>
                 <p class="text-gray-400 mt-2">SET India <span class="text-green-500">✔️</span></p>
                 <p class="text-gray-400 text-sm mt-1">18M views • 5 years ago</p>
               </div>
             </div>
         
             <!-- Video 4 -->
             <div class="flex gap-4 mb-2 hover:bg-gray-400 p-2 rounded-xl group cursor-pointer">
               <div class="relative shrink-0">
                 <img src="https://i.ytimg.com/vi/example4/maxresdefault.jpg" 
                      class="thumbnail w-60 rounded-xl" alt="thumbnail">
                 <span class="absolute bottom-2 right-2 bg-black/80 text-white text-xs px-1.5 py-0.5 rounded font-medium">
                   1:55:27
                 </span>
               </div>
               <div class="flex-1">
                 <h3 class="font-semibold text-lg leading-tight line-clamp-2">
                   SCAM INDIA - Akshay Kumar | Anupam Kher | Manoj Bajpayee ...
                 </h3>
                 <p class="text-gray-400 mt-2">Bollywood Movie Palace</p>
                 <p class="text-gray-400 text-sm mt-1">1.1M views • 11 days ago</p>
               </div>
             </div>
         
             <!-- Video 5 -->
             <div class="flex gap-4 mb-2 hover:bg-gray-400 p-2 rounded-xl group cursor-pointer">
               <div class="relative shrink-0">
                 <img src="https://i.ytimg.com/vi/example5/maxresdefault.jpg" 
                      class="thumbnail w-60 rounded-xl" alt="thumbnail">
                 <span class="absolute bottom-2 right-2 bg-black/80 text-white text-xs px-1.5 py-0.5 rounded font-medium">
                   46:51
                 </span>
               </div>
               <div class="flex-1">
                 <h3 class="font-semibold text-lg leading-tight line-clamp-2">
                   Goga Pasroori | Imran Ashraf | Mazaq Raat Season 2-Ep 405 ...
                 </h3>
                 <p class="text-gray-400 mt-2">Mazaq Raat Show Official</p>
                 <p class="text-gray-400 text-sm mt-1">675K views • 13 days ago</p>
               </div>
             </div>
         
             <!-- Video 6 (Partial) -->
             <div class="flex gap-4 hover:bg-gray-400 p-2 rounded-xl group cursor-pointer">
               <div class="relative shrink-0">
                 <img src="https://i.ytimg.com/vi/example6/maxresdefault.jpg" 
                      class="thumbnail w-60 rounded-xl" alt="thumbnail">
               </div>
               <div class="flex-1">
                 <h3 class="font-semibold text-lg leading-tight line-clamp-2">
                   Kafeel Episode 28 | 7 April 2026
                 </h3>
                 <p class="text-gray-400 mt-2">Some Channel</p>
               </div>
             </div>
         
           </div>
        </div>
    </div>


    <script>
      

      $('.comment-btn').on('click',function(){

        $.ajax({
          url:'/add-comment',
          type:'POST',
          data:{
            'comment':$("input[name='comment']").val(),
            'video_id':$("input[name='video_id']").val(),
            'user_id':$("input[name='user_id']").val(),
          },
          success:function(responce){
            console.log(responce);
          }
        })
      })






     
      let input = document.querySelector('.com-input');
      let btnBox = document.querySelector('.btn-com');

    //  Show buttons on focus
    input.addEventListener('focus', () => {
        btnBox.classList.remove('hidden');
        btnBox.classList.add('flex');
    });

    // Cancel function
    function cancelComment() {
        input.value = '';
        btnBox.classList.add('hidden');
        btnBox.classList.remove('flex');
    }
</script>
   
         
</x-layout>