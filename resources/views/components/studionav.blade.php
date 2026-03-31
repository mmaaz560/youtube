@if (session('message'))
<div id="message" class="fixed top-5 right-5 z-600 flex items-center gap-3 bg-white/90 backdrop-blur-md border border-green-200 text-green-700 px-6 py-4 rounded-2xl shadow-2xl transition-all duration-500 translate-y-0 opacity-100">

    <div class="flex items-center justify-center w-10 h-10 bg-green-500 text-white rounded-full text-lg">
        ✓
    </div>

    <div>
        <p class="font-semibold">Success</p>
        <p class="text-sm text-gray-600">Video uploaded successfully</p>
    </div>

</div>

<script>
    setTimeout(() => {
        const msg = document.getElementById('message');
        msg.style.opacity = '0';
        msg.style.transform = 'translateY(-20px)';
        setTimeout(() => {
            msg.remove();
        }, 500);
    }, 2000);
</script>
    
@endif
<!-- overlay and popup card -->

<form action="/upload-video" method="POST" enctype="multipart/form-data"
    class="fixed top-0 min-h-screen flex  bg-black/60 z-300 w-full  justify-center items-center">
    @csrf
    <!-- first form  -->

    <div class="card shadow-lg p-3 first-form w-[70%] h-[450px]   rounded-lg border-0 bg-white">
        <div class="flex justify-between items-center">
            <h1 class="font-semibold">Uplode videos</h1>
            <div class="flex gap-3 font-semibold">
                <i class="bi bi-chat-square-dots"></i>
                <i class="bi bi-x-lg"></i>
            </div>
        </div>
        <div style="flex-direction: column;" class="flex  items-center justify-center">
            <div class=" my-8  bg-gray-200 rounded-full top-px w-30 h-30"></div>
            <p class=" text-center">Drag and drop video files to upload</p>
            <p class=" text-center text-secondary">Your videos will be private until you publish them.</p>
            <input type="file" name="video" id="video" accept="video/mp4" class="hidden video-input">
            <label for="video" class="bg-black text-white my-8 px-2 rounded-full text-center py-1">Select
                files</label>
        </div>
        <div class="text-sm text-gray-500 text-center mx-auto w-[800px]">By submitting your videos to YouTube, you
            acknowledge that you agree to YouTube's
            <a class="text-blue-800" href="#">Terms of Service</a> and <a class="text-blue-800"
                href="#">Community Guidelines</a>.Please be sure not to violate others' copyright or privacy
            rights.
            <a class="text-blue-800" href="#">Learn more</a>
        </div>
    </div>
    {{-- end first form --}}


    <!-- second form -->

    <div class=" flex-col hidden second-form bg-white overflow-y-auto w-[800px] rounded h-[500px]">
        <div class="flex items-center px-6 py-4 space-x-18">
            <div class="flex items-center gap-2">
                <span class="bg-white border-black border  w-4 h-4 rounded-full"></span>
                <span class="text-gray-400 text-sm ">Details</span>
            </div>
            <div class="flex items-center gap-2">
                <span class="bg-gray-500 w-4 h-4 rounded-full"></span>
                <span class="text-gray-400 text-sm ">Video element</span>
            </div>
            <div class="flex items-center gap-2">
                <span class="bg-gray-500 w-4 h-4 rounded-full"></span>
                <span class="text-gray-400 text-sm ">Initial check</span>
            </div>
            <div class="flex items-center gap-2">
                <span class="bg-gray-500 w-4 h-4 rounded-full"></span>
                <span class="text-gray-400 text-sm ">Visibility</span>
            </div>
        </div>



        <div class="flex flex-1 px-6 py-4 space-x-4 justify-end   border-t border-gray-700">
            <div class="flex-1 space-y-4">
                <div class="space-y-1">
                    <label for="titles" class="text-gray-500">
                        Title(requried)
                    </label>
                    <input name="title" type="text" id="titles" class="w-full  rounded border border-gray-700  px-2 py-1" value="user">
                    <button class=" text-gray-500">A/B testing</class=></button>
                </div>
                <div class="space-y-1">
                    <label for="description" class="block text-gray-500">
                        Discription
                    </label>
                    <textarea name="description" id="description" class="w-full h-32 p-2 border rounded mb-0 border-gray-700" placeholder="Tell viewers about your video "></textarea>
                    <div class="text-sm mt-0  text-gray-500 text-end">0/500</div>
                </div>
                <div class="space-y-1">
                    <label for="" class="block text-gray-500">
                        Thumbnail
                    </label>
                    <div class="flex gap-1 text-sm">
                        <input type="file" name="input-image" id="thumnail" accept="image/jpg" class="input-image hidden">
                        <label for="thumnail" class="flex-1 border px-3 py-2 border-gray-500 rounded hover:bg-gray-700">Uplode
                            file</label>
                        <label
                            class="flex-1 border px-3 py-2 border-gray-500 rounded hover:bg-gray-700">Auto-genrated</label>
                        <label class="flex-1 border px-3 py-2 border-gray-500 rounded hover:bg-gray-700">A/B
                            Testing</label>
                    </div>
                
                <img src="https://www.digifloor.com/wp-content/uploads/2023/06/Best-Free-AI-Image-Generator.jpg" class="w-50 h-50 rounded-md object-contain image-preview " alt="">
            </div>
                <div class="space-y-1">
                    <label for="" class="block text-gray-500">
                        Playlist
                    </label>
                    <select class="w-full border border-gray-700  rounded p-2">
                        <option>Select</option>
                    </select>
                </div>
                <div class="space-y-1">
                    <label for="" class="block text-gray-500">
                        Audience
                    </label>
                    <p class="text-gray-400 text-sm">This video is set to not made for kids, Regardless of your
                        location, you're legally requrid to comply with COPPA</p>
                    <div class="flex space-x-2">
                        <label for="" class="flex items-center space-x-2">
                            <input type="radio" name="kids" checked class="accent-gray-600">
                            <span>No, it's not made for kids</span>
                        </label>
                        <label for="" class="flex items-center space-x-2">
                            <input type="radio" name="kids" class="accent-gray-600">
                            <span>Yes, it's made for kids</span>
                        </label>
                    </div>
                    <button class="flex text-sm items-center space-x-2 text-gray-500">
                        <i class="bi bi-chevron-down"></i><span>Age restriction (Advanced) Show more</span>
                    </button>
                </div>
            </div>
            {{-- right side --}}

            <div class="w-80 shrink-0 mt-3 space-y-4">
                <div class=" rounded p-2">
                    <video controls src="" class="w-full video-previwe rounded" alt="video">
                        <p class=" text-sm ">
                            Video link <a href="#" class="text-blue-600">http://</a>
                        </p>
                        <p class=" text-sm">
                            File name:kwdks

                        </p>

                </div>
            </div>
        </div>

        <div class="flex justify-end p-4 space-x-2  border-t border-gray-700">
            <button type="button" class="px-4 py-1 rounded border next hover:bg-gray-300 ">Next</button>
        </div>

    </div>


    {{-- end second form --}}



    <!-- Third form -->
    <div class=" flex-col third-form hidden bg-white overflow-y-auto w-[800px] rounded h-[500px]">
        <div class="flex items-center px-6 py-4 space-x-18">
            <div class="flex items-center gap-2">
                <span class="bg-gray-500 w-4 h-4 rounded-full"></span>
                <span class="text-gray-400 text-sm ">Details</span>
            </div>
            <div class="flex items-center gap-2">
                <span class="bg-gray-500 w-4 h-4 rounded-full"></span>
                <span class="text-gray-400 text-sm ">Video element</span>
            </div>
            <div class="flex items-center gap-2">
                <span class="bg-gray-500 w-4 h-4 rounded-full"></span>
                <span class="text-gray-400 text-sm ">Initial check</span>
            </div>
            <div class="flex items-center gap-2">
                <span class="bg-white border-black border  w-4 h-4 rounded-full"></span>
                <span class="text-gray-400 text-sm ">Visibility</span>
            </div>
        </div>

        <h1 class="px-3  font-semibold">Visibility</h1>
        <p class="px-3 text-sm">Choose when to publish and who can see your video</p>
        <div class="bg-gray-300 flex gap-2 items-center px-4 py-3 rounded mx-3 my-2">
            <i class="bi bi-1-circle"></i>
            <p class="text-sm">Who recommond keeping this video private and not chening it until cheack</p>
        </div>

        <div class="flex flex-1 px-3 py-3">
            {{-- left side --}}
            <div class=" col-xl-4 col-lg-5 col-md-6">
                <div class="space-y-3">
                    <div class="border px-2 py-3 rounded">
                        <div class="font-semibold px-2 ">
                            Save or publish
                        </div>
                        <p class="text-sm px-2 text-secondary">
                            Make your video public unlist or private
                        </p>
                        <div class=" px-6">
                            <label>
                               <input type="radio" name="visibility"      value="private" checked>
                                   Private
                             </label>
                            <p class="text-sm text-gray-500">Only you and people you choose can watch your video</p>
                            <label>
                                <input type="radio" name="visibility" value="unlisted">
                                   Unlisted
                              </label>
                            <p class="text-sm text-gray-500">Anyone with the video link can watch your video</p>
                            <label>
                               <input type="radio" name="visibility" value="public">
                                Public
                             </label>
                            <p class="text-sm text-gray-500">Everyone can watch your video</p>
                        </div>
                    </div>
                    <div class="bg-gray-600  p-3 text-white rounded">
                        <h1 class="font-semibold p-3">
                            Before you publish check the following:
                        </h1>
                        <h1 class="px-3 text-semibold">
                            Do kids appear in this video
                        </h1>
                        <p class="px-3 text-sm">
                            Make sure follow our process to protect minor from harm,bullying violations of labor law <a
                                href="#" class="text-blue-600 text-md">Learn more</a>
                        </p>
                        <h1 class="px-3 text-semibold">Looking for overall content guidance?</h1>
                        <p class="px-3 text-sm">Our community Guidelines can help you avoid trouble and and ensure that
                            youtube remains a safe and vibrant community.<a href="#"
                                class="text-blue-600 text-md">Learn more</a></p>
                    </div>
                </div>
            </div>
            {{-- right side --}}
            <div class=" p-3 col-xl-8 col-lg-7 w-90 col-md-6">
                <video class="rounded video2 bg-black h-50 w-full" controls>
                    <source src="" type="video/mp4">
                </video>

                <p class="text-sm">2352.3425.132</p>

                <p class="text-sm">Video link</p>
                <p class="text-sm text-blue-600">https://example.com/video</p>

            </div>
        </div>

        <div class="flex justify-between p-4 space-x-2  border-t border-gray-700">
            
            <div>
            <i class="fontsize-30 bi bi-arrow-bar-up"></i>
            <i class=" bi bi-badge-sd"></i>
            <i class=" bi bi-check-circle"></i>
            </div>
            <div>
                <button class="px-4 py-1 rounded border hover:bg-gray-300 ">Next</button>
            </div>
            
        </div>

    </div>



