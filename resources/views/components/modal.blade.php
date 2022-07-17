<div class="w-screen h-screen fixed left-0 top-0 z-50 flex justify-center items-center" id="modal">
    <div class="w-full h-full bg-black opacity-50"></div>
    <div class="w-3/4 md:w-1/2 min-h-[250px] h-auto bg-lk-main absolute flex justify-center items-center text-center p-8">
        <p class="absolute top-3 right-4 text-4xl text-white cursor-pointer hover:text-black" id="x">X</p>
        <p class="text-xl text-white font-semibold">
            {{$notification->body}}
        </p>
    </div>
</div>
<script>
    document.getElementById('x').onclick = () => {
        document.getElementById('modal').style.display = 'none'
    }
</script>
