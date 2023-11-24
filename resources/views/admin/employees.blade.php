@extends('admin.index')
@section('title', 'Employees')
@section('employees')
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
@endsection
