<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot:heading>

    <h2 class="font-bold text-lg">{{ $job->title }}</h2>

    <p>
        This job pays {{ $job->salary }} per year.
    </p>

    <p>
        <x-button href="/jobs/{{ $job->id }}/edit">Edit job</x-button>
    </p>

</x-layout>
