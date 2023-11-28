@extends('admin.index')
@section('title', 'Market Products')
@section('marketproductAdmin')
    <div class="container">
        <h3>PRODUCT</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="text-center">ID</th>
                    <th>NAME</th>
                    <th>CATEGORY</th>
                    <th>IMAGE</th>
                    <th class="text-center">Description</th>
                    <th class="text-center">PRICE</th>
                    <th class="text-center">SETTING</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($product as $item)
                    <tr>
                        <td class="text-center">{{ $item->id }}</td>
                        <td class="text-center">{{ $item->name }}</td>
                        <td class="text-center">{{ $item->product_id }}</td>
                        <td>
                            <img src='{{ URL::asset('storage/' . $item->image) }}' width="200px" />
                        </td>
                        <td class="text-center">{{ $item->description }}</td>
                        <td>{{ $item->price }} $</td>
                        <td class="text-center">
                            <ul class="table-controls">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <form action="{{ route('market.product.index', $item->id) }}" method="get">
                                        @csrf
                                        <a href="{{ route('market.product.update', $item->id) }}"><button
                                                class="btn btn-success">Upload</button></a>
                                    </form>
                                    <form action='{{ route('market.product.destroy.submit', $item->id) }}' method='POST'>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </ul>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="container border">
            <div class="relative flex items-center min-h-screen justify-center overflow-hidden">
                <h3>ADD PRODUCT</h3>
                <form action="{{ route('market.product.store') }}" method="POST" class="shadow p-12"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="form-group">
                            <label for="name">Product name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <label for="name">CATEGORY</label>

                        <select class='form-control  basic' id='product_id' name="product_id">
                            @foreach ($category as $item)
                                {{ dump($item->id) }}
                                <option value='{{ $item->id }}'>{{ $item->name }}</option>
                            @endforeach


                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name">IMAGE</label>
                        <span class="sr-only">Choose File</span>
                        <input type="file" name="image" class='form-control-file' />
                    </div>
                    <div class="form-group">
                        <label for="name">DESCRIPTION</label>
                        <textarea style="resize:none" type="text" class="form-control" id="description" name="description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="name">Price</label>
                        <textarea style="resize:none" type="text" class="form-control" id="price" name="price"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary mb-2">Add</button>
                </form>
            </div>
        </div>
    </div>
    </div>
    <div class="container" >
        <div class="light-wrapper">
            <div class="container inner">
                <div class="cbp-panel">
                    <div id="filters-container" class="cbp-filter-container text-center">
                        <div data-filter="*" class="cbp-filter-item-active cbp-filter-item"> All </div>
                        @foreach ($category as $category)
                            <div data-filter=".{{ $category->id }}" class="cbp-filter-item">{{ $category->name }}</div>
                        @endforeach
                    </div>
                    <div id="grid-container" class="cbp">
                        @foreach ($product as $product)
                            <div class="cbp-item {{ $product->categories->pluck('id')->implode(' ') }}">
                                <a href="ajax/project1.html" class="cbp-caption cbp-singlePageInline">
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
    </div>

@endsection
