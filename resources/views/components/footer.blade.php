<div class="w-screen h-[400px] bg-lk-main absolute mt-20 flex flex-col justify-center items-center">
    <div class="w-3/5 h-14 border-b-[1px] border-white opacity-70 mb-4 flex items-end justify-end pb-2">
        <p class="text-white text-sm font-semibold">Always Moving Forward</p>
    </div>
    <div class="w-3/5 h-full grid grid-cols-3">
        <span class="col-span-1 w-full h-full">
            <div class="w-full h-1/6 flex items-center">
                <p class="text-lg text-white">თეგები</p>
            </div>
            <div class="w-full h-5/6 flex flex-col items-start py-4 space-y-1">
                <a href="/cards">
                    <p class="text-white text-md hover:text-black duration-200">ბარათები</p>
                </a>
                <a href="/stations">
                    <p class="text-white text-md hover:text-black duration-200">სადგურები</p>
                </a>
                <a href="/news">
                    <p class="text-white text-md hover:text-black duration-200">სიახლეები</p>
                </a>
                @auth
                    <a href="/cabinet">
                        <p class="text-white text-md hover:text-black duration-200">კაბინეტი</p>
                    </a>
                @endauth
                @guest
                    <a href="/login">
                        <p class="text-white text-md hover:text-black duration-200">ავტორიზაცია</p>
                    </a>
                    <a href="/register">
                        <p class="text-white text-md hover:text-black duration-200">რეგისტრაცია</p>
                    </a>
                @endguest
            </div>
        </span>
        <span class="col-span-1 w-full h-full">
            <div class="w-full h-1/6 flex items-center">
                <p class="text-lg text-white">გამოგვყევით</p>
            </div>
            <div class="w-full h-5/6 flex space-x-3">
                <i class='bx bxl-facebook-square text-4xl text-white hover:text-black duration-200'></i>
                <i class='bx bxl-instagram text-4xl text-white hover:text-black duration-200'></i>
            </div>
        </span>
    </div>
</div>
