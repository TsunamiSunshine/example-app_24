<x-app-layout>
    <div class="dark-wrapper" style="margin: 0 150px;">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h1 class="text-3xl font-bold mb-4">Shopping Cart</h1>

              @if (session()->has('success_message'))
              <div class="alert alert-success">
                {{ session()->get('success_message') }}
              </div>
              @endif

              @if (Cart::count() > 0)
              <table class="table w-full text-center">
                <thead>
                  <tr class="bg-gray-50 border-b border-gray-200">
                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price</th>
                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Quantity</th>
                    <th class="px-1 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                  </tr>
                </thead>

                <tbody class="bg-white divide-y divide-gray-200">
                  @foreach (Cart::content() as $item)
                  <tr>
                    <td class="border px-4 py-2">{{ $item->name }}</td>
                    <td class="border px-4 py-2">{{ $item->price }}</td>
                    <td class="border px-4 py-2">
                      <form action="{{ route('cart.update', $item->rowId) }}"  class="flex flex-row items-center" method="POST">
                        @csrf
                        @method('PATCH')
                        <input name="quantity" type="number"  value="{{ $item->qty }}" class="w-4" style="margin: 10px;">
                        <button type="submit" style="background-color: #3ca975; margin-right:10px;" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded ">Update</button>
                      </form>
                    </td>
                    <td class="border px-4 py-2 flex flex-col items-center" >
                      <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Remove</button>
                      </form>

                      <form action="{{ route('cart.switchToSaveForLater', $item->rowId) }}" method="POST">
                        @csrf
                        <button type="submit" style="background-color: #3ca975;margin-top:10px;" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Save for Later</button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>

              <div class="row mt-4">
                <div class="col-md-6">
                  <a href="{{route('market.index')}}" style="background-color: #3ca975; margin-bottom:10px;" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Continue Shopping</a>
                </div>

                <div class="col-md-6">
                  <div class="card ">
                    <div class="card-header bg-gray-200 font-bold text-center" style="margin: 10px 0;"> Cart Totals </div>

                    <div class="card-body">
                      <table class="table w-full text-center">
                        <tbody>
                          <tr>
                            <td class="border px-4 py-2">Subtotal</td>
                            <td class="border px-4 py-2">{{ Cart::subtotal() }}$</td>
                          </tr>

                          <tr>
                            <td class="border px-4 py-2">Tax</td>
                            <td class="border px-4 py-2">{{ Cart::tax() }}$</td>
                          </tr>

                          <tr>
                            <td class="border px-4 py-2"><strong>Total</strong></td>
                            <td class="border px-4 py-2"><strong>{{ Cart::total() }}$</strong></td>
                          </tr>
                        </tbody>
                      </table>

                      <a href="{{route('checkout.index')}}" style="background-color: #3ca975" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Proceed to Checkout</a>
                    </div>
                  </div>
                </div>
              </div>
              @else
              <h3>No items in Cart!</h3>
              @endif
            </div>
          </div>
        </div>
      </div>



</x-app-layout>
