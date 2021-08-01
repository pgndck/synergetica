@props(['item'])

<tr>
    <x-table.table-cell
        :text="$item->name"
        :link="route('course', ['course' => $item->id])"
    />
    <x-table.table-cell :text="$item->description"/>
    <x-table.table-cell :text="$item->students->count()"/>
    <x-table.table-cell :text="date('F d, Y', $item->start_date->timestamp)"/>
    <x-table.table-cell :text="date('F d, Y', $item->end_date->timestamp)"/>
</tr>
