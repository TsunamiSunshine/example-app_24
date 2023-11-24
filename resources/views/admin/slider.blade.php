@extends('admin.index')
@section('title', 'Slider')
@section('sliderAdmin')
    <div class="container">

        @include('components.slider')

    </div>

    <div class="container">
        <div class="table-responsive">
            <table class="table table-bordered mb-4">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Img</th>
                        <th>Position_Slider</th>
                        <th>Large Caption</th>
                        <th>Medium Caption</th>
                        <th class="text-center">Control</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($slider as $slider)
                        <tr>
                            <td>{{ $slider->id }}</td>
                            <td><img src="{{ URL::asset('storage/' . $slider->image) }}" width="300px" /></td>
                            <td class="text-center">{{ $slider->position }}</td>
                            <td class="text-center">{{ $slider->clarge }}</td>
                            <td class="text-center">{{ $slider->cmedium }}</td>
                            <td class="text-center">
                                <form action="{{route('admin.slider.update',$slider->id)}}" method="GET">
                                    @csrf
                                    <a href=''><button name="change" class="btn-warning btn-rounded">Update</button></a>
                                </form>
                                <form action="{{route('admin.slider.destroy.submit', $slider->id)}}" method="POST">
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
                <h3>ADD SLIDER</h3>
                <form action="{{ route('admin.slider') }}" method="POST" class="shadow p-12" enctype="multipart/form-data">
                    @csrf
                    <select name="position">
                        <option value="1">Slider №1</option>
                        <option value="2">Slider №2</option>
                        <option value="3">Slider №3</option>
                    </select>
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
                        <input type="file" name="image" class='form-control-file' />
                        @error('image')
                            <span class="text-red-600 text-sm">{{ $message }}</span>
                        @enderror
                    </label>
                    <button type="submit" class="btn btn-primary mb-2">Upload</button>
                </form>
            </div>
        </div>
    </div>

@endsection
