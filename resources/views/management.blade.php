<x-layout>
    <x-navbar/>
    <x-page-content>
        <div class="w-11/12 lg:w-3/5 h-20 bg-gray-200 flex justify-start items-center p-4">
            <p class="text-black text-xl font-semibold">
                {{__('management')}}
            </p>
        </div>
        <div class="w-11/12 lg:w-3/5 h-[450px] mt-8 lg:flex lg:justify-start">
            <div class="lg:w-2/5 h-full">
                <img src="{{ asset('images/dir-img.jpg') }}" alt="Director" class="w-full h-full object-center object-cover">
            </div>
        </div>
        <div class="w-11/12 lg:w-3/5 h-10 flex justify-center items-start flex-col mt-20 p-4">
            <p class="text-black text-lg font-semibold">
                {{__('director_name')}}
            </p>
            <p class="text-black text-lg">
                {{__('director_manage')}}
            </p>
            <p class="text-black text-lg">
                {{__('birth_year')}}: 11.11.1988
            </p>
        </div>
        <div class="w-11/12 lg:w-3/5 h-auto flex flex-col justify-center items-start mt-8 p-4">
                <p class="text-black text-lg font-semibold">
                    {{__('education')}}:
                </p>
                <p class="text-black text-lg">
                    {{__('edu_1')}}
                </p>
                <p class="text-black text-lg">
                    {{__('edu_2')}}
                </p>
        </div>
        <div class="w-11/12 lg:w-3/5 h-auto flex flex-col justify-center items-start p-4">
                <p class="text-black text-lg font-semibold">
                    {{__('career')}}:
                </p>
                <p class="text-black text-lg">
                    {{__('car_1')}}
                </p>
                <p class="text-black text-lg">
                    {{__('car_2')}}
                </p>
                <p class="text-black text-lg">
                    {{__('car_3')}}
                </p>
                <p class="text-black text-lg">
                    {{__('car_4')}}
                </p>
                <p class="text-black text-lg">
                    {{__('car_5')}}
                </p>
                <p class="text-black text-lg">
                    {{__('car_6')}}
                </p>
                <p class="text-black text-lg">
                    {{__('car_7')}}
                </p>
        </div>
        <br><br>
        <div class="w-11/12 lg:w-3/5 h-20 flex flex-col justify-center items-start p-4 mt-20">
            <p class="text-lg text-black font-bold">ციტატა:</p>
            <p class="text-lg text-black">
                ჩვენი მიზანია საქართველოში „ლუკოილის“ ავტოგასამართ სადგურებზე მომსახურების
კონცეპტუალურად ახალი სტანდარტის წარდგენა. ბუნებრივია, ჩვენი მთავარი პრინციპი
უცვლელი რჩება - მომხმარებლისათვის უმაღლესი ხარისხის ევროპული საწვავის
მიწოდება. ლუკოილის საწვავი თქვენი ავტომობილების ავზში მოხვედრამდე
კონტროლის უწყვეტ ჯაჭვს გადის. სწორედ ეს განაპირობებს იმ ნდობას და ხარისხს,
რომლითაც ლუკოილ-ჯორჯია საქართველოში სარგებლობს
            </p>
        </div>
    </x-page-content>
    <x-footer/>
</x-layout>
