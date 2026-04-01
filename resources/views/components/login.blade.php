<x-layout>
    <div class="flex justify-center items-center min-h-screen">
     <form action="" class="xl:w-[40%] bg-gray-100 shadow-2xl rounded-xl p-5 lg:w-[60%] md:w-[75%] sm:w-[85%]">

            <div class="text-center mt-1 ">
               <h1 class="font-bold text-2xl">
                     <span class="text-red-600">You</span>Tube
               </h1>
               <p class="font-semibold text-sm mt-1 text-gray-500">Sign into your account</p>
            </div>
              <div class="mt-1">
                <label for="full-name" class="block text-gray-500 font-medium mb-2 ">Email</label>
                <input type="text" id="full-name"  placeholder="Enter your email" class="bg-gray-100 border border-gray-300 rounded-sm w-full py-2 px-4 focus:outline-none focus:ring-1 focus:ring-blue-300">
            </div>

            <div class="mt-1">
                <label for="full-name" class="block text-gray-500 font-medium mb-2 ">Password</label>
                <input type="text" id="full-name"  placeholder="Enter your password" class="bg-gray-100 border border-gray-300 rounded-sm w-full py-2 px-4 focus:outline-none focus:ring-1 focus:ring-blue-300">
            </div>
            <div class="flex mt-2 justify-between items-center">
                <div class="flex items-center">
                    <input type="checkbox" id="reminder" class="mr-2">
                    <label for="reminder" class="text-gray-500 text-sm ">Remember me</label>
                </div>
                <a href="#" class="text-sm text-red-500 hover:underline">Forget Password?</a>
            </div>

            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded-sm w-full  mt-4">Sign In</button>

            <div class="flex justify-center mt-3 items-center gap-3">
                <div class="flex-1 h-px bg-gray-600" ></div>
                <div class="text-sm text-gray-500">OR</div>
                <div class="flex-1 h-px bg-gray-600" ></div>
            </div>


            <button class="bg-gray-200 hover:bg-gray-300 flex items-center justify-center text-gray-700 font-bold py-2 px-4 rounded-sm w-full mt-4">
                <img src="http://www.svgrepo.com/show/475656/google-color.svg" class="w-5 h-5 mr-2 "  alt="Google">
                Continue with Google
            </button>


             <p class="text-center text-gray-500 text-sm mt-3"> Don't have an account? <a href="/register" class="text-red-500 hover:underline">Sign up</a>
            </p>
            
     </form>
    </div>

    
</x-layout>