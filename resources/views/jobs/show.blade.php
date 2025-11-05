<x-layout>
    <x-slot:heading>
        Job listings
    </x-slot:heading>
    <h2 class="font-bold text-lg">{{ $job->title }}</h2>

    <p>
        This job pays {{ $job->salary }} per year.
    </p>

    <p class="mt-4">
        <x-button href="/jobs/{{ $job->id }}/edit">Edit job</x-button>
    </p>
</x-layout>
