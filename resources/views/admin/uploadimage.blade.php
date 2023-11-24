@extends('admin.index')
@section('imageupload')
    <div class="relative flex items-center min-h-screen justify-center overflow-hidden">
        <form action="{{ route('image.index') }}" method="POST" class="shadow p-12" enctype="multipart/form-data">
            @csrf
            <label class="block mb-4">
                <span class="sr-only">Choose File</span>
                <input  type="file" name="image"
                    class='form-control-file' />
                @error('image')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </label>
            <button type="submit" class="btn btn-primary mb-2">Upload</button>
        </form>
    </div>
    <div class="setting">
    </div>
    <div class="table-responsive">
        <table class="table table-bordered mb-4">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Img</th>
                    <th>ID_Group</th>
                    <th class="text-center">Control</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                    <td class="text-center">
                        <button class="btn-success btn-rounded">View</button>
                        <button class="btn-warning btn-rounded">Change</button>
                        <button class="btn-danger btn-rounded">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                    <td class="text-center"></td>
                </tr>
                <tr>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                    <td class="text-center"></td>
                </tr>
                <tr>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                    <td class="text-center"></td>
                </tr>
            </tbody>
        </table>
    </div>



    <div class="container">
        @include('components.slider')
        </div>
@endsection

