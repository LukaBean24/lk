<x-layout>
    <x-navbar></x-navbar>
    <x-page-content>
        <div class="w-2/6 h-[650px] bg-lk-main flex flex-col justify-start items-center rounded-xl">
            <div class="w-full h-1/6 flex justify-center items-center">
                <p class="text-white text-4xl">ავტორიზაცია</p>
            </div>
            <form class="w-full h-5/6 flex flex-col justify-center items-center py-10" action="/login" method="post">
                @csrf
                <div class="w-3/5 h-20 flex flex-col justify-center items-start">
                    <label for="customer_id" class="text-white text-md">საიდენტიფიკაციო/პირადი ნომერი</label>
                    <input type="number" name="customer_id" class="w-full h-9 mt-2 rounded-md p-2">
                </div>
                <div class="w-3/5 h-20 flex flex-col justify-center items-start mt-4">
                    <label for="password" class="text-white text-md">პაროლი</label>
                    <input type="password" name="password" class="w-full h-9 mt-2 rounded-md p-2">
                </div>
                <div class="w-3/5 h-14 mt-14">
                    <button type="submit"
                        class="w-full h-full border-2 border-white text-white text-xl bg-lk-main rounded-md hover:text-lk-main hover:bg-white">შესვლა</button>
                </div>
            </form>
        </div>

    </x-page-content>
    <x-footer></x-footer>
</x-layout>
