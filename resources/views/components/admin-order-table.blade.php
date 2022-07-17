<div class="w-11/12 xl:w-4/5 lg:w-4/5 mt-8 flex flex-col">
    <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
        <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
          <table class="min-w-full divide-y divide-gray-300">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="py-3 pl-4 pr-3 text-left text-sm  uppercase tracking-wide text-lk-main font-semibold sm:pl-6">#</th>
                <th scope="col" class="py-3 pl-4 pr-3 text-left text-sm  uppercase tracking-wide text-lk-main font-semibold sm:pl-6">დასახელება</th>
                <th scope="col" class="py-3 pl-4 pr-3 text-left text-sm  uppercase tracking-wide text-lk-main font-semibold sm:pl-6">საიდენტიფიკაციო</th>
                <th scope="col" class="py-3 pl-4 pr-3 text-left text-sm  uppercase tracking-wide text-lk-main font-semibold sm:pl-6">პროდუქტი</th>
                <th scope="col" class="px-3 py-3 text-center text-sm  uppercase tracking-wide text-lk-main font-semibold">თარიღი</th>
                <th scope="col" class="px-3 py-3 text-center text-sm  uppercase tracking-wide text-lk-main font-semibold">ინვოისი</th>
                <th scope="col" class="px-3 py-3 text-center text-sm  uppercase tracking-wide text-lk-main font-semibold">სტატუსი</th>
                <th scope="col" class="px-3 py-3 text-center text-sm  uppercase tracking-wide text-lk-main font-semibold">პერსონალიზაცია</th>
                <th scope="col" class="px-3 py-3 text-center text-sm  uppercase tracking-wide text-lk-main font-semibold">საგადახდო დოკუმენტი</th>
                <th scope="col" class="px-3 py-3 text-center text-sm  uppercase tracking-wide text-lk-main font-semibold">სტატუსის ცვლილება</th>
                <th scope="col" class="relative py-3 pl-3 pr-4 sm:pr-6">
                  <span class="sr-only">Edit</span>
                </th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 bg-white">
              @foreach ($orders as $order)
              <tr>
                  <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm  text-lk-main sm:pl-6">{{$loop->iteration}}</td>
                  <td class="whitespace-nowrap px-3 py-4 text-sm text-lk-main font-semibold text-center">
                      @switch($order->user->is_company)
                          @case("false")
                            {{$order->user->customer_name . " " . $order->user->customer_last}}
                              @break

                          @default
                          {{$order->user->company_name}}
                      @endswitch
                  </td>
                  <td class="whitespace-nowrap px-3 py-4 text-sm text-lk-main font-semibold text-center">{{$order->user->customer_id}}</td>
                  <td class="whitespace-nowrap px-3 py-4 text-sm text-lk-main font-semibold text-center">{{$order->order_type}}</td>
                  <td class="whitespace-nowrap px-3 py-4 text-sm text-lk-main font-semibold text-center">{{$order->created_at}}</td>
                  <td class="whitespace-nowrap px-3 py-4 text-sm font-semibold text-center"><a href="/invoice/{{ $order->id }}"><p class="text-blue-500">იხილეთ ინვოისი</p></a></td>
                  <td class="whitespace-nowrap px-3 py-4 text-sm font-semibold text-center">
                    @switch($order->order_info)
                    @case('შეკვეთა მუშავდება')
                        <p class="text-gray-400"> {{ $order->order_info }}</p>
                    @break

                    @case('შეკვეთა გაუქმებულია')
                        <p class="text-red-500 font-semibold"> {{ $order->order_info }}</p>
                    @break

                    @case('საწვავი ასახულია')
                        <p class="text-green-500"> {{ $order->order_info }}</p>
                    @break

                    @case('ბარათი დამზადებულია')
                        <p class="text-green-500"> {{ $order->order_info }}</p>
                    @break

                    @default
                @endswitch
                </td>
                  <td class="whitespace-nowrap px-3 py-4 text-sm text-lk-main font-semibold text-center">
                      @switch($order->personalization)
                          @case(null)
                              <p>პერსონალიზაცია</p>
                              @break

                          @default
                          <a href="/storage/{{$order->personalization}}" class="text-blue-500">პერსონალიზაცია</a>
                      @endswitch
                  </td>
                  <td class="whitespace-nowrap px-3 py-4 text-sm text-lk-main font-semibold text-center">
                    @switch($order->paycheck)
                    @case(null)
                        <p>საგადახდო დოკუმენტი</p>
                        @break

                    @default
                    <a href="/storage/{{$order->paycheck}}" class="text-blue-500">საგადახდო დოკუმენტი</a>
                @endswitch
                  </td>
                  <td class="whitespace-nowrap px-3 py-4 text-sm text-lk-main font-semibold text-center">
                        <form action="/admin/order-change" method="POST">
                            @csrf
                            <select class="w-40 h-10 bg-white rounded-md text-lk-main font-semibold border-2 border-lk-main" name="change" onchange="this.form.submit()">
                                <option class="text-lk-main font-semibold" value="">სტატუსი</option>
                                <option class="text-lk-main font-semibold" value="delete,{{$order->id}}">წაშლა</option>
                                <option class="text-lk-main font-semibold" value="fullfill,{{$order->id}}">ასახულია</option>
                                <option class="text-lk-main font-semibold" value="block,{{$order->id}}">გაუქმება</option>
                            </select>
                        </form>
                  </td>
                </tr>
              @endforeach

              <!-- More people... -->
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
