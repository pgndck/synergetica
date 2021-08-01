@props(['data', 'names'])

<table class="min-w-full divide-y divide-gray-200">
    <thead class="bg-gray-50">
        <tr>
            @foreach($names as $name)
                <x-table.table-heading :text="$name" />
            @endforeach
        </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">
        @foreach($data as $item)
            <x-table.table-row :item="$item" />
        @endforeach
    </tbody>
</table>
