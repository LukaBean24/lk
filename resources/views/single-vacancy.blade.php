<x-layout>
    <x-navbar></x-navbar>
    <x-page-content>
        <div class="w-11/12 lg:w-3/5 h-20 bg-gray-100 flex justify-start items-center p-4">
            <p class="text-black text-xl font-semibold">
                {{$vacancy->title}}
            </p>
        </div>
        <div class="w-11/12 lg:w-3/5 h-auto p-4 mt-8">
            {!!$vacancy->body!!}
        </div>
    </x-page-content>
    <x-footer></x-footer>
</x-layout>
