@props(['vacancies'])
<div class="w-11/12 xl:w-4/5 lg:w-4/5 mt-8 flex flex-col">
    <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
        <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
          <table class="min-w-full divide-y divide-gray-300">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="py-3 pl-4 pr-3 text-left text-sm  uppercase tracking-wide text-lk-main font-semibold sm:pl-6">#</th>
                <th scope="col" class="px-3 py-3 text-center text-sm  uppercase tracking-wide text-lk-main font-semibold">სათაური</th>
                <th scope="col" class="px-3 py-3 text-center text-sm  uppercase tracking-wide text-lk-main font-semibold">ქმედებები</th>
              </tr>
            </thead>

            <tbody class="divide-y divide-gray-200 bg-white">
              @foreach ($vacancies as $vacancy)
              <tr>
                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm  text-lk-main sm:pl-6">{{$loop->iteration}}</td>
                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm  text-lk-main sm:pl-6">{{$vacancy->title}}</td>
                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm  text-lk-main sm:pl-6">
                    <a href="/admin/vacancies/{{$vacancy->id}}/delete">
                        <button>წაშლა</button>
                    </a>
                    <a href="/admin/vacancies/{{$vacancy->id}}/edit">
                        <button>შეცვლა</button>
                    </a>
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
