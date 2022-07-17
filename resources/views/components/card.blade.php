@props(['post'])

<span class="w-full h-[500px] lg:col-span-2 mt-8">
    <div class="w-full h-1/12 flex items-center justify-start p-4 border-b-2 border-white bg-gray-100 mt-8">
        <p class="text-lk-main text-md">{{$post->title}}</p>
    </div>
    <div class="w-full h-1/2 mt-4 flex justify-center items-center bg-gray-100">
        <img src="/storage/{{$post->thumbnail}}" alt="Poster" class="w-full h-full object-center object-cover">
    </div>
    <div class="w-full h-5/12 p-4 flex flex-col bg-gray-100">
        <div class="w-full h-1/2">
            <p class="text-black text-md">{{$post->slug}}</p>
        </div>
        <div class="w-full h-1/2 grid grid-cols-2">
            <div class="col-span-1 w-full h-full flex justify-start items-center">{{$post->created_at}}</div>
            <div class="col-span-1 w-full h-full flex justify-center items-center">
                <a class="w-1/2 h-10 flex justify-center items-center" href="/posts/{{$post->id}}">
                    <button class="w-full h-full text-white bg-lk-main rounded-lg hover:bg-red-700 duration-200">{{__('see_more')}}</button>
                </a>
            </div>
        </div>
    </div>
</span>
