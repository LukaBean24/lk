@props(['prices'])
<div class="w-11/12 lg:w-3/5 h-auto flex flex-col justify-center items-center mt-10 lg:grid lg:grid-cols-5 lg:gap-10">
    <span class="bg-white border-[1px] border-lk-main w-48 h-48 col-span-1 flex flex-col p-4 mt-8  ">
        <div class="w-full h-3/5 flex justify-center items-center">
            <img src="{{asset('images/price.jpg')}}" alt="Price">
        </div>
        <div class="mt-4 w-full h-2/5 flex justify-center items-center text-xl text-lk-main flex-col">
            <p>{{ $prices->super_ecto_100 }}</p>
            <p>Super Ecto 100</p>
        </div>
    </span>
    <span class="bg-white border-[1px] border-lk-main w-48 h-48 col-span-1 flex flex-col p-4 mt-8 ">
        <div class="w-full h-3/5 flex justify-center items-center">
            <img src="{{asset('images/price.jpg')}}" alt="Price">
        </div>
        <div class="mt-4 w-full h-2/5 flex justify-center items-center text-xl text-lk-main flex-col">
            <p>{{ $prices->super_ecto }}</p>
            <p>Super Ecto</p>
        </div>
    </span>
    <span class="bg-white border-[1px] border-lk-main w-48 h-48 col-span-1 flex flex-col p-4 mt-8 ">
        <div class="w-full h-3/5 flex justify-center items-center">
            <img src="{{asset('images/price.jpg')}}" alt="Price">
        </div>
        <div class="mt-4 w-full h-2/5 flex justify-center items-center text-xl text-lk-main flex-col">
            <p>{{ $prices->premium }}</p>
            <p class="text-center">Premium Avangard</p>
        </div>
    </span>
    <span class="bg-white border-[1px] border-lk-main w-48 h-48 col-span-1 flex flex-col p-4 mt-8 ">
        <div class="w-full h-3/5 flex justify-center items-center">
            <img src="{{asset('images/price.jpg')}}" alt="Price">
        </div>
        <div class="mt-4 w-full h-2/5 flex justify-center items-center text-xl text-lk-main flex-col">
            <p>{{ $prices->regular }}</p>
            <p>Euro Regular</p>
        </div>
    </span>
    <span class="bg-white border-[1px] border-lk-main w-48 h-48 col-span-1 flex flex-col p-4 mt-8 ">
        <div class="w-full h-3/5 flex justify-center items-center">
            <img src="{{asset('images/price.jpg')}}" alt="Price">
        </div>
        <div class="mt-4 w-full h-2/5 flex justify-center items-center text-xl text-lk-main flex-col">
            <p>{{ $prices->diesel }}</p>
            <p>Euro Diesel</p>
        </div>
    </span>
</div>
<div class="w-11/12 lg:w-3/5 h-10 flex justify-start items-center mt-6">
    <a href="/prices-history">
        <p class="text-lk-main text-lg font-semibold hover:text-black duration-150">
            ფასების ისტორია
        </p>
    </a>
</div>
