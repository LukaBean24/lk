<x-layout>
    <x-navbar></x-navbar>
    <x-page-content>
        <div class="w-11/12 lg:w-3/5 p-4 h-20 bg-gray-100 flex justify-start items-center">
            <p class="text-xl text-black font-semibold">
                {{__("vacancies")}}
            </p>
        </div>
        @foreach ($vacancies as $vacancy)
            <div class="w-11/12 lg:w-3/5 h-auto bg-white mt-8">
                <div class="w-full h-auto bg-gray-100 p-4 border-b-[1px] border-lk-main flex justify-between items-center">
                    <p class="text-lg text-lk-main font-semibold">{{$vacancy->title}}</p>
                    <a href="/vacancies/{{$vacancy->id}}">
                        <i class='bx bxs-down-arrow text-lk-main text-lg'></i>
                    </a>
                </div>
                <div class="w-full h-full bg-gray-100 p-4">
                    <p class="text-md text-black">
                        {!! $vacancy->slug !!}
                    </p>
                </div>
            </div>
        @endforeach
    </x-page-content>
    <x-footer></x-footer>
</x-layout>
