<x-layout>
    <x-admin-navbar></x-admin-navbar>
    <div class="w-screen h-auto flex flex-col justify-center items-center mt-10">
        <form method="POST" action="/admin/posts/create" class="w-11/12 h-auto bg-slate-100 rounded-xl p-4" enctype="multipart/form-data">
            @csrf
            <div class="w-1/2 h-20 flex flex-col justify-center items-start my-4 px-4">
                <label for="title_en">Title (EN)</label>
                <input type="text" name="title_en" class="w-1/2 h-10 border-[1.5px] border-lk-main rounded-md" value="{{old('title_en')}}">
            </div>
            <div class="w-1/2 h-20 flex flex-col justify-center items-start my-4 px-4">
                <label for="title_ge">Title (GE)</label>
                <input type="text" name="title_ge" class="w-1/2 h-10 border-[1.5px] border-lk-main rounded-md"value="{{old('title_ge')}}">
            </div>

            <div class="w-1/2 h-auto flex flex-col justify-center items-start my-4 px-4">
                <label for="slug_en">Slug (EN)</label>
                <textarea rows="10" cols="70" name="slug_en" class="w-1/2 h-10 border-[1.5px] border-lk-main rounded-md">{{old('slug_en')}}</textarea>
            </div>
            <div class="w-1/2 h-auto flex flex-col justify-center items-start my-4 px-4">
                <label for="slug_ge">Slug (GE)</label>
                <textarea rows="10" cols="70" name="slug_ge" class="w-1/2 h-10 border-[1.5px] border-lk-main rounded-md">
                    {{old('slug_ge')}}
                </textarea>
            </div>

            <div class="w-full h-auto flex flex-col justify-center items-start my-4 px-4">
                <label for="body_en" class="mb-5">Body (EN)</label>
                <textarea name="body_en" cols="70" rows="8" id="body_en">">{{old('body_en')}}</textarea>
            </div>
            <div class="w-full h-auto flex flex-col justify-center items-start my-4 px-4">
                <label for="body_ge" class="mb-5">Body (EN)</label>
                <textarea name="body_ge" cols="70" rows="8" id="body_ge">">{{old('body_ge')}}</textarea>
            </div>
            <div class="w-full h-auto flex flex-col justify-center items-start my-4 px-4">
                <label for="body_ge" class="mb-5">Post Image</label>
                <input type="file" name="thumbnail">
            </div>
            <div class="w-full h-auto flex flex-col justify-center items-center my-4 px-4">
                <button type="submit" class="w-52 h-10 bg-lk-main rounded-md text-white hover:bg-red-600 duration-200">Post</button>
            </div>
            @foreach ($errors->all() as $error)
                <ul>
                    <li>{{$error}}</li>
                </ul>
            @endforeach
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
