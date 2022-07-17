<x-layout>
    <x-navbar></x-navbar>
    <x-page-content>
        <div class="w-11/12 h-20 lg:w-3/5 bg-gray-100 flex justify-start items-center p-4">
            <p class="text-black text-xl font-semibold">
                {{__("news")}}
            </p>
        </div>
        @foreach ($posts as $post)
            <div class="w-11/12 lg:w-3/5 h-auto bg-white flex flex-col mt-8">
                <div class="w-full h-auto flex justify-start items-center p-4 bg-gray-100">
                    <p class="text-lg text-black font-semibold">
                        {{$post->title}}
                    </p>
                </div>
                <div class="grid grid-cols-2 w-full h-52 md:h-64 mt-4 bg-gray-100">
                    <div class="w-full h-52 md:h-64">
                        <img src="/storage/{{$post->thumbnail}}" alt="Poster" class="w-full h-full object-cover object-center">
                    </div>
                    <div class="w-full h-52 md:h-64 p-2 flex flex-col items-start justify-between">
                        <p class="text-md text-black">
                            {{$post->slug}}
                        </p>
                        <a class="w-full h-10 flex justify-end items-center" href="/posts/{{$post->id}}">
                            <button class="w-1/2 h-full rounded-lg bg-lk-main text-white hover:bg-red-700">{{__("see_more")}}</button>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </x-page-content>
    <x-footer></x-footer>
</x-layout>
