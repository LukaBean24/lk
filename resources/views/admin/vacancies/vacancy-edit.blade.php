<x-layout>
    <x-admin-navbar/>
    <div class="w-screen h-auto flex flex-col justify-start items-center mt-20 mb-20">
        <form action="/admin/vacancies/{{$vacancy->id}}/edit" method="POST"
            class="w-2/5 h-auto bg-lk-main rounded-xl"
        >
            @csrf
            @method("PUT")
            <div class="w-full h-20 flex justify-center items-center">
                <p class="text-white text-xl font-semibold">
                    ვაკანსიის შესწორება
                </p>
            </div>
            <div class="w-full h-auto flex flex-col items-start justify-start p-8 space-y-4">
                <label for="title_en" class="text-white font-semibold">სათაური (EN)</label>
                <input type="text" name="title_en" class="p-2 w-full h-8 rounded-lg" value="{{$vacancy->getTranslation('title', 'en')}}">
            </div>
            <div class="w-full h-auto flex flex-col items-start justify-start p-8 space-y-4">
                <label for="title_ge" class="text-white font-semibold">სათაური (GE)</label>
                <input type="text" name="title_ge" class="p-2 w-full h-8 rounded-lg" value="{{$vacancy->getTranslation('title', 'ge')}}">
            </div>
            <div class="w-full h-auto flex flex-col items-start justify-start p-8 space-y-4">
                <label for="slug_en" class="text-white font-semibold">აღწერა (EN)</label>
                <textarea name="slug_en" class="w-full rounded-lg p-2" cols="30" rows="10">{{$vacancy->getTranslation('slug', 'en')}}</textarea>
            </div>
            <div class="w-full h-auto flex flex-col items-start justify-start p-8 space-y-4">
                <label for="slug_ge" class="text-white font-semibold">აღწერა (GE)</label>
                <textarea name="slug_ge" class="w-full rounded-lg p-2" cols="30" rows="10">{{$vacancy->getTranslation('slug', 'ge')}}</textarea>
            </div>
            <div class="w-full h-auto flex flex-col items-start justify-start p-8 space-y-4">
                <label for="body_en" class="text-white font-semibold">ტექსტი (EN)</label>
                <textarea name="body_en" id="body_en" style="width: 100%" class="w-full rounded-lg p-2" cols="30" rows="10">{{$vacancy->getTranslation('body', 'en')}}</textarea>
            </div>
            <div class="w-full h-auto flex flex-col items-start justify-start p-8 space-y-4">
                <label for="body_ge" class="text-white font-semibold">ტექსტი (GE)</label>
                <textarea name="body_ge" id="body_ge" style="width: 100%" class="w-full rounded-lg p-2" cols="30" rows="10">{{$vacancy->getTranslation('body', 'ge')}}</textarea>
            </div>
            <div class="w-full h-auto flex flex-col items-start justify-start p-8 space-y-4">
                <button type="submit" class="w-full h-12 rounded-lg bg-white border-2 border-white hover:bg-lk-main text-lk-main hover:text-white duration-150 font-semibold">შესწორება</button>
            </div>
        </form>
    </div>
</x-layout>
<script>
    tinymce.init({
      selector: '#body_en',
      menubar: false
    });
    tinymce.init({
      selector: '#body_ge',
      menubar: false
    });
  </script>
