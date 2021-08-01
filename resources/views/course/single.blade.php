@extends('components.layout.layout')

@section('content')

    <h1 class="text-3xl mt-20"><span class="font-bold">{{ $course->name }}</span></h1>
    <h3 class="text-xl text-gray-600">{{ $course->description }}</h3>
    <span class="text-gray-500 text-sm">
        {{ date('M d, Y', $course->start_date->timestamp) }}
        to
        {{ date('M d, Y', $course->end_date->timestamp) }}
    </span>

    <h2 class="text-3xl mt-20">Participants:</h2>

    <x-table.table
        :data="$course->students"
        :names="[ 'Student', 'Email', 'Courses amount']"
    />

@endsection
