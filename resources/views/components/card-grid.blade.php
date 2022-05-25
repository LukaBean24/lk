@props(['posts'])
<div class="w-screen h-auto mt-20 flex justify-center items-center">
    <div class="w-11/12 lg:w-3/5 h-full block lg:grid lg:grid-cols-4 lg:gap-5">
        @foreach ($posts as $post)
            <x-card :post="$post"></x-card>
        @endforeach
    </div>
</div>
