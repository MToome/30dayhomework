<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot:heading>

    <div  class="space-y-4">
        @foreach ($jobs as $job )

                <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-grey-200 rounded-lg ">
                    <div class="font-bold text-blue-500">{{$job->employer->name }}</div>
                    <div>
                        <strong class="text-laracast">{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year.
                    </div>
                </a>

        @endforeach

        <div>
           {{ $jobs -> links() }}
        </div>
    </div>

</x-layout>
