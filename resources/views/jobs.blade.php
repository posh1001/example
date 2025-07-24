<x-layout>
    <x-slot name="heading">
        Job Listings
    </x-slot>

    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}">
                    {{ $job['title'] }}: pays {{ $job['salary'] }} per year.
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
