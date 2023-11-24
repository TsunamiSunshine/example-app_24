@extends('admin.index')
@section('title', 'Video update{{ $showvideo->id }}')
@section('VideoAdminUpdate')
    @foreach ($updatevideo as $updVideo)
        @csrf
        <div class="d-flex justify-content-around">
            <div class="container border">
                <div class="relative flex items-center min-h-screen justify-center overflow-hidden">

                    <h3>UPLOAD Video {{ $updVideo->id }}</h3>
                    <form action="{{ route('admin.video.update.submit', $updVideo->id) }}" method="POST" class="shadow p-12"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Update Caption Large</label>
                            <input type="text" value="{{ $updVideo->clarge }}" class="form-control" id="clarge"
                                name="clarge">
                        </div>
                        <div class="form-group">
                            <label for="name">Update Caption Medium</label>
                            <input type="text" value="{{ $updVideo->cmedium }}" class="form-control" id="cmedium"
                                name="cmedium">
                        </div>
                        <label class="block mb-4">
                            <span class="sr-only">Choose File</span>
                            <input type="file" name="video" id='video' class='form-control-file' />
                        </label>
                        <button type="submit" class="btn btn-primary mb-2">Update</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="outer-wrap inverse-wrapper">
                <div id="video-wrap" class="video-wrap">
                    <video width="640" height="480" playsinline autoplay muted loop>
                        <source src="{{ URL::asset('storage/' . $updVideo->video) }}" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    @endforeach
@endsection
