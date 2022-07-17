<x-layout>
    <x-admin-navbar/>
    <div class="w-screen h-auto flex flex-col justify-start items-center mt-20">
        <div class="w-4/5 h-20 bg-lk-main flex justify-center items-center">
            <p class="text-white text-xl font-semibold">
                ბანერები
            </p>
        </div>
        <form class="w-4/5 h-auto bg-lk-main mt-10 mb-10 rounded-lg" action="/admin/carousel/create" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="w-full h-auto flex flex-col items-start justify-center p-8 space-y-4">
                <label for="body_en" class="text-white text-lg font-semibold">
                    ფოტო
                </label>
                <input type="file" name="slide">
            </div>
            <div class="w-full h-20 flex justify-center items-center">
                <button class="text-lk-main bg-white border-2 border-white w-64 h-10 rounded-lg font-semibold hover:bg-lk-main hover:text-white duration-150">დამატება</button>
            </div>
        </form>
        @foreach ($banners as $banner)
        <div class="w-4/5 h-[500px] bg-lk-main flex justify-center items-center relative mt-8">
            <form action="/admin/carousel/{{$banner->id}}/delete" method="POST">
                @method("DELETE")
                @csrf
                <button class="w-40 h-10 bg-lk-main text-white absolute right-0 top-0">წაშლა</button>
            </form>
            <img src="/storage/{{$banner->photo}}" class="w-full h-full object-cover object-center">
        </div>
        @endforeach

    </div>
</x-layout>
