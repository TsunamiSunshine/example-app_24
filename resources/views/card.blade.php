
<div class="card">
    <img src="{{ URL::asset('storage/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
    <div class="card-body">
        <form action="{{ route('orders.addToCart') }}" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <h2>{{ $product->name }}</h2>
            <p>{{ $product->description }}</p>
            <p>Цена: {{ $product->price }}</p>
            <label for="quantity">Количество:</label>
            <input type="number" name="quantity" id="quantity" value="1">
            <button type="submit">Добавить в корзину</button>
        </form>
    </div>
</div>

