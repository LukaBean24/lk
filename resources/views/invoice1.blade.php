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

    <div class="w-screen h-auto flex flex-col items-center">
        <div class="w-11/12 h-20 bg-lk-main mt-8 flex justify-end items-center relative">
            <div class="w-1/5 h-full">
                <img src="http://www.lukoil.ge/img/luk.png" alt="Logo" class="w-full h-full object-center object-cover">
            </div>
            <div class="w-4/5 h-full flex justify-center items-center p-4">
                <p class="text-white text-lg font-semibold">
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
        <div class="w-11/12 h-64 mt-6">
            <div class="w-full h-2/5 space-y-1">
                <div class="w-full h-1/4 flex justify-center items-center">
                    <p class="text-sm text-black">
                        {{__('buyer')}}
                    </p>
                </div>
                <div class="w-full h-1/4 border-[1px] border-black flex justify-center items-center">
                    <p class="text-sm text-black">
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
                    </p>
                </div>
                <div class="w-full h-1/4 border-[1px] border-black flex justify-center items-center">
                    @switch($order->user->is_company)
                            @case('false')
                                <p class="text-sm text-black">
                                    {{__('person_id') . ": " . $order->user->customer_id}}</p>
                            @break

                            @case('true')
                                <p class="text-sm text-black"> {{ $order->user->company_name }} </p>
                            @break

                            @default
                        @endswitch
                </div>
            </div>
            <div class="w-full h-3/5 pt-4 space-y-2">
                <div class="w-full h-1/5 flex justify-center items-center">
                    <p class="text-black text-sm">
                        გამყიდველი
                    </p>
                </div>
                <div class="w-full h-1/5 border-[1px] border-black flex justify-center items-center">
                    <p class="text-black text-sm">
                        შპს ლუკოილ ჯორჯია
                    </p>
                </div>
                <div class="w-full h-1/5 border-[1px] border-black flex justify-center items-center">
                    <p class="text-black text-sm">
                        204976302
                    </p>
                </div>
                <div class="w-full h-1/5 border-[1px] border-black flex justify-center items-center">
                    <p class="text-black text-sm">
                        INVOICE-{{ $order->id }}
                    </p>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
