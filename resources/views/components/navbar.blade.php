@props(['user'])
<nav class="fixed top-0 h-[250px] bg-white z-40">
    <div class="w-screen h-8 bg-lk-main flex justify-center items-center">
        <div class="w-11/12 lg:w-3/5 h-full grid grid-cols-5">
            <span class="col-span-2 flex items-center px-4 lg:px-0">
                <a href="http://lukoil.com">
                    <p class="text-white text-sm whitespace-nowrap">{{__('global_bussines')}}</p>
                </a>
            </span>
            <span class="col-span-3 lg:flex justify-end items-center space-x-6 hidden">
                <a href="/">
                    <p class="text-white text-sm duration-200 hover:text-black">{{__('main')}}</p>
                </a>
                <a href="/vacancies">
                    <p class="text-white text-sm duration-200 hover:text-black">{{__('vacancies')}}</p>
                </a>
                <a href="/tenders">
                    <p class="text-white text-sm duration-200 hover:text-black">{{__('tenders')}}</p>
                </a>
                <div class="h-full items-center hidden xl:flex">
                    <input type="text" class="h-2/3">
                    <span class="w-8 h-2/3 bg-white flex justify-around items-center">
                        <span class="h-2/3 w-[1px] bg-lk-main"></span>
                        <i class='bx bx-search-alt-2 text-sm text-lk-main'></i>
                    </span>
                </div>
                <span class="w-[1px] h-2/3 bg-white"></span>
                @switch(app()->currentLocale())
                    @case("en")
                    <a href="/lang/ge">
                        <p class="text-md text-white">GE</p>
                    </a>
                        @break
                @case('ge')
                <a href="/lang/en">
                    <p class="text-md text-white">EN</p>
                </a>
                @break
                    @default

                @endswitch
                @auth
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="text-white text-sm duration-200 hover:text-black"> {{__('logout')}} </button>
                    </form>
                @endauth
            </span>
        </div>
    </div>

    <div class="w-screen h-24 border-t-[1px] border-b-[1px] border-lk-main mt-7 flex justify-center items-center">
        <div class="w-11/12 lg:w-3/5 h-full grid grid-cols-8">
            <span class="col-span-2 flex items-center">
                <img src="https://brandlogos.net/wp-content/uploads/2022/01/lukoil-logo-brandlogo.net_.png" width="70"
                    alt="Logo">
            </span>
            <span class="col-span-6 xl:flex items-end justify-end relative hidden">
<div class="w-40 h-10  flex items-center justify-center">
            <a href="/cards"><button class="text-black text-xl hover:text-lk-main duration-200">ბარათები</button></a>
        </div>
        <div class="w-40 h-10  flex items-center justify-center">
            <a href="/stations"><button class="text-black text-xl hover:text-lk-main duration-200">სადგურები</button></a>
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
            <a href="/news"><button class="text-black text-xl hover:text-lk-main duration-200">სიახლეები</button></a>
        </div>
       @guest
            <div class="w-40 h-10  flex items-center justify-center relative group">
                <button class="text-black text-xl hover:text-lk-main duration-200">კაბინეტი</button>
                <div class="hidden h-40 w-40 absolute group-hover:flex justify-evenly items-center flex-col bg-lk-main z-10 -bottom-40 text-white">
                    <a href="/register" class="hover:text-black duration-200">რეგისტრაცია</a>
                    <a href="/login" class="hover:text-black duration-200">შესვლა</a>
                </div>
            </div>
       @endguest
       @auth
           <div class="w-40 h-10  flex items-center justify-center relative group">
                <a href="/cabinet"><button class="text-black text-xl hover:text-lk-main duration-200">კაბინეტი</button></a>
            </div>
       @endauth
       @auth
           @if (auth()->user()->is_admin == 'true')
            <div class="w-40 h-10  flex items-center justify-center relative group">
                <a href="/admin"><button class="text-black text-xl hover:text-lk-main duration-200">ადმინ პანელი</button></a>
            </div>
       @endif
       @endauth
            </span>
            <span class="col-span-6 w-11/12 h-full flex justify-end items-center px-4 xl:hidden">
                <div class="w-12 h-10 flex flex-col justify-between items-center" id="burger">
                    <div class="w-11/12 h-2 bg-black"></div>
                    <div class="w-11/12 h-2 bg-black"></div>
                    <div class="w-11/12 h-2 bg-black"></div>
                </div>
            </span>
        </div>
    </div>
    <div class="w-screen h-24 flex justify-center items-center">
        <div class="w-11/12 lg:w-3/5 h-full flex items-center py-4">
            <p class="text-2xl text-black font-bold">LUKOIL || GEORGIA</p>
        </div>
    </div>
</nav>
