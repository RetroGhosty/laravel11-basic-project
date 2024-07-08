<x-layout>
    <x-slot:title>
        Job
    </x-slot:title>

    <h1 class="font-bold text-lg">{{$job['title']}}</h1>
    <p>pays {{$job['salary']}} per year</p>

</x-layout>