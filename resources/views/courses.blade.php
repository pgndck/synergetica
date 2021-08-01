@extends('layout')

@section('content')

    <h1 class="text-3xl my-20">Courses</h1>

    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <x-table-heading :text="'Course Name'" />
                <x-table-heading :text="'Participants'" />
                <x-table-heading :text="'Start Date'" />
                <x-table-heading :text="'End Date'" />
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach($courses as $course)
                <tr>
                    <x-table-cell :text="$course->name" :link="route('course', ['course' => $course->id])" />
                    <x-table-cell :text="$course->students->count()" />
                    <x-table-cell :text="date('F d, Y', $course->start_date->timestamp)" />
                    <x-table-cell :text="date('F d, Y', $course->end_date->timestamp)"  />
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection

{{--<table>--}}

{{--</table>--}}

