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
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="flex justify-end items-center">
                            
                                <a href="{{ route('student') }}" class="float-right px-3 py-2 bg-gray-500 rounded text-white ">Back</a>
                            </div>    
                            <div class="">
                                <form method="POST" action="{{ route('student.update', $student->id ) }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="flex justify-around">
                                        <div class="mb-4">
                                            <label class="block text-gray-700 text-sm font-bold mb-2">
                                                First Name
                                            </label>
                                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="first_name" id="first_name" value="{{ $student->first_name }}" type="text" placeholder="First Name">
                                        </div>
                                        <div class="mb-4">
                                            <label class="block text-gray-700 text-sm font-bold mb-2">
                                                Last Name
                                            </label>
                                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="last_name" id="last_name" type="text" placeholder="Last Name" value="{{  $student->last_name }}">
                                        </div>
                                        <div class="mb-4">
                                            <label class="block text-gray-700 text-sm font-bold mb-2" for="department">
                                                Department
                                            </label>
                                            <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="department" id="department" type="text" placeholder="Department">
                                                @foreach($departments as $department)
                                                    <option value="{{ $department->name }}">{{ $department->name }}</option>
                                                @endforeach
                                            </select>
                                            <!-- <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="department" id="department" type="text" placeholder="Department"> -->
                                        </div>
                                    </div>
                                   
                                    <div class="flex justify-around">
                                        <div class="mb-4">
                                            <label class="block text-gray-700 text-sm font-bold mb-2">
                                                Email
                                            </label>
                                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  name="email" id="email" type="email" placeholder="Email" value="{{ $student->email }}" disabled>
                                        </div>
                                        <div class="mb-4">
                                            <label class="block text-gray-700 text-sm font-bold mb-2">
                                                Division
                                            </label>
                                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="division" id="division" type="text" placeholder="Division" value="{{ $student->division }}">
                                        </div>
                                        <div class="mb-4">
                                            <label class="block text-gray-700 text-sm font-bold mb-2">
                                                Year Of Study
                                            </label>
                                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="year_of_study" id="year_of_study" type="text" placeholder="Year Of Study" value="{{ $student->year_of_study }}">
                                        </div>
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