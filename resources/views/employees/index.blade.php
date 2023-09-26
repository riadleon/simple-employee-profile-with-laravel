@extends('layouts.master')

@section('content')
    <div class="container">
        <h1 class="text-center mb-5">Employee Profiles</h1>
        <a href="{{ route('employees.create') }}" class="btn btn-primary mb-4">Add New Employee</a>

        <div class="table-container">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($employees as $employee)
                        <tr>
                            <td>{{ $employee->id }}</td>
                            <td>{{ $employee->name }}</td>
                            <td>{{ $employee->email }}</td>
                            <td>
                                <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-warning mr-2">Edit</a>

                                <form action="{{ route('employees.destroy', $employee->id) }}" method="POST"
                                    class="inline-form">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
