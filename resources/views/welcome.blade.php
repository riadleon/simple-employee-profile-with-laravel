@extends('layouts.master')

@section('content')
    <div class="center-div">
        <div class="text-center">
            <h1>Welcome to the Employee Profile Manager</h1>
            <p>A simple Laravel application to manage employee profiles.</p>
            <a href="{{ route('employees.index') }}" class="btn btn-primary mt-3">View Employee Profiles</a>
        </div>
    </div>
@endsection
