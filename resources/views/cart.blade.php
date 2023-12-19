<x-app-layout>
    <div class="dark-wrapper">
        <div class="container inner">
            <div class="row">
                <div class="col-md-12">
                    <h1>Shopping Cart</h1>

                    @if (session()->has('success_message'))
                        <div class="alert alert-success">
                            {{ session()->get('success_message') }}
                        </div>
                    @endif

                    @if (Cart::count() > 0)
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach (Cart::content() as $item)
                                    <tr>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>
                                            <form action="{{ route('cart.update', $item->rowId) }}" method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <input name="quantity" type="number" value="{{ $item->qty }}">
                                                <button type="submit" class="btn btn-secondary btn-sm">Update</button>
                                            </form>
                                        </td>
                                        <td>
                                            <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Remove</button>
                                            </form>

                                            <form action="{{ route('cart.switchToSaveForLater', $item->rowId) }}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-secondary btn-sm">Save for Later</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div class="row">
                            <div class="col-md-6">
                                <a href="{{route('market.index')}}" class="btn btn-primary">Continue Shopping</a>
                            </div>

                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header"> Cart Totals </div>

                                    <div class="card-body">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>Subtotal</td>
                                                    <td>{{ Cart::subtotal() }}</td>
                                                </tr>

                                                <tr>
                                                    <td>Tax</td>
                                                    <td>{{ Cart::tax() }}</td>
                                                </tr>

                                                <tr>
                                                    <td><strong>Total</strong></td>
                                                    <td><strong>{{ Cart::total() }}</strong></td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <a href="{{route('checkout.index')}}" class="btn btn-success btn-block">Proceed to Checkout</a>
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
