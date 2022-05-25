<x-layout>
    <x-admin-navbar/>
    <div class="w-screen h-auto flex flex-col justify-start items-center">
        <form action="/admin/users/{{$user->id}}" class="w-2/5 h-[750px] bg-lk-main mt-20 rounded-xl" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="w-full h-20 flex justify-center items-center">
                <p class="text-white text-xl font-semibold">
                    მომხმარებლის ცვლილება
                </p>
            </div>

                @switch($user->is_company)
                    @case('false')
                    <div class="w-full h-40 flex flex-col justify-center items-center">
                        <div class="w-full h-1/2 flex flex-col items-start justify-center space-y-2 p-8">
                            <label for="name" class="text-white text-lg font-semibold">
                                სახელი
                            </label>
                            <input type="text" name="customer_name" class="p-2 w-1/3 h-8 rounded-xl" value="{{$user->customer_name}}">
                        </div>
                        <div class="w-full h-1/2 flex flex-col items-start justify-center space-y-2 p-8">
                            <label for="last_name" class="text-white text-lg font-semibold">
                                გვარი
                            </label>
                            <input type="text" name="customer_last" class="p-2 w-1/3 h-8 rounded-xl" value="{{$user->customer_last}}">
                        </div>
                    </div>
                        @break
                        @case(true)
                        <div class="w-full h-64 flex flex-col justify-center items-center">
                            <div class="w-full h-1/3 flex flex-col items-start justify-center space-y-2 p-8">
                                <label for="company_name" class="text-white text-lg font-semibold">
                                    კომპანიის სახელი
                                </label>
                                <input type="text" name="company_name" class="p-2 w-1/3 h-8 rounded-xl" value="{{$user->company_name}}">
                            </div>
                            <div class="w-full h-1/3 flex flex-col items-start justify-center space-y-2 p-8">
                                <label for="name" class="text-white text-lg font-semibold">
                                    სახელი
                                </label>
                                <input type="text" name="customer_name" class="p-2 w-1/3 h-8 rounded-xl" value="{{$user->customer_name}}">
                            </div>
                            <div class="w-full h-1/3 flex flex-col items-start justify-center space-y-2 p-8">
                                <label for="last_name" class="text-white text-lg font-semibold">
                                    გვარი
                                </label>
                                <input type="text" name="customer_last" class="p-2 w-1/3 h-8 rounded-xl" value="{{$user->customer_last}}">
                            </div>
                        </div>
                        @break
                    @default

                @endswitch
                <div class="w-full h-24 flex flex-col justify-center items-start p-8 space-y-2">
                    <label for="email" class="text-white text-lg font-semibold">ელ-ფოსტა</label>
                    <input type="email" name="email" class="h-8 w-1/3 p-2 rounded-lg" value="{{$user->email}}">
                </div>
                <div class="w-full h-24 flex flex-col justify-center items-start p-8 space-y-2">
                    <label for="phone" class="text-white text-lg font-semibold">ტელეფონის ნომერი</label>
                    <input type="number" name="phone" class="h-8 w-1/3 p-2 rounded-lg" value="{{$user->phone}}">
                </div>
                <div class="w-full h-24 flex flex-col justify-center items-start p-8 space-y-2">
                    <label for="discount" class="text-white text-lg font-semibold">ფასდაკლება</label>
                    <input type="text" name="discount" class="h-8 w-1/3 p-2 rounded-lg" value="{{$user->discount}}">
                </div>
                <div class="w-full h-32 flex flex-col justify-center items-start p-8 space-y-2">
                    <button type="submit" class="w-full h-12 bg-white border-2 border-white hover:bg-transparent duration-150 text-lk-main hover:text-white rounded-lg font-semibold">
                        შეცვლა
                    </button>
                </div>
        </form>
    </div>
</x-layout>
