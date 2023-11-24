@extends('admin.index')
@section('video')
    <div class="container">
        <div class="table-responsive">
            <table class="table table-bordered mb-4">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Video</th>
                        <th>Large Caption</th>
                        <th>Medium Caption</th>
                        <th class="text-center">Control</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($video as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>
                                <div class="outer-wrap inverse-wrapper">
                                    <div id="video-wrap" class="video-wrap">
                                        <video width="640" height="480" playsinline autoplay muted loop>
                                            <source src="{{ URL::asset('storage/' . $item->video) }}" type="video/mp4">
                                        </video>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">{{ $item->clarge }}</td>
                            <td class="text-center">{{ $item->cmedium }}</td>
                            <td class="text-center">
                                <form action="{{ route('admin.video.update', $item->id) }}" method="GET">
                                    @csrf
                                    <a href=''><button name="change"
                                            class="btn-warning btn-rounded">Update</button></a>
                                </form>
                                <form action="{{ route('admin.video.destroy.submit', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button name="delete" class="btn-danger btn-rounded">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="container border">
            <div class="relative flex items-center min-h-screen justify-center overflow-hidden">
                <h3>ADD VIDEO</h3>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('admin.store.video') }}" method="POST" class="shadow p-12"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Add Caption Large</label>
                        <input type="text" class="form-control" id="clarge" name="clarge">
                    </div>
                    <div class="form-group">
                        <label for="name">Add Caption Medium</label>
                        <input type="text" class="form-control" id="cmedium" name="cmedium">
                    </div>
                    <label class="block mb-4">
                        <span class="sr-only">Choose File</span>
                        <input type="file" name="video" class='form-control-file' />
                    </label>
                    <button type="submit" class="btn btn-primary mb-2">Upload</button>
                </form>
            </div>
        </div>
    @endsection
