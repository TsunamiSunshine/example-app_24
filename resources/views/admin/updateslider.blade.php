@extends('admin.index')
@section('title', 'Slider update{{ $showslider->id }}')
@section('sliderAdminUpdate')
@foreach ($updateslider as $upslider )


    @csrf
        <div class="d-flex justify-content-around">
            <div class="container border">
                <div class="relative flex items-center min-h-screen justify-center overflow-hidden">

                    <h3>UPLOAD SLIDER {{ $upslider->id}}</h3>
                    <form action="{{route('admin.slider.update.submit',$upslider->id)}}" method="POST" class="shadow p-12" enctype="multipart/form-data">
                        @csrf
                        <select value='{{ $upslider->position }}' name="position">
                            <option value="1">Slider №1</option>
                            <option value="2">Slider №2</option>
                            <option value="3">Slider №3</option>
                        </select>
                        <div class="form-group">
                            <label for="name">Update Caption Large</label>
                            <input type="text" value="{{ $upslider->clarge }}" class="form-control" id="clarge"
                                name="clarge">
                        </div>
                        <div class="form-group">
                            <label for="name">Update Caption Medium</label>
                            <input type="text" value="{{ $upslider->cmedium }}" class="form-control" id="cmedium"
                                name="cmedium">
                        </div>
                        <label class="block mb-4">
                            <span class="sr-only">Choose File</span>
                            <input type="file" name="image" class='form-control-file' />
                            @error('image')
                                <span class="text-red-600 text-sm">{{ $message }}</span>
                            @enderror
                        </label>
                        <button type="submit" class="btn btn-primary mb-2">Update</button>
                    </form>
                </div>
            </div>
    </div>
    <div class="container">
        <img src="{{ URL::asset('storage/' . $upslider->image) }}" width="300px" />
    </div>
    @endforeach
@endsection
