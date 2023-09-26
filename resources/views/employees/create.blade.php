@extends('layouts.master')


@section('content')
    <div class="container">
        <h1>Add New Employee</h1>
        <form action="{{ route('employees.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Name:</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Save</button>
            </div>
        </form>
    </div>
@endsection
