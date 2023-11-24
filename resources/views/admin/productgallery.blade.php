@extends('admin.index')
@section('productgallery')
    <div class="container">
        <div class="table-responsive">
            <div class="container">
                <h3>CATEGORY</h3>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">CATEGORY ID</th>
                            <th class="text-center">NAME CATEGORY</th>
                            <th class="text-center">SETTING</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($category as $formcreate)
                            <tr>
                                <td class="text-center">
                                    {{ $formcreate->category_id }}
                                </td>
                                <td class="text-center">
                                    {{ $formcreate->name_category }}
                                </td>
                                <td class="text-center">
                                    <ul class="table-controls">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <form action="{{ route('admin.productgallery.update', $formcreate->id) }}"
                                                method="GET">
                                                <a href=""><button class="btn btn-success">Upload</button></a>
                                            </form>
                                            <form action="{{ route('admin.category.destroy', $formcreate->id) }}"
                                                method="POST">
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
                        <h3>ADD CATEGORY</h3>
                        <form action="{{ route('admin.productgallery') }}" method="POST" class="shadow p-12"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Category name</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="form-group">
                                <label for="name">Category ID</label>
                                <input type="text" class="form-control" id="category_id" name="category_id">
                            </div>
                            <button type="submit" class="btn btn-primary mb-2">Add</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="container">
                <h3>INFO CARD</h3>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">ID CARD</th>
                            <th>IMAGE</th>
                            <th class="text-center">CAPTION LARGE</th>
                            <th class="text-center">CAPTION MEDIUM</th>
                            <th class="text-center">SETTING</th>

                        </tr>
                    </thead>
                    <tbody>
                        {{-- {{dd($infoCards)}} --}}
                        @foreach ($infoCards as $item)
                            <tr>
                                <td class="text-center">{{ $item->id }}</td>
                                <td class="text-center">{{ $item->card_id }}</td>
                                <td>
                                    <img src="{{ URL::asset('storage/' . $item->image) }}" width="200px" />
                                </td>
                                <td class="text-center">{{ $item->clarge }}</td>
                                <td class="text-center">{{ $item->cmedium }}</td>
                                <td class="text-center">
                                    <ul class="table-controls">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <form action="{{route('admin.infocards.update', $item->id)}}" method="get">
                                                @csrf
                                                <a href=""><button class="btn btn-success">Upload</button></a>
                                            </form>
                                            <form action='{{ route('admin.productgallery.infocard.destroy', $item->id) }}'
                                                method='POST'>
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
                        <h3>ADD INFO CARD</h3>
                        <form action="{{ route('admin.productgallery.store.infocard') }}" method="POST"
                            class="shadow p-12" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">CATEGORY ID</label>

                                <select class='form-control  basic' id='category_id' name="category_id">
                                    @foreach ($category as $select)
                                        <option value="{{ $select->category_id }}">{{ $select->name_category }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="name">IMAGE</label>
                                <span class="sr-only">Choose File</span>
                                <input type="file" name="image" class='form-control-file' />
                            </div>
                            <div class="form-group">
                                <label for="name">CAPTION LARGE</label>
                                <textarea style="resize:none" type="text" class="form-control" id="clarge" name="clarge"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="name">CAPTION MEDIUM</label>
                                <textarea style="resize:none" type="text" class="form-control" id="cmedium" name="cmedium"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary mb-2">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
