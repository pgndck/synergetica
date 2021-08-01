<ul class="flex bg-gray-100 px-5">
    @foreach(['home', 'courses', 'students'] as $route)
        <li class="mr-6">
            <a class="text-red-500 hover:text-red-800" href="{{ route($route) }}">
                {{ ucfirst($route) }}
            </a>
        </li>
    @endforeach
</ul>
