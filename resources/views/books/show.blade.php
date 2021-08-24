<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('book') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="">
                        <div class="flex justify-end">
                            <a href="{{ route('book') }}" class="float-right px-3 py-2 bg-gray-500 rounded text-white ">books</a>
                        </div>
                        <div class="flex">
                            <label class="w-1/3"> Book Title : </label>
                            <h4 class="w-2/3 font-bold"> {{ $book->title}}</h4>
                        </div>
                        <div class="flex ">
                            <label class="w-1/3" for="First Name "> Author : </label>
                            <h4 class="w-2/3  font-bold"> {{ $book->author}}</h4>
                        </div>
                        <div class="flex ">
                            <label class="w-1/3"> Publication : </label>
                            <h4 class="w-2/3 font-bold"> {{ $book->publisher}}</h4>
                        </div>
                        <div class="flex ">
                            <label class="w-1/3"> No Of Copies : </label>
                            <h4 class="w-2/3 font-bold"> {{ $book->no_of_copies}}</h4>
                        </div>
                        <div class="flex ">
                            <label class="w-1/3"> In Stock : </label>
                            <h4 class="w-2/3 font-bold"> {{ $book->in_stock}}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>