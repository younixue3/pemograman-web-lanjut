@extends('layout.admin.master')
@section('title', 'Admin')
@section('content')
    <div class="absolute bg-white shadow-lg border border-gray-300 rounded-xl w-72 md:w-96 left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center">
        <div class="my-10">
            <div class="text-4xl font-bold">Welcome</div>
            <div class="text-lg font-light leading-3">Sign in to your account</div>
        </div>
        <form action="{{route('login')}}" id="form_login" class="mx-5 my-10" method="post">
            @csrf
            <input type="email" name="email" class="flex-1 block w-full rounded-t-xl focus:outline-none px-3 py-1.5 border border-b-0 border-gray-300" placeholder="Email">
            <input type="password" name="password" class="flex-1 block w-full rounded-b-xl focus:outline-none px-3 py-1.5 border border-gray-300" placeholder="Password">
            <div class="flex items-start pl-1 mt-2 mx-1">
                <div class="flex items-center h-5">
                    <input type="checkbox" class="m-auto h-4 w-4 rounded">
                </div>
                <div class="ml-2 text-sm">
                    <label class="font-medium text-gray-700">Remember Me</label>
                </div>
            </div>
        </form>
        <div class="mx-5 my-10">
            <div class="m-auto flex space-x-5">
                <button type="submit" form="form_login" class="bg-indigo-500 text-xl text-white text-center rounded-md shadow-md w-full px-5 py-1"><span class="align-text-top">Sign in</span></button>
                <button class="text-xl text-indigo-500 text-center rounded-md shadow-md border border-gray-100 w-full px-5 py-1"><span class="align-text-top">Sign up</span></button>
            </div>
            <div class="mt-10 pt-3 border-t-2 space-x-2">
                <h1 class="text-gray-500 mb-2">login with</h1>
                <button class="bg-blue-700 focus:bg-blue-800 transition duration-150 text-white text-xl text-center rounded-full shadow-md w-8 h-8 px-1 py-0.5 pt-1"><i class="fab fa-facebook"></i></button>
                <button class="bg-red-600 focus:bg-red-600 transition duration-150 text-white text-xl text-center rounded-full shadow-md w-8 h-8 px-1 py-0.5 pt-1"><i class="fab fa-google"></i></button>
                <button class="bg-blue-500 focus:bg-blue-600 transition duration-150 text-white text-xl text-center rounded-full shadow-md w-8 h-8 pt-0.5"><i class="fab fa-twitter"></i></button>
            </div>
        </div>
    </div>
@endsection
@section('notification')
    @if($errors->any())
        <div class="fixed bottom-0 right-0 flex-row">
            @foreach ($errors->all() as $error)
                <div
                    class="bg-red-500 py-5 border-b-red-300 text-white m-3 ml-0 md:w-96 text-left border-b-8 mx-auto flex transition-all ease-in-out duration-1000 cursor-pointer">
                    <div class="my-auto w-20 text-center px-0.5">
                        <i class="fas fa-info text-2xl lg:text-3xl"></i>
                    </div>
                    <div class="px-1 py-2">
                        <h1 class="text-sm lg:text-base font-raleway">
                        </h1>
                        <p class="text-xs">{{ $error }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
@endsection
