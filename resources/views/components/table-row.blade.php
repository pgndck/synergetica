@props(['course'])

<tr>
    <x-table-cell :text="$course->name" :link="route('course', ['course' => $course->id])" />
    <x-table-cell :text="$course->students->count()" />
    <x-table-cell :text="date('F d, Y', $course->start_date->timestamp)" />
    <x-table-cell :text="date('F d, Y', $course->end_date->timestamp)"  />
</tr>
