<x-layout>
    <x-navbar></x-navbar>
    <x-page-content>
        <div class="w-11/12 h-20 lg:w-3/5 bg-gray-100 flex justify-start items-center p-4">
            <p class="text-xl text-black font-semibold">{{$post->title}}</p>
        </div>
        <div class="w-11/12 lg:w-3/5 h-[450px] bg-gray-100 mt-8">
            <img src="/storage/{{$post->thumbnail}}" alt="Poster" class="w-full h-full object-cover object-center">
        </div>
        <div class="w-11/12 lg:w-3/5 h-auto mt-8">
            {!! $post->body !!}
        </div>
    </x-page-content>
    <x-footer></x-footer>
</x-layout>
