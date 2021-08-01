@extends('components.layout.layout')

@section('content')

    <h1 class="text-3xl my-20">Students</h1>

    <x-table.table
        :data="\App\Models\Student::with('courses')->get()"
        :names="[ 'Student', 'Email', 'Courses amount']"
    />

@endsection
