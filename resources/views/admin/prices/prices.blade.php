<x-layout>
    <x-admin-navbar/>
    <div class="w-screen h-auto flex flex-col justify-start items-center mt-20">
        <div class="w-4/5 h-20 bg-lk-main flex justify-center items-center">
            <p class="text-2xl text-white font-semibold">
                ფასები
            </p>
        </div>
        <form action="/admin/prices/update" method="post"
            class="w-4/5 h-auto rounded-lg bg-lk-main mt-8"
            >
            @csrf
            <div class="w-full h-40 grid grid-cols-6 p-8">
                <div class="col-span-1 w-full h-full flex flex-col items-start justify-center space-y-3">
                    <label for="super_ecto_100" class="text-white text-md font-semibold">Super Ecto 100</label>
                    <input type="text" name="super_ecto_100" class="w-52 h-10 rounded-lg p-2" value="{{$price->super_ecto_100}}">
                </div>
                <div class="col-span-1 w-full h-full flex flex-col items-start justify-center space-y-3">
                    <label for="super_ecto" class="text-white text-md font-semibold">Super Ecto</label>
                    <input type="text" name="super_ecto" value="{{$price->super_ecto}}" class="w-52 h-10 rounded-lg p-2">
                </div>
                <div class="col-span-1 w-full h-full flex flex-col items-start justify-center space-y-3">
                    <label for="premium" class="text-white text-md font-semibold">Premium Avangard</label>
                    <input type="text" name="premium" value="{{$price->premium}}" class="w-52 h-10 rounded-lg p-2">
                </div>
                <div class="col-span-1 w-full h-full flex flex-col items-start justify-center space-y-3">
                    <label for="regular" class="text-white text-md font-semibold">Euro Regular</label>
                    <input type="text" name="regular" value="{{$price->regular}}" class="w-52 h-10 rounded-lg p-2">
                </div>
                <div class="col-span-1 w-full h-full flex flex-col items-start justify-center space-y-3">
                    <label for="diesel" class="text-white text-md font-semibold">Euro Diesel</label>
                    <input type="text" name="diesel" value="{{$price->diesel}}" class="w-52 h-10 rounded-lg p-2">
                </div>
                <div class="col-span-1 w-full h-full flex flex-col items-start justify-center space-y-3">
                    <label for="super_ecto" class="text-md font-semibold text-transparent">შეცვლის ღილაკი</label>
                    <button type="submit" class="w-full h-10 bg-white hover:bg-transparent border-2 border-white hover:text-white text-lk-main rounded-lg duration-150 font-semibold">შეცვლა</button>
                </div>
            </div>
        </form>
        <div class="w-4/5 h-20 bg-lk-main flex justify-center items-center mt-20">
            <p class="text-2xl text-white font-semibold">
                ფასდაკლებები
            </p>
        </div>
        <form action="/admin/discounts/update" method="post"
            class="w-4/5 h-auto rounded-lg bg-lk-main mt-8"
            >
            @csrf
            @method("PUT")
            <div class="w-full h-40 grid grid-cols-6 p-8">
                <div class="col-span-1 w-full h-full flex flex-col items-start justify-center space-y-3">
                    <label for="discount1" class="text-white text-md font-semibold">50-150</label>
                    <input type="text" name="discount1" class="w-52 h-10 rounded-lg p-2" value="{{$discounts->discount1}}">
                </div>
                <div class="col-span-1 w-full h-full flex flex-col items-start justify-center space-y-3">
                    <label for="discount2" class="text-white text-md font-semibold">150-500</label>
                    <input type="text" name="discount2" value="{{$discounts->discount2}}" class="w-52 h-10 rounded-lg p-2">
                </div>
                <div class="col-span-1 w-full h-full flex flex-col items-start justify-center space-y-3">
                    <label for="discount3" class="text-white text-md font-semibold">500-1000</label>
                    <input type="text" name="discount3" value="{{$discounts->discount3}}" class="w-52 h-10 rounded-lg p-2">
                </div>
                <div class="col-span-1 w-full h-full flex flex-col items-start justify-center space-y-3">
                    <label for="discount4" class="text-white text-md font-semibold">1000-5000</label>
                    <input type="text" name="discount4" value="{{$discounts->discount4}}" class="w-52 h-10 rounded-lg p-2">
                </div>
                <div class="col-span-1 w-full h-full flex flex-col items-start justify-center space-y-3">
                    <label for="discount5" class="text-white text-md font-semibold">5000-1500</label>
                    <input type="text" name="discount5" value="{{$discounts->discount5}}" class="w-52 h-10 rounded-lg p-2">
                </div>
                <div class="col-span-1 w-full h-full flex flex-col items-start justify-center space-y-3">
                    <label for="super_ecto" class="text-md font-semibold text-transparent">შეცვლის ღილაკი</label>
                    <button type="submit" class="w-full h-10 bg-white hover:bg-transparent border-2 border-white hover:text-white text-lk-main rounded-lg duration-150 font-semibold">შეცვლა</button>
                </div>
            </div>
        </form>
        <div class="w-4/5 h-20 bg-lk-main flex justify-center items-center mt-20">
            <p class="text-2xl text-white font-semibold">
                ფასების ისტორია
            </p>
        </div>
        <x-price-table :prices="$prices" />
    </div>
</x-layout>
