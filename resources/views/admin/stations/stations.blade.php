<x-layout>
    <x-admin-navbar/>
    <div class="w-screen h-auto flex flex-col justify-start items-center mt-20">
        <div class="w-4/5 h-[550px] bg-lk-main">
            <x-maps-leaflet style="width:100%; height:100%;" :markers="$markers" :zoomLevel="10" :centerPoint="['lat' => 41.753276077224, 'long' => 44.788875621213]" ></x-maps-leaflet>
        </div>
        <form action="/admin/stations/create" method="POST" class="w-4/5 h-auto bg-lk-main p-8 mt-20 rounded-lg">
            @csrf
            <div class="w-full h-32  flex flex-col justify-center items-start space-y-4">
                <label class="text-white text-md font-semibold" for=""lang">გრძედი (Latitude)</label>
                <input type="text" name="lang" class="w-1/3 h-10 rounded-lg p-2">
            </div>
            <div class="w-full h-32  flex flex-col justify-center items-start space-y-4">
                <label class="text-white text-md font-semibold" for=""long">განედი (Longitude)</label>
                <input type="text" name="long" class="w-1/3 h-10 rounded-lg p-2">
            </div>
            <div class="w-full h-32  flex flex-col justify-center items-start space-y-4">
                <label class="text-white text-md font-semibold" for=""city">ქალაქი</label>
                <input type="text" name="city" class="w-1/3 h-10 rounded-lg p-2">
            </div>
            <div class="w-full h-32  flex flex-col justify-center items-start space-y-4">
                <label class="text-white text-md font-semibold" for=""city">სადგურის ნომერი</label>
                <input type="text" name="number" class="w-1/3 h-10 rounded-lg p-2">
            </div>
            <div class="w-full h-32  flex flex-col justify-center items-start space-y-4">
                <label class="text-white text-md font-semibold" for=""address">მისამართი</label>
                <textarea name="address" class="w-1/3 h-40 rounded-lg p-2" cols="30" rows="10"></textarea>
            </div>
            <div class="w-full h-32  flex flex-col justify-center items-start space-y-4">
                <label class="text-white text-md font-semibold" for=""address">ტიპი</label>
                <select name="type" class="w-1/3 h-10 p-2 rounded-lg bg-white">
                    <option value="ტიპი" selected>ტიპი</option>
                    <option value="ფრენჩაიზინგი">ფრენჩაიზინგი</option>
                    <option value="საკუთარი">საკუთარი</option>
                </select>
            </div>
            <div class="w-full h-32  flex flex-col justify-center items-center space-y-4">
                <button class="w-2/3 h-10 bg-white text-lk-main border-2 border-white hover:bg-transparent hover:text-white duration-150 font-semibold rounded-lg">
                    დამატება
                </button>
            </div>
        </form>
        <div class="w-4/5 h-auto">
            <div class="w-full h-20 flex justify-center items-center bg-lk-main mt-20">
                <p class="text-white text-xl font-semibold">სადგურების ჩამონათვალი</p>
            </div>
            <div class="w-full h-14 grid grid-cols-9 gap-3 bg-lk-main mt-6">
                <div class="col-span-1 w-full h-full flex justify-center items-center ">
                    <p class="text-white text-md font-semibold">
                        #
                    </p>
                </div>
                <div class="col-span-2 w-full h-full flex justify-center items-center ">
                    <p class="text-white text-md font-semibold">
                        ნომერი
                    </p>
                </div>
                <div class="col-span-2 w-full h-full flex justify-center items-center ">
                    <p class="text-white text-md font-semibold">
                        ქალაქი
                    </p>
                </div>
                <div class="col-span-2 w-full h-full flex justify-center items-center ">
                    <p class="text-white text-md font-semibold">
                        მისამართი
                    </p>
                </div>
                <div class="col-span-2 w-full h-full flex justify-center items-center ">
                    <p class="text-white text-md font-semibold">
                        ტიპი
                    </p>
                </div>
            </div>
            @foreach ($stations as $station)
            <div class="w-full h-14 grid grid-cols-9 gap-3 bg-gray-200 mt-2 border-l-2 border-r-2 border-transparent hover:border-lk-main duration-150">
                <div class="col-span-1 w-full h-full flex justify-center items-center ">
                    <p class="text-lk-main text-md font-semibold">
                        {{$loop->iteration}}
                    </p>
                </div>
                <div class="col-span-2 w-full h-full flex justify-center items-center ">
                    <p class="text-lk-main text-md font-semibold">
                        {{$station->number}}
                    </p>
                </div>
                <div class="col-span-2 w-full h-full flex justify-center items-center ">
                    <p class="text-lk-main text-md font-semibold">
                        {{$station->city}}
                    </p>
                </div>
                <div class="col-span-2 w-full h-full flex justify-center items-center ">
                    <p class="text-lk-main text-md font-semibold">
                        {{$station->address}}
                    </p>
                </div>
                <div class="col-span-2 w-full h-full flex justify-center items-center ">
                    <p class="text-lk-main text-md font-semibold">
                        {{$station->type}}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>
