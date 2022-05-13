<x-layout>
    <x-navbar></x-navbar>
    <x-page-content>
        <div class="w-2/6 h-[650px] bg-lk-main flex flex-col justify-start items-center rounded-xl">
            <div class="w-full h-1/6 flex justify-center items-center mt-4">
                <p class="text-white text-4xl">რეგისტრაცია</p>
            </div>
            <form class="w-full h-5/6 flex flex-col justify-start items-center py-10" action="/register" method="post">
                @csrf
                <div class="w-3/5 h-20 grid grid-cols-2">
                    <div class="flex flex-col col-span-1 justify-center items-center space-y-4">
                        <label for="customer_id" class="text-white text-md">ფიზიკური პირი</label>
                        <input type="radio" name="is_company" value="false" id="person_radio">
                    </div>
                    <div class="flex flex-col col-span-1 justify-center items-center space-y-4">
                        <label for="company_radio" class="text-white text-md">იურიდიული პირი</label>
                        <input type="radio" name="is_company" value="true" id="company_radio">
                    </div>
                </div>
                <div class="w-3/5 h-20 flex flex-col justify-center items-start mt-4" id="company_name">
                    <label for="company_name" class="text-white text-md">კომპანიის დასახელება</label>
                    <input type="text" name="company_name" class="w-full h-9 mt-2 rounded-md p-2"
                        value="{{ old('company_name') }}">
                    @error('company_name')
                        <p class="text-sm text-white mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="w-3/5 h-20 flex flex-col justify-center items-start mt-4">
                    <label for="customer_name" class="text-white text-md" id="customer_name">სახელი</label>
                    <input type="text" name="customer_name" class="w-full h-9 mt-2 rounded-md p-2"
                        value="{{ old('customer_name') }}">
                    @error('customer_name')
                        <p class="text-sm text-white mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="w-3/5 h-20 flex flex-col justify-center items-start mt-4">
                    <label for="customer_last" class="text-white text-md" id="customer_last">გვარი</label>
                    <input type="text" name="customer_last" class="w-full h-9 mt-2 rounded-md p-2"
                        value="{{ old('company_last') }}">
                    @error('customer_last')
                        <p class="text-sm text-white mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="w-3/5 h-20 flex flex-col justify-center items-start mt-4">
                    <label for="customer_id" class="text-white text-md" id="customer_id">საიდენტიფიკაციო/პირადი
                        ნომერი</label>
                    <input type="number" name="customer_id" class="w-full h-9 mt-2 rounded-md p-2"
                        value="{{ old('customer_id') }}">
                    @error('customer_id')
                        <p class="text-sm text-white mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="w-3/5 h-20 flex flex-col justify-center items-start mt-4">
                    <label for="phone" class="text-white text-md">ელ-ფოსტა</label>
                    <input type="email" name="email" class="w-full h-9 mt-2 rounded-md p-2"
                        value="{{ old('email') }}">
                    @error('email')
                        <p class="text-sm text-white mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="w-3/5 h-20 flex flex-col justify-center items-start mt-4">
                    <label for="phone" class="text-white text-md">ტელეფონის ნომერი</label>
                    <input type="number" name="phone" class="w-full h-9 mt-2 rounded-md p-2"
                        value="{{ old('phone') }}">
                    @error('phone')
                        <p class="text-sm text-white mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="w-3/5 h-20 flex flex-col justify-center items-start mt-4">
                    <label for="password" class="text-white text-md">პაროლი</label>
                    <input type="password" name="password" class="w-full h-9 mt-2 rounded-md p-2">
                    @error('password')
                        <p class="text-sm text-white mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="w-3/5 h-20 flex flex-col justify-center items-start mt-4">
                    <label for="password" class="text-white text-md">გაიმეორეთ პაროლი</label>
                    <input type="password" name="password_confirmation" class="w-full h-9 mt-2 rounded-md p-2">
                    @error('password_confirmation')
                        <p class="text-sm text-white mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="w-3/5 h-14 mt-8">
                    <button type="submit"
                        class="w-full h-full border-2 border-white text-white text-xl bg-lk-main rounded-md hover:text-lk-main hover:bg-white">შესვლა</button>
                </div>
            </form>
        </div>

    </x-page-content>
    <x-footer></x-footer>
</x-layout>
