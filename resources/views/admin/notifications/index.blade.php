<x-layout>
    <x-admin-navbar/>
    <div class="w-screen h-auto flex flex-col justify-start items-center mt-20">
        <div class="w-4/5 h-20 bg-lk-main flex justify-center items-center">
            <p class="text-white text-xl font-semibold">
                შეტყობინება
            </p>
        </div>
        <form class="w-4/5 h-auto bg-lk-main mt-10 mb-10 rounded-lg" action="/admin/notification/create" method="POST">
            @csrf
            <div class="w-full h-auto flex flex-col items-start justify-center p-8 space-y-4">
                <label for="body_en" class="text-white text-lg font-semibold">
                    ტექსტი (EN)
                </label>
                <textarea name="body_en" class="w-1/2 h-64 rounded-lg p-2" cols="30" rows="10">{{old("body_en")}}</textarea>
            </div>
            <div class="w-full h-auto flex flex-col items-start justify-center p-8 space-y-4">
                <label for="body_ge" class="text-white text-lg font-semibold">
                    ტექსტი (GE)
                </label>
                <textarea name="body_ge" class="w-1/2 h-64 rounded-lg p-2" cols="30" rows="10">{{old("body_en")}}</textarea>
            </div>
            <div class="w-full h-20 flex justify-center items-center">
                <button class="text-lk-main bg-white border-2 border-white w-64 h-10 rounded-lg font-semibold hover:bg-lk-main hover:text-white duration-150">დამატება</button>
            </div>
        </form>
        <x-notification-table :notifications="$notifications"/>
    </div>
</x-layout>
