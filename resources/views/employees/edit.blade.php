@extends('layouts.master')


@section('content')
    <div class="container">
        <h1>Edit Employee</h1>
        <form action="{{ route('employees.update', $employee->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Name:</label>
                <input type="text" name="name" value="{{ $employee->name }}" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" name="email" value="{{ $employee->email }}" class="form-control" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </form>
    </div>
@endsection
