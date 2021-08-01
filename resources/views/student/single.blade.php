@extends('components.layout.layout')

@section('content')

    <h1 class="text-3xl mt-20"><span class="font-bold">{{ $student->first_name . ' ' . $student->last_name }}</span></h1>
    <h3 class="text-xl text-gray-600">{{ $student->email }}</h3>

    <h2 class="text-3xl mt-20">Courses:</h2>

    <x-table.table
        :data="$student->courses"
        :names="[ 'Course Name', 'Course Description', 'Participants', 'Start Date', 'End Date']"
    />

@endsection
