@extends('layout.admin.master')
@section('title', 'Gallery')
@section('content')
    <div>Gallery</div>
@endsection
@section('notification')
    @if($errors->any())
        @foreach ($errors->all() as $error)
            <div
                class="m-3 ml-0 md:w-96 text-left border-b-8 mx-auto flex transition-all ease-in-out duration-1000 cursor-pointer">
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
    @endif
@endsection
