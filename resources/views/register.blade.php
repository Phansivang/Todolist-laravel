@extends('main')
@section('content')
   <center>
       <div class="w-full max-w-xs">
           <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="post">
               @csrf
               <div class="mb-4">
                   <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="username" id="username" type="text" placeholder="Username">
               </div>
               <div class="mb-6">

                   <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="******************">

               </div>
               <div class="flex items-center justify-between">
                   <button class="bg-black hover:bg-asd-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                       Register
                   </button>
                   <a class="inline-block align-baseline text-red-500 font-bold text-sm text-blue-500 hover:text-blue-800 rounded " href="#">
                       Forgot Password?
                   </a>
               </div>
           </form>
       </div>
   </center>
@endsection
