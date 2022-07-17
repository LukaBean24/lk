<x-layout>
    <x-admin-navbar />
    <div class="w-screen h-auto flex flex-col justify-center items-center">
        <div class="w-4/5 h-40 mt-8 flex flex-col justify-center items-center">
        @if ($active == 'true')
        <form action="/admin/passive" method="post">
            @csrf
            <button class="text-white bg-lk-main rounded-lg px-8 py-4">შეკვეთების გამორთვა</button>
        </form>
        @else
        <form action="/admin/active" method="post">
            @csrf
            <button class="text-white bg-lk-main rounded-lg px-8 py-4">შეკვეთების ჩართვა</button>
        </form>
        @endif
    </div>
        <x-price-index :prices="$prices"/>
        <div class="w-4/5 h-auto flex flex-col justify-center items-center">
            <div class="w-full h-60 mt-10">
                <div class="w-full h-1/4 bg-lk-main flex justify-center items-center">
                    <p class="text-white text-2xl font-semibold">
                        ფილტრაცია
                    </p>
                </div>
                    <form action="" class="წ-full h-3/4 flex items-center justify-between px-10 bg-white border-2 border-lk-main" method="GET">
                        <span class="space-x-4">
                            <input type="date" class="w-56 h-10 rounded-md px-3 bg-white border-[1px] border-lk-main text-lk-main" name="start_date">
                            <input type="date" class="w-56 h-10 rounded-md px-3 bg-white border-[1px] border-lk-main text-lk-main" name="end_date">
                            <input type="text" class="w-56 h-10 rounded-md px-3 bg-white border-[1px] border-lk-main" name="search">
                        </span>
                        <button type="submit" class="w-56 h-10 rounded-md text-center border-2 text-white bg-lk-main font-semibold hover:border-2 hover:border-lk-main hover:bg-white hover:text-lk-main duration-200">გაფილტვრა</button>
                    </form>
            </div>
        </div>
    </div>
    @if (!$sum == null)
        <div class="w-screen h-auto flex justify-center items-center">
        <div class="w-4/5 h-40 bg-lk-main mt-8">
            <div class="h-1/2 w-full flex justify-evenly items-center">
                <p class="text-white text-md font-semibold">შემოსული ინვოისები: {{$sum['sum_invoice'] == null ? "" : $sum['sum_invoice']}}</p>
                <p class="text-white text-md font-semibold">გაუქმებული ინვოისები: {{$sum['sum_blocked']}}</p>
                <p class="text-white text-md font-semibold">შეკვეთა მუშავდება: {{$sum['sum_pending']}}</p>
            </div>
            <div class="h-1/2 w-full flex justify-evenly items-center">
                <p class="text-white text-md font-semibold">საწვავის ჯამური რაოდენობა: {{$sum['sum_liter']}}</p>
                <p class="text-white text-md font-semibold">დასმული ინვოისები: {{$sum['sum_made']}}</p>
                <p class="text-white text-md font-semibold">ჯამურად გადახდილი თანხა: {{$sum['sum_money']}} ლ.</p>
            </div>
        </div>
    </div>
    @endif
    <div class="w-screen h-auto flex justify-center items-center">
        <x-admin-order-table :orders="$orders"></x-admin-order-table>
    </div>
</x-layout>
