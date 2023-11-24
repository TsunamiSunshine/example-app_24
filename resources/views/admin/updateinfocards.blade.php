@extends('admin.index')
@section('title', 'InfoCards update{{ $updateinfocards->id }}')
@section('AdminUpdateInfocards')
    @foreach ($updateinfocards as $item)
    <div class="container">
        @csrf
        <div class="d-flex justify-content-around">
            <div class="container border">
                <div class="relative flex items-center min-h-screen justify-center overflow-hidden">

                    <h3>UPLOAD INFOCARD {{ $item->id }}</h3>
                    <form action="{{ route('admin.infocards.update.submit', $item->id) }}" method="POST" class="shadow p-12"
                        enctype="multipart/form-data">
                        @endforeach
                        @csrf
                        <select class='form-control  basic' id='category_id' name="category_id">
                            @foreach ( $category as $select)
                                <option value="{{ $select->category_id }}">{{ $select->name_category }}</option>
                            @endforeach
                        </select>
                        @foreach ($updateinfocards as $item)
                        <div class="form-group">
                            <label for="name">Update Caption Large</label>
                            <input type="text" value="{{ $item->clarge }}" class="form-control" id="clarge"
                                name="clarge">
                        </div>
                        <div class="form-group">
                            <label for="name">Update Caption Medium</label>
                            <input type="text" value="{{ $item->cmedium }}" class="form-control" id="cmedium"
                                name="cmedium">
                        </div>
                        <label class="block mb-4">
                            <span class="sr-only">Choose File</span>
                            <input type="file" name="image" class='form-control-file' />

                        </label>
                        <button type="submit" class="btn btn-primary mb-2">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    @endsection
