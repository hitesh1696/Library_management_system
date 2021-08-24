<div class="relative w-full mr-5">
    <input  wire:model.debounce.500ms="search" type="text" class="text-sm rounded w-full px-2 pl-8 py-2" placeholder="Search (Press '/' to focus)" x-ref="search">
    <div class="absolute bg-gray-600 rounded w-full border">
        <ul>
            @foreach ($searchResults as $result)
                <li class="border-b border-gray-700">
                    <p  wire:click="save({{$result->id}})" class="block text-white hover:bg-gray-700 px-3 py-3 transition ease-in-out duration-150">{{ $result->first_name }} {{ $result->last_name }}</p>
                </li>
            @endforeach
        </ul>
    </div>
</div>


   