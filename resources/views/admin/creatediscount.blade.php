@extends('admin.index')
@section('title', 'Create Discount')

@section('marketCreateDiscountAdmin')
    <h1>Create Discount</h1>

    <form action="{{ route('discount.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="percent_off">Percent Off</label>
            <input type="number" name="percent_off" id="percent_off" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection
