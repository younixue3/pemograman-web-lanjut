@extends('layout.master')
@section('title', 'Home')
@section('content')
    <div class="" @click="closeModal">
        <div class="overflow-hidden min-h-screen py-20 px-10">
            <div class="bg-gray-700 text-white rounded-xl p-20">
                <h1 class="text-5xl my-5">{{$produk->name}}</h1>
                <p class="">Jumlah Barang : {{$produk->qty}} Pcs</p>
            </div>
            <div class="bg-gray-700 text-white rounded-xl mt-10 py-10 px-20">
                <h1 class="text-3xl my-5">Komentar</h1>
                @foreach($produk->komentars as $key => $value)
                    <div class="bg-gray-500 rounded-lg w-full p-5">
                        {{$value->isi}}
                        <div class="text-xs mt-5">
                            by {{$value->komentator->name}}
                        </div>
                    </div>
                @endforeach
                <form action="{{route('dashboard.komentar_produk.store')}}" method="post" class="bg-gray-500 text-black rounded-lg w-full p-5 mt-5">
                    @csrf
                    <input type="hidden" name="produk_id" value="{{$produk->id}}">
                    <textarea name="isi" class="flex-1 block w-full h-32 rounded-xl focus:outline-none text-lg px-3 py-1 border border-gray-300 resize-none"></textarea>
                    <button class="bg-gray-300 text-black rounded-xl px-3 py-1 mt-5" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
