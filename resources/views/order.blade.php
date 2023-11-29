@if (count($cartItems) > 0)
    <table class="table">
        <thead>
            <tr>
                <th>Название</th>
                <th>Цена</th>
                <th>Количество</th>
                <th>Итого</th>
                <th>Действие</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cartItems as $item)
                <tr>
                    <td>{{ $item->product->name }}</td>
                    <td>{{ $item->product->price }} ₽</td>
                    <td>{{ $item->quantity }}</td>
                    <td>{{ $item->product->price * $item->quantity }} ₽</td>
                    <td>
                        <form action="/cart/remove" method="POST">
                            @csrf
                            <input type="hidden" name="item_id" value="{{ $item->id }}">
                            <button type="submit" class="btn btn-danger">Удалить</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th colspan="3">Итого</th>
                <th>{{ $total }} ₽</th>
                <th></th>
            </tr>
        </tfoot>
    </table>
@else
    <p>Корзина пуста</p>
@endif
