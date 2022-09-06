@extends('main')
@section('content')
    <div class=" rounded-lg">
    <div class="mt-6">
        <form class="flex flex-col space-y-4 " method="post" action="/">
            @csrf
            <input type="text" placeholder="The Todo Title " name="title" class=" py-3 px-4 bg-gray-100 rounded-xl" >
            <textarea name="description" placeholder="The Description" class="py-3 px-4 bg-gray-100 rounded-xl"></textarea>
            <button  class="w-20 py-2 px-3 bg-green-500 text-white rounded-xl">Add</button>
        </form>

    </div>
    <br>
    <hr>
        @foreach($todo as $todos)
            <div class="mt-2">
                <div class="py-4 flex item-center border-b border-gray-300 px-3">
                    <div class="flex-1 pr-8 border-b-0">
                        <h3 class="text-lg font-semibold">{{$todos->title}}</h3>
                        <p class="text-gray-500">{{$todos->description}}</p>

                    </div>
                    <div class="flex space-x-3">
                        <button class="py-1 px-3 bg-green-500 text-white rounded-2 hover:bg-green-700 bg-green-500 hover:bg-green-600 active:bg-green-700 focus:outline-none focus:ring focus:ring-green-300">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>

                        </button>
                        <button class="py-1 px-3 bg-red-500 text-white rounded-2  hover:bg-black">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                            </svg>


                        </button>

                    </div>
                </div>

            </div>
    </div>
    @endforeach
@endsection
