<x-layout>
    <x-slot name="heading">
        Job Listings
    </x-slot>

    <div class="space-y-4">
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}"
                class=" block px-4 py-6 border border-grey-200 rounded-lg">
                <div class="font-bold text-blue-500">{{ $job->employer->full_name }} </div>
                <div class="">
                 <strong>{{ $job['title'] }}:</strong> pays {{ $job['salary'] }} per year.
               </div>
            </a>
        @endforeach

        <div class="">
            {{ $jobs->links() }}
        </div>
    </div>
</x-layout>
