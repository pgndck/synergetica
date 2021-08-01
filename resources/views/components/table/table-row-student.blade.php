@props(['item'])

<tr>
    <x-table.table-cell
        :text="$item->first_name . ' ' . $item->last_name"
        :link="route('student', ['student' => $item->id])"
    />
    <x-table.table-cell :text="$item->email"/>
    <x-table.table-cell
        :text="$item->courses->count()"
    />
</tr>
