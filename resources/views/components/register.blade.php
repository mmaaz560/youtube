<x-layout>
    <div class="flex my-10 justify-center items-center min-h-screen">
        <form action="/register" method="POST" class="xl:w-[40%] bg-gray-100 shadow-2xl rounded-xl p-5 lg:w-[60%] md:w-[75%] sm:w-[85%]">
          @csrf
            <div class="text-center mt-1 ">
               <h1 class="font-bold text-2xl">
                     <span class="text-red-600">You</span>Tube
               </h1>
               <p class="font-semibold mt-1 text-gray-500">Create an Account</p>
            </div>

            <div class="mt-1">
                <label for="full-name" class="block text-gray-500 font-medium mb-2 ">Full Name</label>
                <input type="text" name="name" id="full-name"  placeholder="Enter your full name" class="bg-gray-100 border border-gray-300 rounded-sm w-full py-2 px-4 focus:outline-none focus:ring-1 focus:ring-blue-300">
            </div>

            <div class="mt-1">
                <label for="full-name" class="block text-gray-500 font-medium mb-2 ">Email</label>
                <input type="text" name="email" id="full-name"  placeholder="Enter your email" class="bg-gray-100 border border-gray-300 rounded-sm w-full py-2 px-4 focus:outline-none focus:ring-1 focus:ring-blue-300">
            </div>

            <div class="mt-1">
                <label for="full-name" class="block text-gray-500 font-medium mb-2 ">Password</label>
                <input type="text" name="password" id="full-name"  placeholder="Enter your password" class="bg-gray-100 border border-gray-300 rounded-sm w-full py-2 px-4 focus:outline-none focus:ring-1 focus:ring-blue-300">
            </div>

            <div class="mt-1">
                <label for="full-name" class="block text-gray-500 font-medium mb-2 ">Confirm Password</label>
                <input type="text" name="confirm_password" id="full-name"  placeholder="Confirm your password" class="bg-gray-100 border border-gray-300 rounded-sm w-full py-2 px-4 focus:outline-none focus:ring-1 focus:ring-blue-300">
            </div>

            <button type="submit" class="bg-red-500 text-white font-bold py-2 px-4 mt-3 w-full rounded-sm hover:bg-red-700 focus:outline-none focus:ring-1 focus:ring-blue-300">
                Create Account
            </button>


            <div class="flex justify-center mt-3 items-center gap-3">
                <div class="flex-1 h-px bg-gray-600" ></div>
                <div class="text-sm text-gray-500">OR</div>
                <div class="flex-1 h-px bg-gray-600" ></div>
            </div>


            <button class="bg-gray-200 hover:bg-gray-300 flex items-center justify-center text-gray-700 font-bold py-2 px-4 rounded-sm w-full mt-4">
                <img src="http://www.svgrepo.com/show/475656/google-color.svg" class="w-5 h-5 mr-2 "  alt="Google">
                Continue with Google
            </button>

            <p class="text-center text-gray-500 text-sm mt-3">
                Already have an account? <a href="/login" class="text-red-500 hover:underline">Sign in</a>
            </p>
        </form>
    </div>
</x-layout>