<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot:heading>

    <h2 class="font-bold text-lg">{{ $job->title }}</h2>

    <p>
        This job pays {{ $job->salary }} per year.
    </p>

    @can('edit-job', $job)
        <p>
            <x-button href="/jobs/{{ $job->id }}/edit">Edit job</x-button>
        </p>
    @endcan
</x-layout>
