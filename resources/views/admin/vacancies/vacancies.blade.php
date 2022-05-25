<x-layout>
    <x-admin-navbar/>
    <div class="w-screen h-auto flex flex-col justify-start items-center mt-20">
        <div class="w-11/12 xl:w-4/5 lg:w-4/5 h-20 bg-lk-main flex justify-center items-center relative">
            <p class="text-2xl text-white font-semibold">ბლოგი</p>
            <button class="w-40 h-8 bg-lk-main border-2 border-white rounded-md text-white absolute right-4"><a href="/admin/posts/create">დამატება</a></button>
        </div>
        <x-vacancies-table :vacancies="$vacancies"/>
    </div>
</x-layout>