</form>


{{-- end third form --}}

<!--   forms end  -->





<!-- navbar of studio -->
<div class="flex justify-between items-center px-3 py-4">
    <div class="logo flex gap-2 items-center">
        <i class="bi bi-list text-2xl"></i>
        <img src="https://www.gstatic.com/youtube/img/creator/yt_studio_logo_v2.svg" width="100px" alt="">
    </div>
    <div class="search flex gap-2 w-[500px] items-center">
        <div class="flex gap-2 outline-1 ps-2 overflow-hidden rounded-full">
            <i class="bi bi-search px-1 py-1 "></i>
            <input type="text" class="w-100 " placeholder="Search across your channal">
        </div>
    </div>
    <div class="create  flex gap-2 items-center">
        <a href="/studio" class="flex bg-gray-300 px-2 py-1 rounded-full items-center ">
            <i class="bi bi-plus-lg"></i>
            <div class="">Create</div>
        </a>
        <i class="bi bi-bell bg-gray-300 w-[25px] h-[25px] rounded-full flex items-center justify-center p-4"></i>
        <i class="bi bi-person bg-gray-300 w-[25px] h-[25px] rounded-full flex items-center justify-center p-4"></i>

    </div>
</div>



<script>
    let form1 = $('.first-form')
    let form2 = $('.second-form')
    let video_input = $('.video-input')

    video_input.on('input', (e) => {
        let file = e.target.files[0]
        form1.addClass('hidden').removeClass('flex')
        form2.removeClass('hidden').addClass('flex')
        let link = URL.createObjectURL(file)
        $('.video-previwe ').attr('src', link)
        $('.video2').attr('src',link)
    })

    $('.input-image').on('input',(e)=>{
        let file = e.target.files[0]
        let link = URL.createObjectURL(file)
        $('.image-preview').attr('src', link)
    })

    $('.next').on('click',function(){
        $('.second-form').removeClass('flex').addClass('hidden')
        $('.third-form').removeClass('hidden').addClass('flex')
    })





    
</script>
