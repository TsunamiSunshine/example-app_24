
<x-app-layout>




    <div class="dark-wrapper">
    <div class="container inner">
        <div class="cbp-panel">
            <div id="filters-container" class="cbp-filter-container text-center text-light">
                <div data-filter="*" class="cbp-filter-item-active cbp-filter-item"> All </div>
                @foreach ($category as $category)
                <div data-filter=".{{ $category->id }}" class="cbp-filter-item">{{ $category->name }}</div>
                @endforeach
            </div>
            <div id="grid-container" class="cbp">
                @foreach ($product as $product)
                    <div class="cbp-item {{ $product->product_id}}">
                        <a href="{{route('market.product.show', $product->id)}}" class="cbp-caption cbp-singlePageInline">
                            <div class="cbp-caption-defaultWrap">
                                <img src="{{ URL::asset('storage/' . $product->image) }}" alt="" />
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">{{ $product->name }}</div>
                                        <div class="cbp-l-caption-desc">{{ $product->description }}</div>
                                        <div class="cbp-l-caption-desc">{{ $product->price }}$</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
        </div>
    </div>
</div>
</x-app-layout>
