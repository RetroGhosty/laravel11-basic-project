<x-layout>
    <x-slot:title>
        Job
    </x-slot:title>

    <h1 class="font-bold text-lg">{{$job['title']}}</h1>
    <p>pays {{$job['salary']}} per year</p>

    <p class="mt-6 flex flex-row space-x-3">
        <x-button href="/jobs/{{ $job->id }}/edit">Edit Job</x-button>

    </p>

</x-layout>