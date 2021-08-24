<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Departments') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <div class="flex justify-between items-center">
                    {{ __('List Of Departments') }}
                    <a href="{{ route('department.create') }}" class="float-right px-3 py-2 bg-gray-500 rounded text-white ">Add Department</a>
                </div>
                <div class="flex mt-8">
                    <table class="table-fixed w-full ">
                        <thead>
                            <tr class="bg-gray-300 text-white">
                                <th class="w-1/5 py-4 ">Department Name</th>
                                <th class="w-1/5">No Of Students</th>
                                <th class="w-1/5"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($departments as $department)
                                <tr class="bg-blue-100 border-b-2 border-dotted border-black">
                                    <td class="py-4 px-4">{{ $department->name }}</td>
                                    <td class="py-4 px-4">
                                        <a href="{{ route('department.show', $department->id) }}">
                                            {{ $department->students->count() }}
                                        </a>
                                    </td>
                                    <td class="py-4 px-4">
                                        <a href="{{ route('department.edit', $department->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Edit</a>
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