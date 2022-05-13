<x-layout>
    <x-navbar></x-navbar>
    <x-page-content>
        <div class="w-3/5 h-80 grid grid-cols-3 gap-9">
            <span class="col-span-1 w-full h-full rounded-xl bg-gray-200 p-8 flex flex-col justify-center items-center">
                <div class="w-full h-5/6 bg-green-500"></div>
                <a href="/card-order" class="w-3/4 h-12">
                    <button class="w-full h-full text-white rounded-xl bg-lk-main mt-5">ბარათის შეკვეთა</button>
                </a>
            </span>
            <span class="col-span-1 w-full h-full rounded-xl bg-gray-200 p-8 flex flex-col justify-center items-center">
                <div class="w-full h-5/6 bg-green-500"></div>
                <a href="/fuel-order" class="w-3/4 h-12">
                    <button class="w-full h-full text-white rounded-xl bg-lk-main mt-5">საწვავის შეკვეთა</button>
                </a>
            </span>
            <span class="col-span-1 w-full h-full rounded-xl bg-gray-200 p-8 flex flex-col justify-center items-center">
                <div class="w-full h-5/6 bg-green-500"></div>
                <a href="#" class="w-3/4 h-12">
                    <button class="w-full h-full text-white rounded-xl bg-lk-main mt-5">ნაშთის მართვა</button>
                </a>
            </span>
        </div>
        <div class="w-3/5 h-20 bg-lk-main mt-20 flex justify-center items-center">
            <p class="text-2xl text-white">შეკვეთები</p>
        </div>
        <div class="w-3/5 h-20 bg-slate-200 mt-2 grid grid-cols-8 border-b-[1px] border-lk-main">
            <span class="w-full h-full flex justify-center items-center col-span-1">#</span>
            <span class="w-full h-full flex justify-center items-center col-span-1">თარიღი</span>
            <span class="w-full h-full flex justify-center items-center col-span-1">შეკვეთის ტიპი</span>
            <span class="w-full h-full flex justify-center items-center col-span-2">გადასახდელი თანხა</span>
            <span class="w-full h-full flex justify-center items-center col-span-1">ინვოისი</span>
            <span class="w-full h-full flex justify-center items-center col-span-1">სტატუსი</span>
            <span class="w-full h-full flex justify-center items-center col-span-1"></span>
        </div>
        @foreach ($orders as $order)
            <div class="w-3/5 h-20 bg-slate-200 mt-2 grid grid-cols-8 hover:bg-slate-100 duration-200">
                <span
                    class="w-full h-full flex justify-center items-center col-span-1 text-md text-center">{{ $loop->iteration }}</span>
                <span
                    class="w-full h-full flex justify-center items-center col-span-1 text-md text-center">{{ $order->created_at }}</span>
                <span
                    class="w-full h-full flex justify-center items-center col-span-1 text-md text-center">{{ $order->order_type }}</span>
                <span
                    class="w-full h-full flex justify-center items-center col-span-2 text-md text-center">{{ $order->sum . ' ლ' }}</span>
                <span class="w-full h-full flex justify-center items-center col-span-1 text-md text-center"><a
                        href="/invoice/{{ $order->id }}">ინვოისი</a></span>
                <span class="w-full h-full flex justify-center items-center col-span-1 text-md text-center">
                    @switch($order->order_info)
                        @case('შეკვეთა მუშავდება')
                            <p> {{ $order->order_info }}</p>
                        @break

                        @case('შეკვეთა გაუქმებულია')
                            <p class="text-red-500 font-semibold"> {{ $order->order_info }}</p>
                        @break

                        @case('შეკვეთა ასახულია')
                            <p class="text-green-500"> {{ $order->order_info }}</p>
                        @break

                        @case('ბარათი დამზადებულია')
                            <p class="text-green-500"> {{ $order->order_info }}</p>
                        @break

                        @default
                    @endswitch
                </span>
                <span class="w-full h-full flex justify-center items-center col-span-1 text-md text-center">
                    @switch($order->order_info)
                        @case('შეკვეთა მუშავდება')
                            <form action="/order/{{ $order->id }}" class="w-2/3 h-10" method="POST">
                                @csrf
                                @method("PUT")
                                <button
                                    class="w-full h-full bg-lk-main text-sm text-white rounded-xl hover:bg-red-500 duration-200">გაუქმება</button>
                            </form>
                        @break

                        @case('შეკვეთა გაუქმებულია')
                            <form action="/order/{{ $order->id }}" class="w-2/3 h-10" method="POST">
                                @csrf
                                @method("PUT")
                                <button disabled
                                    class="w-full h-full bg-gray-600 text-sm text-white rounded-xl  duration-200">გაუქმება</button>
                            </form>
                        @break

                        @default
                    @endswitch
                </span>
            </div>
        @endforeach
    </x-page-content>
    <x-footer></x-footer>
</x-layout>
