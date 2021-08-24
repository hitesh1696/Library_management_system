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
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="flex justify-end items-center">
                            
                                <a href="{{ route('book') }}" class="float-right px-3 py-2 bg-gray-500 rounded text-white ">Back</a>
                            </div>    
                            <div class="">
                                <form method="POST" action="{{ route('book.update', $book->id ) }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="">
                                        <div class="mb-4">
                                            <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                                                Title
                                            </label>
                                            <input class="@error('title') is-invalid @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="title" id="title" type="text" placeholder="Title" value="{{ $book->title }}">
                                        </div>
                                        @error('title')
                                            <div class="alert alert-danger text-red-500">{{ $message }}</div>
                                        @enderror
                                        <div class="mb-4">
                                            <label class="block text-gray-700 text-sm font-bold mb-2" for="author">
                                                Author
                                            </label>
                                            <input class="@error('author') is-invalid @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="author" id="author" type="text" placeholder="Author" value="{{ $book->author }}">
                                        </div>
                                        @error('author')
                                            <div class="alert alert-danger text-red-500">{{ $message }}</div>
                                        @enderror
                                        <div class="mb-4">
                                            <label class="block text-gray-700 text-sm font-bold mb-2" for="publisher">
                                                Publisher
                                            </label>
                                            <input class="@error('publisher') is-invalid @enderror  shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="publisher" id="publisher" type="text" placeholder="Publisher" value="{{ $book->pubisher }}">
                                        </div>
                                        @error('publisher')
                                            <div class="alert alert-danger text-red-500">{{ $message }}</div>
                                        @enderror
                                        <div class="mb-4">
                                            <label class="block text-gray-700 text-sm font-bold mb-2" for="price">
                                                Price
                                            </label>
                                            <input class="@error('price') is-invalid @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  name="price" id="price" type="text" placeholder="Price" value="{{ $book->price }}">
                                        </div>
                                        @error('price')
                                            <div class="alert alert-danger text-red-500">{{ $message }}</div>
                                        @enderror
                                        <div class="mb-4">
                                            <label class="block text-gray-700 text-sm font-bold mb-2" for="no_of_copies">
                                                No Of Copies
                                            </label>
                                            <input class="@error('no_of_copies') is-invalid @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="no_of_copies" id="no_of_copies" type="text" placeholder="No of copies" value="{{ $book->no_of_copies }}">
                                        </div>
                                        @error('no_of_copies')
                                            <div class="alert alert-danger text-red-500">{{ $message }}</div>
                                        @enderror
                                        <div class="mb-4">
                                            <label class="block text-gray-700 text-sm font-bold mb-2" for="in_stock">
                                                In Stock
                                            </label>
                                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="in_stock" id="in_stock" type="text" placeholder="In Stock">
                                        </div>
                                        @error('in_stock')
                                            <div class="alert alert-danger text-red-500">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                                            {{ __('Update') }}
                                    </button>
                                  
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>