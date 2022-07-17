<div class="w-11/12 xl:w-4/5 lg:w-4/5 flex flex-col mt-20">
    <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
        <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
          <table class="min-w-full divide-y divide-gray-300">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="py-3 pl-4 pr-3 text-left text-sm tracking-wide text-lk-main font-semibold sm:pl-6">#</th>
                <th scope="col" class="px-3 py-3 text-center text-sm tracking-wide text-lk-main font-semibold">დასახელება</th>
                <th scope="col" class="px-3 py-3 text-center text-sm tracking-wide text-lk-main font-semibold">საიდენტიფიკაციო</th>
                <th scope="col" class="px-3 py-3 text-center text-sm tracking-wide text-lk-main font-semibold">ელ-ფოსტა</th>
                <th scope="col" class="px-3 py-3 text-center text-sm tracking-wide text-lk-main font-semibold">ტელეფონის ნომერი</th>
                <th scope="col" class="px-3 py-3 text-center text-sm tracking-wide text-lk-main font-semibold">ფასდაკლება</th>
                <th scope="col" class="px-3 py-3 text-center text-sm tracking-wide text-lk-main font-semibold">ადმინის პრივილეგია</th>
                <th scope="col" class="px-3 py-3 text-center text-sm tracking-wide text-lk-main font-semibold">შეცვლა</th>
                <th scope="col" class="px-3 py-3 text-center text-sm tracking-wide text-lk-main font-semibold">წაშლა</th>
              </tr>
            </thead>

            <tbody class="divide-y divide-gray-200 bg-white">
              @foreach ($users as $user)
              <tr>
                  <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm  text-lk-main sm:pl-6">{{$loop->iteration}}</td>
                  <td class="whitespace-nowrap px-3 py-4 text-sm text-lk-main font-semibold text-center">
                    @switch($user->is_company)
                    @case('false')
                        <p class="text-sm text-center whitespace-nowrap">
                            {{ $user->customer_name . ' ' . $user->customer_last }}</p>
                    @break

                    @case('true')
                        <p class="text-sm text-center"> {{ $user->company_name }} </p>
                    @break

                    @default
                @endswitch
                  </td>
                  <td class="whitespace-nowrap px-3 py-4 text-sm text-lk-main font-semibold text-center">
                      <p class="text-sm">
                          {{$user->customer_id}}
                      </p>
                  </td>
                  <td class="whitespace-nowrap px-3 py-4 text-sm text-lk-main font-semibold text-center">
                      <p class="text-sm">
                          {{$user->email}}
                      </p>
                  </td>
                  <td class="whitespace-nowrap px-3 py-4 text-sm text-lk-main font-semibold text-center">
                    <p class="text-sm">
                        {{$user->phone}}
                    </p>
                  </td>

                  <td class="whitespace-nowrap px-3 py-4 text-sm text-lk-main font-semibold text-center">
                    <p class="text-sm">
                        @switch($user->discount)
                            @case(null)
                                სტანდარტული
                                @break
                        @case(!null)
                        {{$user->discount}}
                        @break
                            @default

                        @endswitch
                    </p>
                  </td>
                  <td class="whitespace-nowrap px-3 py-4 text-sm font-semibold text-center">
                    @switch($user->is_admin)
                        @case(null)
                        <a href="/admin/users/make-admin/{{$user->id}}">
                            <button class="w-full h-8 bg-lk-main text-white rounded-lg">
                                პრივილეგიის მიცემა
                            </button>
                        </a>
                            @break
                        @case(!null)
                        <a href="/admin/users/block-admin/{{$user->id}}">
                            <button class="w-full h-8 bg-lk-main text-white rounded-lg">
                                პრივილეგიის წართმევა
                            </button>
                        </a>
                        @break
                        @default

                    @endswitch
                  </td>
                  <td class="whitespace-nowrap px-3 py-4 text-sm font-semibold text-center">
                    <a href="/admin/users/{{$user->id}}">
                        <button class="w-full h-8 bg-lk-main text-white rounded-lg">
                            შეცვლა
                        </button>
                    </a>
                  </td>
                  <td class="whitespace-nowrap px-3 py-4 text-sm font-semibold text-center">
                    <a href="/admin/users/{{$user->id}}/delete">
                        <button class="w-full h-8 bg-lk-main text-white rounded-lg">
                            წაშლა
                        </button>
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
