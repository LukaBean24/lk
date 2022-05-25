<x-layout>
    <x-navbar></x-navbar>
    <x-page-content>
        <form action="/card-order" method="POST" enctype="multipart/form-data"
            class="w-11/12 lg:w-2/6 h-[750px] bg-lk-main flex flex-col justify-start items-center rounded-xl px-8 py-4">
            @csrf
            <div class="w-full h-20 flex justify-center items-start">
                <p class="text-white text-3xl"> {{__('card_order')}} </p>
            </div>
            <div class="w-full h-1/6 flex flex-col justify-center items-start">
                <label for="" class="text-white text-md">{{__('card_quantity')}}</label>
                <input type="number" class="w-full h-10 mt-2 p-2" name="card" value="{{ old('card') ?: '0' }}">
            </div>
            <div class="w-full h-1/6 flex flex-col justify-center items-start mt-4">
                <label for="" class="text-white text-md">{{__('select_branch')}}</label>
                <select name="bracnh" class="w-full h-10 mt-2 p-2 bg-white">
                    <option value="#">{{__('branch')}}</option>
                    <option value="თბილისი">{{__('tbilisi')}}</option>
                    <option value="ბათუმი">{{__('batumi')}}</option>
                    <option value="ქუთაისი">{{__('kutaisi')}}</option>
                </select>
            </div>
            <div class="w-full h-1/6 flex flex-col justify-center items-center mt-4">
                <label for="" class="text-white text-md">{{__('personalization')}}</label>
                <input type="file" name="file" class="mt-6 text-white">
            </div>
            <div class="w-full h-1/6 flex flex-col justify-center items-center mt-8">
                <button type="submit"
                    class="w-2/3 h-1/2 border-2 border-white rounded-xl text-white text-xl hover:bg-white hover:text-lk-main duration-200">{{__('order')}}</button>
            </div>
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </form>
    </x-page-content>
    <x-footer></x-footer>
</x-layout>
