@extends('admin.index')
@section('title' ,'Blog')
@section('blog')
<div class="container">
    <div class="col-8">
        <h1>Add Blog</h1>
        <form method="POST" action="{{route('admin.blog.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Add blog</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="body">Description</label>
                <textarea class="form-control" id="body" rows="3" name="body"></textarea>
            </div>
            <div class="form-group">
                <label for="image">Image for blog</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
</div>


<div class="container">
    @foreach ($blog as $item)
    <div class="col-8">
        <h2>{{ $item->name }}</h2>
            <p><img src="{{ URL::asset('storage/'.$item->image) }}" width="100%" alt="">{{$item->description}}</p>
        </div>
    @endforeach
</div>
@endsection
