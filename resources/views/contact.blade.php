<x-layout>
    <x-navbar/>
    <x-page-content>
        <div class="w-11/12 h-20 lg:w-3/5 bg-gray-100 p-4 flex justify-start items-center">
            <p class="text-black text-xl font-semibold">
                {{__('contact')}}
            </p>
        </div>
        <div class="w-11/12 h-auto lg:w-3/5 mt-6 bg-gray-100 border-2 border-transparent hover:border-l-lk-main hover:border-r-lk-main duration-150 flex p-4 flex-col justify-center items-start">
            <p class="text-black text-lg">
                {{__('company_name')}}: {{__('lukoil')}}
            </p>
            <p class="text-black text-lg">
                {{__('company_id')}}: 204976302
            </p>
        </div>
        <div class="w-11/12 h-auto lg:w-3/5 mt-6 bg-gray-100 border-2 border-transparent hover:border-l-lk-main hover:border-r-lk-main duration-150 flex p-4 flex-col justify-center items-start">
            <p class="text-black text-lg">
                {{__('address')}}: {{__('lukoil_address')}}
            </p>
        </div>
        <div class="w-11/12 h-auto lg:w-3/5 mt-6 bg-gray-100 border-2 border-transparent hover:border-l-lk-main hover:border-r-lk-main duration-150 flex p-4 flex-col justify-center items-start">
            <p class="text-black text-lg">
                {{__('phone')}}: +995 32 2313141,
                +995 32 2389992
            </p>
        </div>
        <div class="w-11/12 h-auto lg:w-3/5 mt-6 bg-gray-100 border-2 border-transparent hover:border-l-lk-main hover:border-r-lk-main duration-150 flex p-4 flex-col justify-center items-start">
            <p class="text-black text-lg">
                {{__('email')}}: Info@lukoil.ge
            </p>
        </div>
        <div class="w-11/12 h-auto lg:w-3/5 mt-6 bg-gray-100 border-2 border-transparent hover:border-l-lk-main hover:border-r-lk-main duration-150 flex p-4 flex-col justify-center items-start">
            <p class="text-black text-lg">
                {{__('work_hours')}}
                <br>
                {{__('monday_friday')}}
                <br>
                {{__('saturday')}}
            </p>
        </div>
        <div class="w-11/12 h-auto lg:w-3/5 mt-6 bg-gray-100 border-2 border-transparent hover:border-l-lk-main hover:border-r-lk-main duration-150 flex p-4 flex-col justify-start items-center">
            <div class="w-full">
                <p class="text-black text-lg">
                    {{__('soc_media')}}
                </p>
            </div>
            <div class="w-full flex justify-start items-center mt-4">
                <i class='bx bxl-facebook-square text-4xl text-black hover:text-lk-main duration-200 cursor-pointer'></i>
                <i class='bx bxl-instagram text-4xl text-black hover:text-lk-main duration-200 cursor-pointer'></i>
                <i class='bx bxl-twitter text-4xl text-black hover:text-lk-main duration-200 cursor-pointer'></i>
            </div>
        </div>
    </x-page-content>
    <x-footer/>
</x-layout>
