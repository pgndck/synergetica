@props(['data', 'names'])

@if($data->count())

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

@else

    <h2 class="text-xl my-2 mx-auto text-gray-500">No data</h2>

@endif
