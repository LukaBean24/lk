<x-layout>
    <div class="w-screen min-h-screen flex flex-col justify-start items-center">
        <div class="w-4/5 h-24 bg-lk-main mt-8 px-8 flex justify-evenly shadow-xl">
            <div class="w-24 h-full p-2">
                <img src="http://www.lukoil.ge/img/luk.png" alt="Logo" class="w-full h-full object-cover object-center">
            </div>
            <div class="w-full h-full flex justify-center items-center">
                <p class="text-4xl text-white">{{ $order->order_type . 'ს' }} შეკვეთის ინვოისი</p>
            </div>
        </div>
        <div class="w-4/5 h-56 mt-8 flex justify-between">
            <div class="w-1/5 h-full">
                <div class="w-full h-1/6 flex justify-center items-center">
                    <p class="text-sm text-black font-semibold">
                        მყიდველი
                    </p>
                </div>
                <div class="w-full h-1/6 flex justify-center items-center mt-4">
                    <div class="w-full h-2/3 border-[1px] border-black flex justify-start items-center px-4">
                        @switch($order->user->is_company)
                            @case('false')
                                <p class="text-sm text-black">
                                    {{ $order->user->customer_name . ' ' . $order->user->customer_last }}</p>
                            @break

                            @case('true')
                                <p class="text-sm text-black"> {{ $order->user->company_name }} </p>
                            @break

                            @default
                        @endswitch
                    </div>
                </div>
                <div class="w-full h-1/6 flex justify-center items-center mt-2">
                    <div class="w-full h-2/3 border-[1px] border-black flex justify-start items-center px-4">
                        <p class="text-sm text-black">
                            {{ $order->user->customer_id }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-1/5 h-full">
                <div class="w-full h-1/6 flex justify-center items-center">
                    <p class="text-sm text-black font-semibold">
                        გამყიდველი
                    </p>
                </div>
                <div class="w-full h-1/6 flex justify-center items-center mt-4">
                    <div class="w-full h-2/3 border-[1px] border-black flex justify-start items-center px-4">
                        <p class="text-sm text-black">
                            შპს ლუკოილ ჯორჯია
                        </p>
                    </div>
                </div>
                <div class="w-full h-1/6 flex justify-center items-center mt-2">
                    <div class="w-full h-2/3 border-[1px] border-black flex justify-start items-center px-4">
                        <p class="text-sm text-black">
                            204976302
                        </p>
                    </div>
                </div>
                <div class="w-full h-1/6 flex justify-center items-center mt-2">
                    <div class="w-full h-2/3 border-[1px] border-black flex justify-start items-center px-4">
                        <p class="text-sm text-black">
                            INVOICE-{{ $order->id }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-4/5 h-10 grid grid-cols-12 gap-4">
            <div class="col-span-3 flex justify-center items-center">
                <p class="text-sm text-black">
                    პროდუქტი
                </p>
            </div>
            <div class="col-span-1 flex justify-center items-center">
                <p class="text-sm text-black">
                    ერთეულის ფასი
                </p>
            </div>
            <div class="col-span-2 flex justify-center items-center">
                <p class="text-sm text-black">
                    რაოდენობა
                </p>
            </div>
            <div class="col-span-2 flex justify-center items-center">
                <p class="text-sm text-black">
                    ფასდაკლება
                </p>
            </div>
            <div class="col-span-2 flex justify-center items-center">
                <p class="text-sm text-black">
                    სპეციალური ფასი
                </p>
            </div>
            <div class="col-span-2 flex justify-center items-center">
                <p class="text-sm text-black">
                    თანხა
                </p>
            </div>
        </div>
        <div class="w-4/5 h-80 grid grid-cols-12 gap-4">
            <div class="col-span-3">
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full border-[1px] border-black flex justify-center items-center">
                        <p class="text-sm text-black">
                            პლასტიკური ბარათი
                        </p>
                    </div>
                </div>
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full border-[1px] border-black flex justify-center items-center">
                        <p class="text-sm text-black">
                            Super Ecto 100
                        </p>
                    </div>
                </div>
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full border-[1px] border-black flex justify-center items-center">
                        <p class="text-sm text-black">
                            Super Ecto
                        </p>
                    </div>
                </div>
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full border-[1px] border-black flex justify-center items-center">
                        <p class="text-sm text-black">
                            Premium Avangard
                        </p>
                    </div>
                </div>
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full border-[1px] border-black flex justify-center items-center">
                        <p class="text-sm text-black">
                            Euro Regular
                        </p>
                    </div>
                </div>
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full border-[1px] border-black flex justify-center items-center">
                        <p class="text-sm text-black">
                            Euro Diesel
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-span-1">
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full flex justify-center items-center border-[1px] border-black">
                        <p class="text-sm text-black">
                            5.00
                        </p>
                    </div>
                </div>
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full flex justify-center items-center border-[1px] border-black">
                        <p class="text-sm text-black">
                            {{ $order->super_ecto_100_price }}
                        </p>
                    </div>
                </div>
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full flex justify-center items-center border-[1px] border-black">
                        <p class="text-sm text-black">
                            {{ $order->super_ecto_price }}
                        </p>
                    </div>
                </div>
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full flex justify-center items-center border-[1px] border-black">
                        <p class="text-sm text-black">
                            {{ $order->premium_price }}
                        </p>
                    </div>
                </div>
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full flex justify-center items-center border-[1px] border-black">
                        <p class="text-sm text-black">
                            {{ $order->regular_price }}
                        </p>
                    </div>
                </div>
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full flex justify-center items-center border-[1px] border-black">
                        <p class="text-sm text-black">
                            {{ $order->diesel_price }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-span-2">
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full flex justify-center items-center border-[1px] border-black">
                        <p class="text-sm text-black">
                            {{ $order->card }}
                        </p>
                    </div>
                </div>
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full flex justify-center items-center border-[1px] border-black">
                        <p class="text-sm text-black">
                            {{ $order->super_ecto_100 }}
                        </p>
                    </div>
                </div>
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full flex justify-center items-center border-[1px] border-black">
                        <p class="text-sm text-black">
                            {{ $order->super_ecto }}
                        </p>
                    </div>
                </div>
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full flex justify-center items-center border-[1px] border-black">
                        <p class="text-sm text-black">
                            {{ $order->premium }}
                        </p>
                    </div>
                </div>
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full flex justify-center items-center border-[1px] border-black">
                        <p class="text-sm text-black">
                            {{ $order->regular }}
                        </p>
                    </div>
                </div>
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full flex justify-center items-center border-[1px] border-black">
                        <p class="text-sm text-black">
                            {{ $order->diesel }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-span-2">
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full flex justify-center items-center border-[1px] border-black">
                        <p class="text-sm text-black">
                            0.00
                        </p>
                    </div>
                </div>
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full flex justify-center items-center border-[1px] border-black">
                        <p class="text-sm text-black">
                            {{ $order->discount }}
                        </p>
                    </div>
                </div>
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full flex justify-center items-center border-[1px] border-black">
                        <p class="text-sm text-black">
                            {{ $order->discount }}
                        </p>
                    </div>
                </div>
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full flex justify-center items-center border-[1px] border-black">
                        <p class="text-sm text-black">
                            {{ $order->discount }}
                        </p>
                    </div>
                </div>
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full flex justify-center items-center border-[1px] border-black">
                        <p class="text-sm text-black">
                            {{ $order->discount }}
                        </p>
                    </div>
                </div>
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full flex justify-center items-center border-[1px] border-black">
                        <p class="text-sm text-black">
                            {{ $order->discount }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-span-2">
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full flex justify-center items-center border-[1px] border-black">
                        <p class="text-sm text-black">
                            0.00
                        </p>
                    </div>
                </div>
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full flex justify-center items-center border-[1px] border-black">
                        <p class="text-sm text-black">
                            {{ $order->super_ecto_100_price - $order->discount }}
                        </p>
                    </div>
                </div>
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full flex justify-center items-center border-[1px] border-black">
                        <p class="text-sm text-black">
                            {{ $order->super_ecto_price - $order->discount }}
                        </p>
                    </div>
                </div>
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full flex justify-center items-center border-[1px] border-black">
                        <p class="text-sm text-black">
                            {{ $order->premium_price - $order->discount }}
                        </p>
                    </div>
                </div>
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full flex justify-center items-center border-[1px] border-black">
                        <p class="text-sm text-black">
                            {{ $order->regular_price - $order->discount }}
                        </p>
                    </div>
                </div>
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full flex justify-center items-center border-[1px] border-black">
                        <p class="text-sm text-black">
                            {{ $order->diesel_price - $order->discount }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-span-2">
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full flex justify-center items-center border-[1px] border-black">
                        <p class="text-sm text-black">
                            {{ $order->card * 5 }}
                        </p>
                    </div>
                </div>
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full flex justify-center items-center border-[1px] border-black">
                        <p class="text-sm text-black">
                            {{ ($order->super_ecto_100_price - $order->discount) * $order->super_ecto_100 }}
                        </p>
                    </div>
                </div>
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full flex justify-center items-center border-[1px] border-black">
                        <p class="text-sm text-black">
                            {{ ($order->super_ecto_price - $order->discount) * $order->super_ecto }}
                        </p>
                    </div>
                </div>
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full flex justify-center items-center border-[1px] border-black">
                        <p class="text-sm text-black">
                            {{ ($order->premium_price - $order->discount) * $order->premium }}
                        </p>
                    </div>
                </div>
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full flex justify-center items-center border-[1px] border-black">
                        <p class="text-sm text-black">
                            {{ ($order->regular_price - $order->discount) * $order->regular }}
                        </p>
                    </div>
                </div>
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full flex justify-center items-center border-[1px] border-black">
                        <p class="text-sm text-black">
                            {{ ($order->diesel_price - $order->discount) * $order->diesel }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-4/5 h-36 grid grid-cols-4 p-4 gap-6">
            <div class="col-span-1 w-full h-full">
                <div class="w-full h-full border-[1px] border-black flex justify-center items-center">
                    <p class="text-sm text-black">
                        შეკვეთის ჯამური რაოდენობა ლარში
                    </p>
                </div>
            </div>
            <div class="col-span-1 w-full h-full">
                <div class="w-full h-full border-[1px] border-black flex justify-center items-center">
                    <p class="text-sm text-black">
                        {{ $order->sum }}
                    </p>
                </div>
            </div>
            <div class="col-span-1 w-full h-full flex flex-col justify-between">
                <div class="w-full h-2/5 flex justify-center items-center border-[1px] border-black">
                    <p class="text-sm text-black">JSC TBC Bank</p>
                </div>
                <div class="w-full h-2/5 flex justify-center items-center border-[1px] border-black">
                    <p class="text-sm text-black">JSC Bank Of Georgia</p>
                </div>
            </div>
            <div class="col-span-1 w-full h-full flex flex-col justify-between">
                <div class="w-full h-2/5 flex justify-center items-center border-[1px] border-black">
                    <p class="text-sm text-black">GE47TB7603136020100007</p>
                </div>
                <div class="w-full h-2/5 flex justify-center items-center border-[1px] border-black">
                    <p class="text-sm text-black">GE93BG0000000499206920
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-layout>
