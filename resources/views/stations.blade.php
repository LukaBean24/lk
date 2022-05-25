<x-layout>
    <x-navbar/>
    <x-page-content>
        <div class="w-11/12 lg:w-3/5 h-20 bg-gray-100 flex justify-start items-center p-4">
            <p class="text-black text-xl font-semibold">{{__("stations")}}</p>
        </div>
        <div class="w-11/12 lg:w-3/5 h-[550px] mt-8 z-10">
            <x-maps-leaflet style="width:100%; height:100%;" :markers="$stations" :zoomLevel="10" :centerPoint="['lat' => 41.753276077224, 'long' => 44.788875621213]" ></x-maps-leaflet>
        </div>
    </x-page-content>
    <x-footer></x-footer>
</x-layout>
