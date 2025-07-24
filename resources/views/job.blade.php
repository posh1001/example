<x-layout>
    <x-slot name="heading">
        Job
    </x-slot>

    <h2>{{ $job['title'] }}</h2>

    <p>This job pays: {{ $job['salary'] }} per year.</p>
</x-layout>
