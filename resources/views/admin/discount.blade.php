@extends('admin.index')
@section('title', 'Market Discount')
@section('marketDiscountAdmin')
    <h1>Discounts</h1>

    <a href="{{ route('discount.create') }}" class="btn btn-primary mb-3">Create Discount</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Percent Off</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($discounts as $discount)
                <tr>
                    <td>{{ $discount->id }}</td>
                    <td>{{ $discount->name }}</td>
                    <td>{{ $discount->percent_off }}%</td>
                    <td>
                        <a href="{{ route('discounts.edit', $discount->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('discounts.destroy', $discount->id) }}" method="POST" class="d-inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @endsection

