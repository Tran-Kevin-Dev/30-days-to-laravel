<x-layout>
    <x-slot:heading>
        Job listing
    </x-slot:heading>
    <h1>Hello from the job page</h1>
    
    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/" class="text-blue-500 hover:underline">
                    <strong>{{$job['Title']}}:</strong> Pays {{$job['Salary']}} per year.
                </a>
            </li>
        @endforeach
    </ul>

</x-layout>