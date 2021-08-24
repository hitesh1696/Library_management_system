<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex mt-8">
                        <table class="table-fixed w-full ">
                            <thead>
                                <tr class="bg-gray-300 text-white">
                                    <th class="w-1/5 py-4 ">Number Of Students</th>
                                    <th class="w-1/5">Number Of Books</th>
                                    <th class="w-1/5">Departments</th>
                                    <th class="w-1/5"></th>
                                </tr>
                            </thead>
                            <tbody>
                              <tr class="bg-blue-100 border-b border-white">
                                    <td class="py-4 px-4">
                                        <a href="{{ route('student') }}" class="flex justify-center">{{ count($students) }}</a>
                                    </td>
                                    <td class="py-4 px-4">
                                        <a href="{{ route('book') }}" class="flex justify-center">{{ count($books) }}</a>
                                    </td>
                                    <td class="py-4 px-4">
                                        <a href="{{ route('department') }}" class="flex justify-center">{{ count($departments) }}</a>
                                    </td>
                                    <td class="py-4 px-4">
                                        <a href="" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Edit</a>
                                        <a href="" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Show</a>   
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
