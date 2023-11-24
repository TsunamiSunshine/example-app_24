@extends('admin.index')
@section('title', 'Show Slider - {{ $showslider->id }}')
@section('showSlider')
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
                    {{-- @foreach ($showslider as $slider)
                    <tr>
                        <td>{{ $slider->id }}</td>
                        <td><img src="{{ URL::asset('storage/' . $slider->image) }}" width="300px" /></td>
                        <td class="text-center">{{ $slider->position }}</td>
                        <td class="text-center">{{ $slider->clarge }}</td>
                        <td class="text-center">{{ $slider->cmedium }}</td>
                        <td class="text-center">
                            @foreach ($showslider as $slider)
                            <form method="GET">
                                <a href="{{route('admin.slider.update.submit' , $showslider->id)}}"><button name="change" class="btn-warning btn-rounded">Update</button></a>
                                <button name="delete" class="btn-danger btn-rounded">Delete</button>
                            </form>
                            @endforeach
                        </td>
                    </tr>
                @endforeach --}}
                </tbody>
            </table>
        </div>
    @endsection
