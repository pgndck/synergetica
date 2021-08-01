@props(['item'])

@switch( get_class($item) )
    @case(\App\Models\Course::class)
        <x-table.table-row-course :item="$item"/>
        @break

    @case(\App\Models\Student::class)
        <x-table.table-row-student :item="$item"/>
        @break

@endswitch
