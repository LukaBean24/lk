<x-layout>
    <x-navbar></x-navbar>
    <x-page-content>
        <form action="/fuel-order" method="POST"
            class="w-11/12 lg:w-2/6 h-[750px] bg-lk-main flex flex-col justify-start items-center rounded-xl px-8 py-4">
            @csrf
            <div class="w-full h-20 flex justify-center items-start">
                <p class="text-white text-3xl">{{__('fuel_order')}}</p>
            </div>
            <div class="w-full h-1/6 flex flex-col justify-center items-start">
                <label for="" class="text-white text-md">Super Ecto 100</label>
                <input type="number" class="w-full h-10 mt-2 p-2" name="super_ecto_100" id="super_ecto_100"
                    value="{{ old('super_ecto_100') ?: '0' }}">
            </div>
            <div class="w-full h-1/6 flex flex-col justify-center items-start mt-4">
                <label for="" class="text-white text-md">Super Ecto</label>
                <input type="number" class="w-full h-10 mt-2 p-2" name="super_ecto" id="super_ecto"
                    value="{{ old('super_ecto') ?: '0' }}">
            </div>
            <div class="w-full h-1/6 flex flex-col justify-center items-start mt-4">
                <label for="" class="text-white text-md">Premium Avangard</label>
                <input type="number" class="w-full h-10 mt-2 p-2" name="premium" id="premium"
                    value="{{ old('premium') ?: '0' }}">
            </div>
            <div class="w-full h-1/6 flex flex-col justify-center items-start mt-4">
                <label for="" class="text-white text-md">Euro Regular</label>
                <input type="number" class="w-full h-10 mt-2 p-2" name="regular" id="regular"
                    value="{{ old('regular') ?: '0' }}">
            </div>
            <div class="w-full h-1/6 flex flex-col justify-center items-start mt-4">
                <label for="" class="text-white text-md">Euro Diesel</label>
                <input type="number" class="w-full h-10 mt-2 p-2" name="diesel" id="diesel"
                    value="{{ old('diesel') ?: '0' }}">
            </div>
            <div class="w-full h-1/6 flex flex-col justify-center items-start mt-4">
                <label for="" class="text-white text-md">ჯამური თანხა</label>
                <input type="text" readonly class="w-full h-10 mt-2 p-2" name="sum" value="0" id="sum">
            </div>
            {{-- hidden values for prices --}}
            <input type="hidden" name="super_ecto_100_price" id="super_ecto_100_price"
                value="{{ $prices->super_ecto_100 }}">
            <input type="hidden" name="super_ecto_price" id="super_ecto_price" value="{{ $prices->super_ecto }}">
            <input type="hidden" name="premium_price" id="premium_price" value="{{ $prices->premium }}">
            <input type="hidden" name="regular_price" id="regular_price" value="{{ $prices->regular }}">
            <input type="hidden" name="diesel_price" id="diesel_price" value="{{ $prices->diesel }}">
            {{-- hidden values for prices --}}
            {{-- hidden values for discount --}}
            @switch(auth()->user()->discount)
                @case(null)
                    <input type="hidden" name="discount1" id="50_150" value="{{ $discounts->discount1 }}">
                    <input type="hidden" name="discount2" id="150_500" value="{{ $discounts->discount2 }}">
                    <input type="hidden" name="discount3" id="500_1000" value="{{ $discounts->discount3 }}">
                    <input type="hidden" name="discount4" id="1000_5000" value="{{ $discounts->discount4 }}">
                    <input type="hidden" name="discount5" id="5000_15000" value="{{ $discounts->discount5 }}">
                    <input type="hidden" name="discount" id="discount" value="0">
                    @break
                    @case(!null)
                    <input type="hidden" name="discount1" id="50_150" value="{{ auth()->user()->discount }}">
                    <input type="hidden" name="discount2" id="150_500" value="{{ auth()->user()->discount }}">
                    <input type="hidden" name="discount3" id="500_1000" value="{{auth()->user()->discount }}">
                    <input type="hidden" name="discount4" id="1000_5000" value="{{ auth()->user()->discount }}">
                    <input type="hidden" name="discount5" id="5000_15000" value="{{ auth()->user()->discount }}">
                    <input type="hidden" name="discount" id="discount" value="0">
                    @break

                @default

            @endswitch
            {{-- hidden values for discount --}}
            {{-- hidden values for sum liter --}}
            <input type="hidden" name="sum_liter" id="sum_liter">
            {{-- hidden values for discount --}}
            <div class="w-full h-1/6 flex flex-col justify-center items-center mt-8">
                <button type="submit"
                    class="w-2/3 h-2/3 border-2 border-white rounded-xl text-white text-xl hover:bg-white hover:text-lk-main duration-200"> {{__('order')}} </button>
            </div>
        </form>
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </x-page-content>
    <x-footer></x-footer>
</x-layout>
