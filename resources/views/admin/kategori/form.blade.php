@extends('layout.admin.master')
@section('title', 'Admin')
@section('content')
    <div>Welcome to Admin</div>
    <div class="border bg-gray-100 shadow-md text-gray-800 rounded-xl">
        <form class="p-5" action="{{route('dashboard.berita.update', $berita->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <label class="block text-lg font-medium text-gray-700">
                Judul
            </label>
            <div class="flex rounded-md shadow-sm">
                <input type="text" name="judul" value="{{$berita->judul}}" class="flex-1 block w-full rounded-xl focus:outline-none text-lg px-3 py-1 border border-gray-300">
            </div>
            <label class="block text-lg font-medium text-gray-700">
                Isi
            </label>
            <div class="flex rounded-md shadow-sm">
                <textarea name="isi" class="flex-1 block w-full rounded-xl h-52 resize-none focus:outline-none text-lg px-3 py-1 border border-gray-300">{{$berita->isi}}</textarea>
                {{--                <input type="text" name="name" class="flex-1 block w-full rounded-xl focus:outline-none text-lg px-3 py-1 border border-gray-300" placeholder="Jane">--}}
            </div>
            <label class="block text-lg font-medium text-gray-700">
                Thumbnail
            </label>
            <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-xl mb-2">
                <div class="space-y-1 text-center">
                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <div class="flex text-sm text-gray-600">
                        <label for="fileupload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                            <span>Upload a file</span>
                            <input id="fileupload" name="fileupload" type="file" class="sr-only">
                        </label>
                        <p class="pl-1">or drag and drop</p>
                    </div>
                    <p class="text-xs text-gray-500">
                        PNG, JPG, GIF up to 10MB
                    </p>
                </div>
            </div>
            <div class="mt-5">
                <button type="submit" class="bg-indigo-500 text-white text-center rounded-md shadow-md px-5 py-1 w-full"><span class="align-text-top">Submit</span></button>
            </div>
        </form>
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
