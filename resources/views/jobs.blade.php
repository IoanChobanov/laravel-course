<x-layout>
    <x-slot:heading>
        Job listings
    </x-slot:heading>
    <ul>
        @foreach ($jobs as $job)
            <li>
                <a
                    class="hover:text-blue-500"
                    href="/jobs/{{ $job['id'] }}"
                >
                    <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year.
            </li>
            </a>
        @endforeach
    </ul>
</x-layout>
