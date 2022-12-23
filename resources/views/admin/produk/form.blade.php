@extends('layout.admin.master')
@section('title', 'Admin')
@section('content')
    <div>Welcome to Admin</div>
    <div class="border bg-gray-100 shadow-md text-gray-800 rounded-xl">
        <form class="p-5" action="{{route('dashboard.produk.update', $produk->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <label class="block text-lg font-medium text-gray-700">
                Nama
            </label>
            <div class="flex rounded-md shadow-sm">
                <input type="text" name="nama" value="{{$produk->name}}" class="flex-1 block w-full rounded-xl focus:outline-none text-lg px-3 py-1 border border-gray-300">
            </div>
            <label class="block text-lg font-medium text-gray-700">
                Qty
            </label>
            <div class="flex rounded-md shadow-sm">
                <input type="number" name="qty" value="{{$produk->qty}}" class="flex-1 block w-full rounded-xl focus:outline-none text-lg px-3 py-1 border border-gray-300">
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
