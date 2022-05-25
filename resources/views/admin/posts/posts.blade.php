<x-layout>
    <x-admin-navbar></x-admin-navbar>
    <div class="w-screen h-auto flex flex-col justify-center items-center mt-10">
        <div class="w-11/12 xl:w-4/5 lg:w-4/5 h-20 bg-lk-main flex justify-center items-center relative">
            <p class="text-2xl text-white font-semibold">ბლოგი</p>
            <button class="w-40 h-8 bg-lk-main border-2 border-white rounded-md text-white absolute right-4"><a href="/admin/posts/create">დამატება</a></button>
        </div>
        <div class="w-11/12 xl:w-4/5 lg:w-4/5 mt-8 flex flex-col">
            <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                  <table class="min-w-full divide-y divide-gray-300">
                    <thead class="bg-gray-50">
                      <tr>
                        <th scope="col" class="py-3 pl-4 pr-3 text-left text-sm  uppercase tracking-wide text-lk-main font-semibold sm:pl-6">#</th>
                        <th scope="col" class="px-3 py-3 text-center text-sm  uppercase tracking-wide text-lk-main font-semibold">სათაური</th>
                        <th scope="col" class="px-3 py-3 text-center text-sm  uppercase tracking-wide text-lk-main font-semibold">მოკლე მიმოხილვა</th>
                        <th scope="col" class="px-3 py-3 text-center text-sm  uppercase tracking-wide text-lk-main font-semibold">გგგგ</th>
                        <th scope="col" class="relative py-3 pl-3 pr-4 sm:pr-6">
                          <span class="sr-only">Edit</span>
                        </th>
                      </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-200 bg-white">
                      @foreach ($posts as $post)
                      <tr>
                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm  text-lk-main sm:pl-6">{{$loop->iteration}}</td>
                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm  text-lk-main sm:pl-6">{{$post->title}}</td>
                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm  text-lk-main sm:pl-6">{{$post->slug}}</td>
                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm  text-lk-main sm:pl-6">
                            <button>წაშლა</button>
                            <button>შეცვლა</button>
                        </td>
                      </tr>
                      @endforeach

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</x-layout>
