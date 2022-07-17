<x-layout>
<div class="w-screen h-24 border-t-[1px] border-b-[1px] border-lk-main mt-7 flex justify-center items-center">
<div class="w-11/12 lg:w-3/5 h-full grid grid-cols-8">
    <span class="col-span-2 h-full flex justify-center items-center">
        <img src="https://brandlogos.net/wp-content/uploads/2022/01/lukoil-logo-brandlogo.net_.png" width="70"
                    alt="Logo">
    </span>
    <div class="col-span-6 flex justify-end items-end">
        <div class="w-40 h-10  flex items-center justify-center">
            <button class="text-black text-xl hover:text-lk-main duration-200">მთავარი</button>
        </div>
        <div class="w-40 h-10  flex items-center justify-center">
            <button class="text-black text-xl hover:text-lk-main duration-200">სადგურები</button>
        </div>
        <div class="w-40 h-10  flex items-center justify-center group relative">
            <button class="text-black text-xl hover:text-lk-main duration-200">კომპანია</button>
            <div class="hidden w-40 h-40 group-hover:flex flex-col justify-evenly items-center absolute bg-lk-main min-w-40 z-10 -bottom-40 text-white">
                <a href="/management" class="hover:text-black duration-200">მენეჯმენტი</a>
                <a href="/about-us" class="hover:text-black duration-200">ჩვენს შესახებ</a>
                <a href="/contact" class="hover:text-black duration-200">კონტაქტი</a>
            </div>
        </div>
        <div class="w-40 h-10  flex items-center justify-center">
            <button class="text-black text-xl hover:text-lk-main duration-200">სიახლეები</button>
        </div>
        <div class="w-40 h-10  flex items-center justify-center relative group">
            <button class="text-black text-xl hover:text-lk-main duration-200">კაბინეტი</button>
            <div class="hidden h-40 w-40 absolute group-hover:flex justify-evenly items-center flex-col bg-lk-main z-10 -bottom-40 text-white">
                <a href="/register" class="hover:text-black duration-200">რეგისტრაცია</a>
                <a href="/login" class="hover:text-black duration-200">შესვლა</a>
            </div>
        </div>
    </div>
</div>
</div>
</x-layout>
