@extends('layout')

@section('content')

    <h1 class="text-3xl my-20">Courses</h1>

    <x-table
        :courses="$courses"
        :names="[ 'Course Name', 'Participants', 'Start Date', 'End Date']"
    />

@endsection
