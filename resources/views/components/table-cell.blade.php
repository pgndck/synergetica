@props(['text', 'link'])

<td class="px-6 py-4 whitespace-nowrap">
    <div class="text-sm text-gray-900">
        @if (isset($link))
            <a class="underline text-red-500 hover:text-red-900" href="{{ $link }}">{{ $text }}</a>
        @else
            {{ $text }}
        @endif
    </div>
</td>
