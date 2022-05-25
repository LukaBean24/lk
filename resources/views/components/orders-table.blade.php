@props(['orders'])
    <div class="w-11/12 xl:w-3/5 lg:w-4/5 mt-8 flex flex-col">
      <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
          <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
            <table class="min-w-full divide-y divide-gray-300">
              <thead class="bg-gray-50">
                <tr>
                  <th scope="col" class="py-3 pl-4 pr-3 text-left text-sm   tracking-wide text-lk-main font-semibold sm:pl-6">#</th>
                  <th scope="col" class="px-3 py-3 text-center text-sm   tracking-wide text-lk-main font-semibold">{{__('date')}}</th>
                  <th scope="col" class="px-3 py-3 text-center text-sm   tracking-wide text-lk-main font-semibold">{{__('order_type')}}</th>
                  <th scope="col" class="px-3 py-3 text-center text-sm   tracking-wide text-lk-main font-semibold">{{__('payment_amount')}}</th>
                  <th scope="col" class="px-3 py-3 text-center text-sm   tracking-wide text-lk-main font-semibold">{{__('invoice')}}</th>
                  <th scope="col" class="px-3 py-3 text-center text-sm   tracking-wide text-lk-main font-semibold">{{__('payment_document')}}</th>
                  <th scope="col" class="px-3 py-3 text-center text-sm   tracking-wide text-lk-main font-semibold">{{__('order_status')}}</th>
                  <th scope="col" class="px-3 py-3 text-center text-sm   tracking-wide text-lk-main font-semibold"></th>
                  <th scope="col" class="relative py-3 pl-3 pr-4 sm:pr-6">
                    <span class="sr-only">Edit</span>
                  </th>
                </tr>
              </thead>

              <tbody class="divide-y divide-gray-200 bg-white">
                @foreach ($orders as $order)
                <tr>
                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm  text-lk-main sm:pl-6">{{$loop->iteration}}</td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-lk-main font-semibold text-center">{{$order->created_at}}</td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-lk-main font-semibold text-center">
                       @switch($order->order_type)
                           @case("ბარათი")
                               {{__("card")}}
                               @break
                       @case('საწვავი')
                       {{__("fuel")}}
                       @break
                           @default

                       @endswitch
                    </td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-lk-main font-semibold text-center">{{$order->sum . " ". __('gel')}}</td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-lk-main font-semibold text-center"><a href="/invoice/{{ $order->id }}">{{__('see_invoice')}}</a></td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-lk-main font-semibold text-center flex justify-start items-center relative">
                       @switch($order->paycheck)
                           @case(null)
                                <form action="/order/{{$order->id}}/paycheck" method="POST" enctype="multipart/form-data" class="w-full h-full flex justify-center items-center">
                                    @csrf
                                    @method("PUT")
                                    <input type="file" name="file" class="w-10 h-10 opacity-0 z-20" onchange="this.form.submit()">
                                    <i class='bx bxs-cloud-upload text-5xl text-lk-main z-10 absolute'></i>
                                </form>
                               @break

                           @default
                           <div class="w-full h-full flex justify-center items-center">
                                <a href="/storage/{{$order->paycheck}}">
                                    <i class='bx bxs-cloud-download text-5xl text-lk-main cursor-pointer'></i>
                                </a>
                           </div>
                       @endswitch
                    </td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm font-semibold text-center">
                    @switch($order->order_info)
                        @case('შეკვეთა მუშავდება')
                            <p class="text-gray-400"> {{__('pending_order')}}</p>
                        @break

                        @case('შეკვეთა გაუქმებულია')
                            <p class="text-red-500 font-semibold"> {{__('order_blocked')}} </p>
                        @break

                        @case('საწვავი ასახულია')
                            <p class="text-green-500"> {{__('order_done')}} </p>
                        @break

                        @case('ბარათი დამზადებულია')
                            <p class="text-green-500"> {{__('card_done')}} </p>
                        @break

                        @default
                            <p class="text-black">{{ $order->order_info }}</p>
                    @endswitch
                    </td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-lk-main font-semibold text-center">
                        @switch($order->order_info)
                        @case('შეკვეთა მუშავდება')
                            <form action="/order/{{ $order->id }}" class="w-2/3 h-10" method="POST">
                                @csrf
                                @method("PUT")
                                <button
                                    class="w-40 h-full bg-lk-main text-xs text-white rounded-xl hover:bg-red-500 duration-200">{{__('cancel')}}</button>
                            </form>
                        @break

                        @case('შეკვეთა გაუქმებულია')
                            <form action="/order/{{ $order->id }}" class="w-2/3 h-10" method="POST">
                                @csrf
                                @method("PUT")
                                <button disabled
                                    class="w-40 h-full bg-gray-600 text-sm text-white rounded-xl  duration-200">{{__('cancel')}}</button>
                            </form>
                        @break
                        @default
                    @endswitch
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
