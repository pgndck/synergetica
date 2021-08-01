@extends('components.layout.layout')

@section('content')

    <h1 class="text-3xl my-20">Courses</h1>

    <x-table.table
        :data="\App\Models\Course::with('students')->get()"
        :names="[ 'Course Name', 'Course Description', 'Participants', 'Start Date', 'End Date']"
    />

@endsection
