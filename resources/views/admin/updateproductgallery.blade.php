@extends('admin.index')
@section('title', 'Gallary - category update{{$gallery->name_category}}')
@section('GalleryAdminUpdate')
    @foreach ( $updategallery as $item )
        @csrf
        <div class="d-flex justify-content-around">
            <div class="container border">
                <div class="relative flex items-center min-h-screen justify-center overflow-hidden">

                    <h3>UPDATE GALLERY CATEGORY - {{$item->name_category}}</h3>
                    <form action="" method="POST" class="shadow p-12"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Update ID Category</label>
                            <input type="text" value="{{$item->category_id}}" class="form-control" id="category_id"
                                name="category_id">
                        </div>
                        <div class="form-group">
                            <label for="name">Update Name Category</label>
                            <input type="text" value="{{$item->name_category}}" class="form-control" id="name_category"
                                name="name_category">
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">Update</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection
