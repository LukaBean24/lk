{{-- <x-layout>
    <x-admin-navbar/>
    <div class="w-screen h-auto flex flex-col justify-start items-center mt-20">
        <div class="w-4/5 h-20 flex justify-center items-center bg-lk-main">
            <p class="text-white text-xl font-semibold">
                შეცვლები
            </p>
        </div>
        <div class="w-11/12 xl:w-4/5 lg:w-4/5 flex flex-col mt-10">
            <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                  <table class="min-w-full divide-y divide-gray-300">
                    <thead class="bg-gray-50">
                      <tr>
                        <th scope="col" class="py-3 pl-4 pr-3 text-left text-sm tracking-wide text-lk-main font-semibold sm:pl-6">#</th>
                        <th scope="col" class="px-3 py-3 text-center text-sm tracking-wide text-lk-main font-semibold">ადმინი</th>
                        <th scope="col" class="px-3 py-3 text-center text-sm tracking-wide text-lk-main font-semibold">შეცვლის თარიღი</th>
                      </tr>
                    </thead>

                    <tbody class="divide-y divide-x divide-gray-200 bg-white">
                      @foreach ($order->changes as $change)
                      <tr>
                          <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm  text-lk-main sm:pl-6">{{$loop->iteration}}</td>
                          <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm  text-lk-main sm:pl-6">{{}}</td>
                          <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm  text-lk-main sm:pl-6"></td>
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
</x-layout> --}}
@dd($order->changes)
