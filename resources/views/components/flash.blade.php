@if (session('message'))
<div id="message" class="fixed top-5 right-5 z-600 flex items-center gap-3 bg-white/90 backdrop-blur-md border border-green-200 text-green-700 px-6 py-4 rounded-2xl shadow-2xl transition-all duration-500 translate-y-0 opacity-100">

    <div class="flex items-center justify-center w-10 h-10 bg-green-500 text-white rounded-full text-lg">
        ✓
    </div>

    <div>
        <p class="font-semibold">Success</p>
        <p class="text-sm text-gray-600">
            {{ session('message') }}
        </p>
    </div><div id="message" class="fixed top-5 right-5 z-50 flex items-center gap-4 px-6 py-4 rounded-2xl shadow-2xl 
bg-linear-to-r from-green-500 via-emerald-500 to-teal-500 
text-white backdrop-blur-md border border-white/20 
transition-all duration-500 animate-bounce">

    <!-- Icon -->
    <div class="flex items-center shrink-0 justify-center w-12 h-12 bg-white/20 rounded-full text-2xl shadow-inner">
        ✓
    </div>

    <!-- Text -->
    <div>
        <p class="font-bold text-lg">Success 🎉</p>
        <p class=" text-white/90">
            {{ session('message') }}
        </p>
    </div>

</div>

<script>
    setTimeout(() => {
        const msg = document.getElementById('message');
        msg.style.opacity = '0';
        msg.style.transform = 'translateY(-30px)';
        setTimeout(() => {
            msg.remove();
        }, 500);
    }, 2500);
</script>

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