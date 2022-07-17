<div class="w-3/4 h-screen bg-lk-main fixed top-0 -right-full duration-200 shadow-2xl flex justify-center items-center z-50" id="sidebar">
<p class="text-4xl font-bold absolute top-4 left-4 text-white" id="close">X</p>
<div class="w-full h-2/5 flex flex-col items-center justify-evenly">
    <a href="/cards">
        <p class="text-white text-md hover:text-black duration-200 font-semibold"> {{__('cards')}} </p>
    </a>
    <a href="/stations">
        <p class="text-white text-md hover:text-black duration-200 font-semibold">{{__('stations')}}</p>
    </a>
    <a href="/news">
        <p class="text-white text-md hover:text-black duration-200 font-semibold">{{__('news')}}</p>
    </a>
    <a href="/vacancies">
        <p class="text-white text-md hover:text-black duration-200 font-semibold">{{__('vacancies')}}</p>
    </a>
    <a href="/tenders">
        <p class="text-white text-md hover:text-black duration-200 font-semibold">{{__('tenders')}}</p>
    </a>
    @auth
        <a href="/cabinet">
            <p class="text-white text-md hover:text-black duration-200 font-semibold">{{__('cabinet')}}</p>
        </a>
    @endauth
    @guest
        <a href="/login">
            <p class="text-white text-md hover:text-black duration-200 font-semibold">{{__('login')}}</p>
        </a>
        <a href="/register">
            <p class="text-white text-md hover:text-black duration-200 font-semibold">{{__('register')}}</p>
        </a>
    @endguest
</div>
</div>

<script>
        document.getElementById('close').onclick = function () {
        document.getElementById('sidebar').style.right = "-400px";
    }

    document.getElementById('burger').onclick = function () {
        document.getElementById('sidebar').style.right = 0;
    }
</script>
