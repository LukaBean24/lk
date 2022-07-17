<x-layout>
    <x-navbar/>
    <x-page-content>
        <div class="w-11/12 lg:w-3/5 xl:w-3/5 h-20 bg-lk-main flex justify-center items-center mt-20">
            <p class="text-2xl text-white font-semibold">
                ფასების ისტორია
            </p>
        </div>
        <x-price-index-table :prices="$prices" />
    </x-page-content>
    <x-footer/>
</x-layout>
