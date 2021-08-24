<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Department') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="col-md-8 mb-6">
                        <div class="flex justify-end items-center mb-4">
                            <a href="{{ route('department') }}" class="float-right px-3 py-2 bg-gray-500 rounded text-white ">Back</a>
                        </div>    
                        <div class="">
                                <div class="flex">
                                    <div class="flex mb-4 w-2/5">
                                        <label class="block text-gray-700 text-sm font-bold mb-2" for="department">
                                            Department Name :
                                        </label>
                                        <p class="font-bold text-2xl ml-4">{{ $department->name}}</p>
                                    </div>
                                    <div class="w-1/5"></div>
                                    <div class="flex ml-4 mb-4 w-2/5">
                                        <label class="block text-gray-700 text-sm font-bold mb-2">
                                            Number Of Students
                                        </label>
                                        <p class="font-bold text-2xl ml-4">{{ $department->students->count() }}</p>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="border-t-2 border-blue-500 pt-6 border-dashed">
                        <table class="table-fixed w-full">
                            <thead>
                                <tr class="bg-gray-300 text-white">
                                    <th class="w-1/5 py-4 ">First Name</th>
                                    <th class="w-1/5">Last Name</th>
                                    <th class="w-1/5">Email</th>
                                    <th class="w-1/5">Year Of Study</th>
                                    <th class="w-1/5"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($department->students as $student)
                                    <tr class="bg-blue-100 border-b border-white">
                                        <td class="py-4 px-4">{{ $student->first_name }}</td>
                                        <td class="py-4 px-4">{{ $student->last_name }}</td>
                                        <td class="py-4 px-4">{{ $student->email }}</td>
                                        <td class="py-4 px-4">{{ $student->year_of_study }}</td>
                                        <td class="py-4 px-4">
                                            <a href="{{ route('student.edit', $student->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Edit</a>
                                            <a href="{{ route('student.show', $student->id) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Show</a>   
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>