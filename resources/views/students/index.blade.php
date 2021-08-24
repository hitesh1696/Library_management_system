<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Students') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <div class="">
                    @if(session('message'))
                        <div class="bg-green-300 py-4 px-6 rounded text-white font-bold">{{ session('message')}}</div>
                    @endif
                </div>
                <div class="flex justify-between items-center">
                    {{ __('List Of Students') }}
                    <a href="{{ route('student.create') }}" class="float-right px-3 py-2 bg-gray-500 rounded text-white ">Add Students</a>
                </div>
                <div class="mt-8">
                    <table class="table-auto w-full ">
                        <thead>
                            <tr class="bg-gray-300 text-white">
                                <th class="w-1/5 py-4">First Name</th>
                                <th class="w-1/5">Last Name</th>
                                <th class="w-1/5">Email</th>
                                <th class="w-1/5">Department</th>
                                <th class="w-1/5">Year Of Study</th>
                                <th class="w-1/5"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                                <tr class="bg-blue-100 border-b border-white">
                                    <td class="py-4 px-4">{{ $student->first_name }}</td>
                                    <td class="py-4 px-4">{{ $student->last_name }}</td>
                                    <td class="py-4 px-4">{{ $student->email }}</td>

                                    <td class="py-4 px-4"><a href="{{ route('department.edit', $student->department->id ) }}" class="cursor-pointer">{{ $student->department->name }}</a></td>
                                    <td class="py-4 px-4">{{ $student->year_of_study }}</td>
                                    <td class="py-4 px-4 flex">
                                        <a href="{{ route('student.edit', $student->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Edit</a>
                                        <a href="{{ route('student.show', $student->id) }}" class="ml-2 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Show</a>   
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
