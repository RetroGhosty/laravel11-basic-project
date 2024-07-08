<x-layout>
    <x-slot:title>Edit job [ {{ $job->title }} ]</x-slot>
    <form method="POST" action="/jobs/{{ $job->id }}">
        @csrf
        @method('PUT')

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base font-semibold leading-7 text-gray-900">Create a new job</h2>
            <p class="mt-1 text-sm leading-6 text-gray-600">Give few handful of details from you</p>

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-4">
                <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
                <div class="mt-2">
                    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                    <input 
                    type="text" 
                    name="title" 
                    id="title" 
                    autocomplete="title" 
                    value="{{ $job->title }}"
                    class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Team leader" required>
                    </div>
                </div>
                @error('title')
                    <p class="text-xs text-red-500 font-semibold mt-2">{{ $message }}</p>
                @enderror
                </div>
                
                <div class="sm:col-span-4">
                <label for="salary" class="block text-sm font-medium leading-6 text-gray-900">Salary</label>
                <div class="mt-2">
                    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                    <input value="{{ $job->salary }}" type="text" name="salary" id="salary" autocomplete="salary" class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="$50,000 Per Year" required>
                    </div>
                </div>
                @error('salary')
                    <p class="text-xs text-red-500 font-semibold mt-2">{{ $message }}</p>
                @enderror
                </div>
            </div>
            </div>





        </div>
        


        <div class="mt-6 flex items-center justify-between gap-x-6">
            <div>
                <button form="delete-form" href="/jobs/" class="bg-red-600 px-4 py-1 rounded-lg text-white">Delete Job</button>
            </div>
            <div class="flex items-center gap-x-6">
                <a href="/jobs/{{ $job->id }}" type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
                <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
            </div>
        </div>
    </form>

    <form method="POST" action="/jobs/{{ $job->id }}" id="delete-form" class="hidden">
        @csrf
        @method('DELETE')
    </form>

</x-layout>