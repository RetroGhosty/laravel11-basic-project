<x-layout>
    <x-slot:title>Jobs</x-slot>
    <ul class="flex flex-col space-y-4">
        @foreach ($jobs as $job)
            <a href="jobs/{{$job['id']}}" class="flex flex-col  p-5 border border-gray-300 bg-gray-300 shadow-md hover:text-blue-900 hover:bg-gray-400">
                <div class="text-blue-500 font-semibold">{{$job->employer->name}}</div>
                <div class="flex flex-row space-x-4">
                    <li class=" font-bold">{{$job['title']}}</li>
                    <p>Pays {{$job['salary']}} per year</p>
                </div>
            </a>
        @endforeach

        <div>
            {{ $jobs->links() }}
        </div>
    </ul>

</x-layout>