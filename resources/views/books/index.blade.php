<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Books') }}
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
                    {{ __('List Of Books') }}
                    <a href="{{ route('book.create') }}" class="float-right px-3 py-2 bg-gray-500 rounded text-white ">Add Books</a>
                </div>
                <div class="flex mt-8">
                    <table class="table-fixed w-full ">
                        <thead>
                            <tr class="bg-gray-300 text-white">
                                <th class="w-1/5 py-4">Title</th>
                                <th class="w-1/5">Author</th>
                                <th class="w-1/5">Publisher</th>
                                <th class="w-1/5">Price</th>
                                <th class="w-1/5">No of Copies</th>
                                <th class="w-1/5">In Stock</th>
                                <th class="w-1/5"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($books as $book)
                                <tr class="bg-blue-100 border-b border-white">
                                    <td class="py-4 px-4">{{ $book->title }}</td>
                                    <td class="py-4 px-4">{{ $book->author }}</td>
                                    <td class="py-4 px-4">{{ $book->publisher }}</td>
                                    <td class="py-4 px-4">{{ $book->price }}</td>
                                    <td class="py-4 px-4">{{ $book->no_of_copies }}</td>
                                    <td class="py-4 px-4">{{ $book->in_stock }}</td>
                                    <td class="py-4 px-4 flex">
                                        <a href="{{ route('book.edit', $book->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Edit</a>
                                        <a href="{{ route('book.show', $book->id) }}" class="ml-2 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Show</a>
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