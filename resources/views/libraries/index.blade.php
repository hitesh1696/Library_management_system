<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Library') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="">
                    @if(session('message'))
                        <div class="bg-green-300 py-4 px-6 rounded text-white font-bold">{{ session('message')}}</div>
                    @endif
                </div>   
                <div class="p-6 flex justify-around bg-white border-b border-gray-200">
                
                    <!-- Book Issue -->
                    <div class="mt-6 w-full mr-5">
                        <div class="">
                            <h1 class="font-bold text-3xl px-4 py-4">Book Issue</h1>
                            <form method="POST" action="{{ route('libraryissue') }}">
                                @csrf
                                <div class="">
                                    <div class="mb-4">
                                        <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                                            Search Student
                                        </label>
                                        <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="student_id" id="student_id" type="text" placeholder="Students">
                                            @foreach($students as $student)
                                                <option value="{{ $student->id }}">{{ $student->id }}-{{ $student->first_name }} {{ $student->last_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-4">
                                        <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                                            Search Book
                                        </label>
                                        <select class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="book_id" id="book_id" type="text" placeholder="Books">
                                            @foreach($books as $book)
                                                <option value="{{ $book->id }}">{{ $book->id }}-{{ $book->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-4">
                                        <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                                            Date Of Issue
                                        </label>
                                        <input name="date_of_issue" id="date_of_issue" class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="date" value="<?= date('Y-m-d') ?>">
                                    </div>
                                </div>
                                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                                        {{ __('Store') }}
                                </button>
                                
                            </form>
                        </div>
                    </div>
                    <!-- Book Issue End -->

                    <!-- Book Return -->
                    <div class="mt-6 w-full ml-5">
                        <h1 class="font-bold text-3xl px-4 py-4">Book Return</h1>
                        <div class="">
                            <form method="POST" action="{{ route('library.returnstore') }}">
                                @csrf
                                @method('PUT')
                                <div class="">
                                    <div class="mb-4">
                                        <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                                            Search Student
                                        </label>
                                        <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="student_id" id="student_id" type="text" placeholder="Students">
                                            @foreach($students as $student)
                                                <option value="{{ $student->id }}">{{ $student->id }}-{{ $student->first_name }} {{ $student->last_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-4">
                                        <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                                            Search Book
                                        </label>
                                        <select class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="book_id" id="book_id" type="text" placeholder="Books">
                                            @foreach($books as $book)
                                                <option value="{{ $book->id }}">{{ $book->id }}-{{ $book->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-4">
                                        <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                                            Date Of Return
                                        </label>
                                        <input name="date_of_return" id="date_of_return"  class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="date" value="<?= date('Y-m-d') ?>"> 
                                    </div>
                                </div>
                                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                                        {{ __('Store') }}
                                </button>
                                
                            </form>
                        </div>
                    </div>
                    <!-- Book Return End -->

                </div>
                <!-- Recent log Records -->
                <div class="py-12">
                    <h1 class="font-bold text-3xl px-4 py-4 text-center">Recent Log Records</h1>
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-6 bg-white border-b border-gray-200">
                                <div class="flex mt-8">
                                    <table class="table-fixed w-full ">
                                        <thead>
                                            <tr class="bg-gray-300 text-white">
                                                <th class="w-1/5 py-4 ">Name Of Students</th>
                                                <th class="w-1/5">Books Allocated</th>
                                                <th class="w-1/5">Book Issue Date</th>
                                                <th class="w-1/5">Book Return Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($logs as $log)
                                            <tr class="bg-blue-100 border-b border-white">
                                                <td class="py-4 px-4">
                                                    @foreach($students as $student)
                                                        @if($student->id == $log->student_id)
                                                            <a href="{{ route('student.show', $student->id) }}" class="flex justify-center">{{ $student->first_name }} {{ $student->last_name }}</a>
                                                        @endif    
                                                    @endforeach
                                                </td>
                                                <td class="py-4 px-4">
                                                    @foreach($books as $book)
                                                        @if($book->id == $log->book_id)
                                                            <a href="{{ route('book.show', $book->id) }}" class="flex justify-center">{{ $book->title }}</a>
                                                        @endif
                                                    @endforeach
                                                </td>
                                                <td class="py-4 px-4">
                                                    <a href="{{ route('book') }}" class="flex justify-center">{{ $log->date_of_issue }}</a>                                           
                                                </td>
                                                <td class="py-4 px-4">
                                                    <a href="{{ route('book') }}" class="flex justify-center">{{ $log->date_of_return }}</a>
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
                <!-- Recent log Records End-->
        </div>
    </div>
</x-app-layout>