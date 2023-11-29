<div class="card">
    <img src="{{ URL::asset('storage/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
    <div class="card-body">
        <h5 class="card-title">{{ $product->name }}</h5>
        <p class="card-text">{{ $product->description }}</p>
        <p class="card-text">Price: ${{ $product->price }}</p>

        <form action="/cart/add" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <input type="number" name="quantity" value="1" min="1">
            <button type="submit" class="btn btn-primary">Add to Cart</button>
        </form>
    </div>
</div>
