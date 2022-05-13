<nav class="fixed top-0 h-[250px] bg-white">
    <div class="w-screen h-8 bg-lk-main flex justify-center items-center">
        <div class="w-3/5 h-full grid grid-cols-5">
            <span class="col-span-2 flex items-center">
                <p class="text-white text-sm">გლობალური ბიზნესი</p>
            </span>
            <span class="col-span-3 flex justify-end items-center space-x-6">
                <a href="/">
                    <p class="text-white text-sm duration-200 hover:text-black">მთავარი</p>
                </a>
                <a href="/vacancies">
                    <p class="text-white text-sm duration-200 hover:text-black">ვაკანსიები</p>
                </a>
                <a href="/tenders">
                    <p class="text-white text-sm duration-200 hover:text-black">ტენდერები</p>
                </a>
                <div class="h-full flex items-center">
                    <input type="text" class="h-2/3">
                    <span class="w-8 h-2/3 bg-white flex justify-around items-center">
                        <span class="h-2/3 w-[1px] bg-lk-main"></span>
                        <i class='bx bx-search-alt-2 text-sm text-lk-main'></i>
                    </span>
                </div>
                <span class="w-[1px] h-2/3 bg-white"></span>
                <select name="" id="" class="bg-transparent text-white text-sm">
                    <option value="">KA</option>
                    <option value="">EN</option>
                </select>
                @auth
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="text-white text-sm duration-200 hover:text-black">Logout</button>
                    </form>
                @endauth
            </span>
        </div>
    </div>

    <div class="w-screen h-24 border-t-[1px] border-b-[1px] border-lk-main mt-7 flex justify-center items-center">
        <div class="w-3/5 h-full grid grid-cols-8">
            <span class="col-span-2 flex items-center">
                <img src="https://brandlogos.net/wp-content/uploads/2022/01/lukoil-logo-brandlogo.net_.png" width="70"
                    alt="Logo">
            </span>
            <span class="col-span-6 flex items-end justify-end space-x-8 pb-2 relative">
                <a href="/cards">
                    <p class="text-xl text-black duration-200 hover:text-lk-main">ბარათები</p>
                </a>
                <a href="/stations">
                    <p class="text-xl text-black duration-200 hover:text-lk-main">სადგურები</p>
                </a>
                <a href="#">
                    <p class="text-xl text-black duration-200 hover:text-lk-main" id="company">კომპანია</p>
                </a>
                <div id="company-down"
                    class="w-48 h-48 bg-lk-main hidden absolute -bottom-48 right-1/4 flex-col justify-evenly items-center shadow-lg shadow-black">
                    <p class="text-xl hover:text-black duration-200 text-white">მენეჯმენტი</p>
                    <p class="text-xl hover:text-black duration-200 text-white">კონტაქტი</p>
                </div>
                <a href="/news">
                    <p class="text-xl text-black duration-200 hover:text-lk-main">სიახლეები</p>
                </a>
                <a href="/cabinet">
                    <p class="text-xl text-black duration-200 hover:text-lk-main" id="cabinet">კაბინეტი</p>
                </a>
                @guest
                    <div id="cabinet-down"
                        class="w-48 h-48 bg-lk-main hidden absolute -bottom-48 -right-24 flex-col justify-evenly items-center shadow-lg shadow-black">
                        <a href="/login">
                            <p class="text-xl hover:text-black duration-200 text-white">ავტორიზაცია</p>
                        </a>
                        <a href="/register">
                            <p class="text-xl hover:text-black duration-200 text-white">რეგისტრაცია</p>
                        </a>
                    </div>
                @endguest
            </span>
        </div>
    </div>
    <div class="w-screen h-24 flex justify-center items-center">
        <div class="w-3/5 h-full flex items-center">
            <p class="text-2xl text-black font-bold">LUKOIL || GEORGIA</p>
        </div>
    </div>
</nav>
