<x-layout>
    <x-admin-navbar/>
    <div class="w-screen h-auto flex flex-col justify-start items-center">
        <form action="" method="GET" class="w-4/5 h-64 bg-lk-main mt-20">
            <div class="w-full h-1/3 flex justify-center items-center border-2 bg-white border-lk-main">
                <p class="text-lk-main text-2xl font-semibold">
                    მომხმარებლები
                </p>
            </div>
            <div class="w-full h-2/3 flex justify-between items-center p-8">
                <input type="text" name="search" class="w-74 h-8 rounded-lg p-2" placeholder="საიდენტიფიკაციო კოდი,დასახელება">
                <button class="w-64 h-8 bg-white border-2 border-white rounded-lg text-lk-main hover:text-white hover:bg-transparent font-semibold duration-150">მოძებნა</button>
            </div>
        </form>
        <x-users-table :users="$users" />
    </div>
</x-layout>
