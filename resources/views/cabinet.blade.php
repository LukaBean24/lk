<x-layout>
    <x-navbar></x-navbar>
    <x-page-content>
        <div class="w-full lg:w-4/5 xl:w-3/5 h-auto flex flex-col items-center lg:grid lg:grid-cols-3 lg:gap-9">
            <span class="lg:col-span-1 w-11/12 lg:w-full xl:w-full md:w-2/5 h-80 rounded-xl bg-gray-200 p-8 flex flex-col justify-center items-center mt-8">
                <div class="w-full h-5/6 bg-purple-500"></div>
                <a href="/card-order" class="w-3/4 h-12">
                    <button class="w-full h-full text-white rounded-xl bg-lk-main mt-5"> {{__('card_order')}} </button>
                </a>
            </span>
            <span class="lg:col-span-1 xl:w-full w-11/12 lg:w-full md:w-2/5 h-80 rounded-xl bg-gray-200 p-8 flex flex-col justify-center items-center mt-8">
                <div class="w-full h-5/6 bg-purple-500"></div>
                <a href="/fuel-order" class="w-3/4 h-12">
                    <button class="w-full h-full text-white rounded-xl bg-lk-main mt-5">{{__('fuel_order')}}</button>
                </a>
            </span>
            <span class="lg:col-span-1 xl:w-full w-11/12 md:w-2/5 lg:w-full h-80 rounded-xl bg-gray-200 p-8 flex flex-col justify-center items-center mt-8">
                <div class="w-full h-5/6 bg-purple-500"></div>
                <a href="/#" class="w-3/4 h-12">
                    <button class="w-full h-full text-white rounded-xl bg-lk-main mt-5">{{__('balance_management')}}</button>
                </a>
            </span>
        </div>
        <x-orders-table :orders="$orders"></x-orders-table>
    </x-page-content>
    <x-footer></x-footer>
</x-layout>
