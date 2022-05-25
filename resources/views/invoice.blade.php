<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> --}}
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
    integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
    crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
    integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
    crossorigin=""></script>
    <title>Lukoil || Georgia</title>
</head>
<body>

    <div class="w-screen min-h-screen flex flex-col justify-start items-center">
        <div class="w-4/5 h-24 bg-lk-main mt-8 px-8 flex justify-evenly shadow-xl">
            <div class="w-24 h-full p-2">
                <img src="http://www.lukoil.ge/img/luk.png" alt="Logo" class="w-full h-full object-cover object-center">
            </div>
            <div class="w-full h-full flex justify-center items-center">
                <p class="text-4xl text-white">
                    @switch($order->order_type)
                        @case("ბარათი")
                            {{__('card_1') }} {{ __('order_invoice')}}
                            @break

                        @default
                        @case("საწვავი")
                            {{__('fuel_1') }} {{ __('order_invoice')}}
                            @break
                    @endswitch
                </p>
            </div>
        </div>
        <div class="w-4/5 h-56 mt-8 flex justify-between">
            <div class="w-1/5 h-full">
                <div class="w-full h-1/6 flex justify-center items-center">
                    <p class="text-sm text-black text-center font-semibold">
                        {{__('buyer')}}
                    </p>
                </div>
                <div class="w-full h-1/6 flex justify-center items-center mt-4">
                    <div class="w-full h-2/3 border-[1px] border-black flex justify-start items-center px-4">
                        @switch($order->user->is_company)
                            @case('false')
                                <p class="text-sm text-black text-center whitespace-nowrap">
                                    {{ $order->user->customer_name . ' ' . $order->user->customer_last }}</p>
                            @break

                            @case('true')
                                <p class="text-sm text-black text-center"> {{ $order->user->company_name }} </p>
                            @break

                            @default
                        @endswitch
                    </div>
                </div>
                <div class="w-full h-1/6 flex justify-center items-center mt-2">
                    <div class="w-full h-2/3 border-[1px] border-black flex justify-start items-center px-4">
                        <p class="text-sm text-black text-center whitespace-nowrap">
                            {{ $order->user->customer_id }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-1/5 h-full">
                <div class="w-full h-1/6 flex justify-center items-center">
                    <p class="text-sm text-black text-center font-semibold">
                        {{__('seller')}}
                    </p>
                </div>
                <div class="w-full h-1/6 flex justify-center items-center mt-4">
                    <div class="w-full h-2/3 border-[1px] border-black flex justify-start items-center px-4">
                        <p class="text-sm text-black text-center whitespace-nowrap">
                            შპს ლუკოილ ჯორჯია
                        </p>
                    </div>
                </div>
                <div class="w-full h-1/6 flex justify-center items-center mt-2">
                    <div class="w-full h-2/3 border-[1px] border-black flex justify-start items-center px-4">
                        <p class="text-sm text-black text-center">
                            204976302
                        </p>
                    </div>
                </div>
                <div class="w-full h-1/6 flex justify-center items-center mt-2">
                    <div class="w-full h-2/3 border-[1px] border-black flex justify-start items-center px-4">
                        <p class="text-sm text-black text-center">
                            INVOICE-{{ $order->id }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-4/5 h-10 grid grid-cols-12 gap-4">
            <div class="col-span-3 flex justify-center items-center">
                <p class="text-sm text-black text-center">
                    {{__('product')}}
                </p>
            </div>
            <div class="col-span-1 flex justify-center items-center">
                <p class="text-sm text-black text-center">
                    {{__('unit_price')}}
                </p>
            </div>
            <div class="col-span-2 flex justify-center items-center">
                <p class="text-sm text-black text-center">
                    {{__('quantity')}}
                </p>
            </div>
            <div class="col-span-2 flex justify-center items-center">
                <p class="text-sm text-black text-center">
                    {{__('discount')}}
                </p>
            </div>
            <div class="col-span-2 flex justify-center items-center">
                <p class="text-sm text-black text-center">
                    {{__('spec_price')}}
                </p>
            </div>
            <div class="col-span-2 flex justify-center items-center">
                <p class="text-sm text-black text-center">
                    {{__('sum')}}
                </p>
            </div>
        </div>
        <div class="w-4/5 h-80 grid grid-cols-12 gap-4">
            <div class="col-span-3">
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full border-[1px] border-black flex justify-center items-center">
                        <p class="text-sm text-black text-center">
                            {{__('card')}}
                        </p>
                    </div>
                </div>
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full border-[1px] border-black flex justify-center items-center">
                        <p class="text-sm text-black text-center">
                            Super Ecto 100
                        </p>
                    </div>
                </div>
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full border-[1px] border-black flex justify-center items-center">
                        <p class="text-sm text-black text-center">
                            Super Ecto
                        </p>
                    </div>
                </div>
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full border-[1px] border-black flex justify-center items-center">
                        <p class="text-sm text-black text-center">
                            Premium Avangard
                        </p>
                    </div>
                </div>
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full border-[1px] border-black flex justify-center items-center">
                        <p class="text-sm text-black text-center">
                            Euro Regular
                        </p>
                    </div>
                </div>
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full border-[1px] border-black flex justify-center items-center">
                        <p class="text-sm text-black text-center">
                            Euro Diesel
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-span-1">
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full flex justify-center items-center border-[1px] border-black">
                        <p class="text-sm text-black text-center">
                            5.00
                        </p>
                    </div>
                </div>
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full flex justify-center items-center border-[1px] border-black">
                        <p class="text-sm text-black text-center">
                            {{ $order->super_ecto_100_price ?: $prices->super_ecto_100 }}
                        </p>
                    </div>
                </div>
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full flex justify-center items-center border-[1px] border-black">
                        <p class="text-sm text-black text-center">
                            {{ $order->super_ecto_price ?: $prices->super_ecto }}
                        </p>
                    </div>
                </div>
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full flex justify-center items-center border-[1px] border-black">
                        <p class="text-sm text-black text-center">
                            {{ $order->premium_price ?: $prices->premium }}
                        </p>
                    </div>
                </div>
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full flex justify-center items-center border-[1px] border-black">
                        <p class="text-sm text-black text-center">
                            {{ $order->regular_price ?: $prices->regular }}
                        </p>
                    </div>
                </div>
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full flex justify-center items-center border-[1px] border-black">
                        <p class="text-sm text-black text-center">
                            {{ $order->diesel_price ?: $prices->diesel }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-span-2">
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full flex justify-center items-center border-[1px] border-black">
                        <p class="text-sm text-black text-center">
                            {{ $order->card ?: '-' }}
                        </p>
                    </div>
                </div>
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full flex justify-center items-center border-[1px] border-black">
                        <p class="text-sm text-black text-center">
                            {{ $order->super_ecto_100 ?: '-' }}
                        </p>
                    </div>
                </div>
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full flex justify-center items-center border-[1px] border-black">
                        <p class="text-sm text-black text-center">
                            {{ $order->super_ecto ?: '-' }}
                        </p>
                    </div>
                </div>
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full flex justify-center items-center border-[1px] border-black">
                        <p class="text-sm text-black text-center">
                            {{ $order->premium ?: '-' }}
                        </p>
                    </div>
                </div>
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full flex justify-center items-center border-[1px] border-black">
                        <p class="text-sm text-black text-center">
                            {{ $order->regular ?: '-' }}
                        </p>
                    </div>
                </div>
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full flex justify-center items-center border-[1px] border-black">
                        <p class="text-sm text-black text-center">
                            {{ $order->diesel ?: '-' }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-span-2">
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full flex justify-center items-center border-[1px] border-black">
                        <p class="text-sm text-black text-center">
                            0.00
                        </p>
                    </div>
                </div>
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full flex justify-center items-center border-[1px] border-black">
                        <p class="text-sm text-black text-center">
                            {{ $order->discount ?: '-' }}
                        </p>
                    </div>
                </div>
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full flex justify-center items-center border-[1px] border-black">
                        <p class="text-sm text-black text-center">
                            {{ $order->discount ?: '-' }}
                        </p>
                    </div>
                </div>
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full flex justify-center items-center border-[1px] border-black">
                        <p class="text-sm text-black text-center">
                            {{ $order->discount }}
                        </p>
                    </div>
                </div>
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full flex justify-center items-center border-[1px] border-black">
                        <p class="text-sm text-black text-center">
                            {{ $order->discount ?: '-' }}
                        </p>
                    </div>
                </div>
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full flex justify-center items-center border-[1px] border-black">
                        <p class="text-sm text-black text-center">
                            {{ $order->discount ?: '-' }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-span-2">
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full flex justify-center items-center border-[1px] border-black">
                        <p class="text-sm text-black text-center">
                            0.00
                        </p>
                    </div>
                </div>
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full flex justify-center items-center border-[1px] border-black">
                        <p class="text-sm text-black text-center">
                            {{ $order->super_ecto_100_price - $order->discount }}
                        </p>
                    </div>
                </div>
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full flex justify-center items-center border-[1px] border-black">
                        <p class="text-sm text-black text-center">
                            {{ $order->super_ecto_price - $order->discount }}
                        </p>
                    </div>
                </div>
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full flex justify-center items-center border-[1px] border-black">
                        <p class="text-sm text-black text-center">
                            {{ $order->premium_price - $order->discount }}
                        </p>
                    </div>
                </div>
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full flex justify-center items-center border-[1px] border-black">
                        <p class="text-sm text-black text-center">
                            {{ $order->regular_price - $order->discount }}
                        </p>
                    </div>
                </div>
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full flex justify-center items-center border-[1px] border-black">
                        <p class="text-sm text-black text-center">
                            {{ $order->diesel_price - $order->discount }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-span-2">
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full flex justify-center items-center border-[1px] border-black">
                        <p class="text-sm text-black text-center">
                            {{ $order->card * 5 }}
                        </p>
                    </div>
                </div>
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full flex justify-center items-center border-[1px] border-black">
                        <p class="text-sm text-black text-center">
                            {{ ($order->super_ecto_100_price - $order->discount) * $order->super_ecto_100 }}
                        </p>
                    </div>
                </div>
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full flex justify-center items-center border-[1px] border-black">
                        <p class="text-sm text-black text-center">
                            {{ ($order->super_ecto_price - $order->discount) * $order->super_ecto }}
                        </p>
                    </div>
                </div>
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full flex justify-center items-center border-[1px] border-black">
                        <p class="text-sm text-black text-center">
                            {{ ($order->premium_price - $order->discount) * $order->premium }}
                        </p>
                    </div>
                </div>
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full flex justify-center items-center border-[1px] border-black">
                        <p class="text-sm text-black text-center">
                            {{ ($order->regular_price - $order->discount) * $order->regular }}
                        </p>
                    </div>
                </div>
                <div class="w-full h-1/6 p-2 flex justify-center items-center">
                    <div class="w-full h-full flex justify-center items-center border-[1px] border-black">
                        <p class="text-sm text-black text-center">
                            {{ ($order->diesel_price - $order->discount) * $order->diesel }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-4/5 h-36 grid grid-cols-4 p-4 gap-6">
            <div class="col-span-1 w-full h-full">
                <div class="w-full h-full border-[1px] border-black flex justify-center items-center">
                    <p class="text-sm text-black text-center text-center">
                        {{__('order_sum')}}
                    </p>
                </div>
            </div>
            <div class="col-span-1 w-full h-full">
                <div class="w-full h-full border-[1px] border-black flex justify-center items-center">
                    <p class="text-sm text-black text-center">
                        {{ $order->sum }}
                    </p>
                </div>
            </div>
            <div class="col-span-1 w-full h-full flex flex-col justify-between">
                <div class="w-full h-2/5 flex justify-center items-center border-[1px] border-black">
                    <p class="text-sm text-black text-center">{{__('tbc')}}</p>
                </div>
                <div class="w-full h-2/5 flex justify-center items-center border-[1px] border-black">
                    <p class="text-sm text-black text-center">{{__('bog')}}</p>
                </div>
            </div>
            <div class="col-span-1 w-full h-full flex flex-col justify-between">
                <div class="w-full h-2/5 flex justify-center items-center border-[1px] border-black">
                    <p class="text-sm text-black text-center">GE47TB7603136020100007</p>
                </div>
                <div class="w-full h-2/5 flex justify-center items-center border-[1px] border-black">
                    <p class="text-sm text-black text-center">GE93BG0000000499206920
                    </p>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
