@props(['prices'])

<div class="w-3/5 h-auto mt-10 grid grid-cols-5 gap-10">
    <span class="bg-white border-[1px] border-lk-main w-48 h-48 col-span-1 flex flex-col p-4">
        <div class="w-full h-3/5">
            <img src="https://lukoil.rs/FileSystem/4/6803.jpg" alt="Price">
        </div>
        <div class="mt-4 w-full h-2/5 flex justify-center items-center text-xl text-lk-main">
            {{ $prices->super_ecto_100 }}</div>
    </span>
    <span class="bg-white border-[1px] border-lk-main w-48 h-48 col-span-1 flex flex-col p-4">
        <div class="w-full h-3/5">
            <img src="https://lukoil.rs/FileSystem/4/6803.jpg" alt="Price">
        </div>
        <div class="mt-4 w-full h-2/5 flex justify-center items-center text-xl text-lk-main">
            {{ $prices->super_ecto }}</div>
    </span>
    <span class="bg-white border-[1px] border-lk-main w-48 h-48 col-span-1 flex flex-col p-4">
        <div class="w-full h-3/5">
            <img src="https://lukoil.rs/FileSystem/4/6803.jpg" alt="Price">
        </div>
        <div class="mt-4 w-full h-2/5 flex justify-center items-center text-xl text-lk-main">
            {{ $prices->premium }}</div>
    </span>
    <span class="bg-white border-[1px] border-lk-main w-48 h-48 col-span-1 flex flex-col p-4">
        <div class="w-full h-3/5">
            <img src="https://lukoil.rs/FileSystem/4/6803.jpg" alt="Price">
        </div>
        <div class="mt-4 w-full h-2/5 flex justify-center items-center text-xl text-lk-main">
            {{ $prices->regular }}</div>
    </span>
    <span class="bg-white border-[1px] border-lk-main w-48 h-48 col-span-1 flex flex-col p-4">
        <div class="w-full h-3/5">
            <img src="https://lukoil.rs/FileSystem/4/6803.jpg" alt="Price">
        </div>
        <div class="mt-4 w-full h-2/5 flex justify-center items-center text-xl text-lk-main">
            {{ $prices->diesel }}
        </div>
    </span>
</div>
