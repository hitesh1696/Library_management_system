<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Student') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="">
                        <div class="flex justify-end">
                            <a href="{{ route('student') }}" class="float-right px-3 py-2 bg-gray-500 rounded text-white ">Students</a>
                        </div>    
                        <div class="flex ">
                            <label class="w-1/3" for="First Name"> First Name : </label>
                            <h4 class="font-bold"> {{ $student->first_name}}</h4>
                        </div>
                        <div class="flex ">
                            <label class="w-1/3" for="First Name "> Last Name : </label>
                            <h4 class="font-bold"> {{ $student->last_name}}</h4>
                        </div>
                        <div class="flex ">
                            <label class="w-1/3" for="First Name"> Email: </label>
                            <h4 class="font-bold"> {{ $student->email}}</h4>
                        </div>
                        <div class="flex ">
                            <label class="w-1/3" for="First Name"> Division : </label>
                            <h4 class="font-bold"> {{ $student->division}}</h4>
                        </div>
                        <div class="flex ">
                            <label class="w-1/3" for="First Name"> Department : </label>
                            <h4 class="font-bold"> {{ $student->department->name}}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>