@extends('admin.index')
@section('title', 'Market Categories')
@section('marketAdmin')

    <div class="container">
        <div class="table-responsive">
            <div class="container">
                <h3>CATEGORY</h3>
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">CATEGORY ID</th>
                            <th>IMAGE</th>
                            <th class="text-center">NAME CATEGORY</th>
                            <th class="text-center">SETTING</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($category as $item)
                            <tr>
                                <td class="text-center">
                                    {{ $item->category_id }}
                                </td>

                                <td>
                                    <img src='{{ URL::asset('storage/' . $item->image) }}' width="200px" />
                                </td>
                                <td class="text-center">
                                    {{ $item->name }}
                                </td>
                                <td class="text-center">
                                    <ul class="table-controls">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <form action="" method="GET">
                                                <a href="{{route('market.category.update', $item->id)}}"><button class="btn btn-success">Upload</button></a>
                                            </form>
                                            <form action="{{route('market.category.destroy.submit', $item->id)}}" method="POST">
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
                        <form action="{{route('market.category.store')}}" method="POST" class="shadow p-12" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Category name</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="form-group">
                                <label for="name">Category ID</label>
                                <input type="text" class="form-control" id="category_id" name="category_id">
                            </div>
                            <div class="form-group">
                                <label for="name">DESCRIPTION</label>
                                <textarea style="resize:none" type="text" class="form-control" id="description" name="description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="name">IMAGE</label>
                                <span class="sr-only">Choose File</span>
                                <input type="file" name="image" class='form-control-file' />
                            </div>
                            <button type="submit" class="btn btn-primary mb-2">Add</button>
                        </form>
                    </div>
                </div>
            </div>
    @endsection
