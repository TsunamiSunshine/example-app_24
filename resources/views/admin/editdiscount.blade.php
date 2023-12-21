@extends('admin.index')
@section('title', 'Edit Discount')
@section('marketEditDiscountAdmin')
    <h1>Edit Discount</h1>

    <form action="{{ route('discounts.update', $discount->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $discount->name }}" required>
        </div>

        <div class="form-group">
            <label for="percent_off">Percent Off</label>
            <input type="number" name="percent_off" id="percent_off" class="form-control" value="{{ $discount->percent_off }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
