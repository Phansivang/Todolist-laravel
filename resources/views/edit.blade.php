@extends('main')
@section('content')
    <div class=" rounded-lg">
        <div class="mt-6">
            <form class="flex flex-col space-y-4 " method="POST" action="/update/{{$todo->id}}">
                @csrf
                @method('PUT')
                <input required="" type="text" value="{{$todo->title}}" placeholder="The Todo Title " name="title" class=" py-3 px-4 bg-gray-100 rounded-xl" >
                <textarea name="description" value="asd" placeholder="The Description" class="py-3 px-4 bg-gray-100 rounded-xl">{{$todo->description}}</textarea>
                <button  class="w-20 py-2 px-3 bg-green-500 text-white rounded-xl">Update</button>
            </form>

        </div>
    </div>
@endsection
