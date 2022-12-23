@extends('layout.master')
@section('title', 'Home')
@section('content')
    <div class="" @click="closeModal">
        <div class="overflow-hidden min-h-screen">
            <table class="w-full text-center mt-28">
                <thead class="bg-gray-100">
                <tr>
                    <th class="py-1">#</th>
                    <th class="py-1">Nama Produk</th>
                    <th class="py-1">Qty</th>
                    <th class="py-1">Action</th>
                </tr>
                </thead>
                <tbody class="bg-white divide-y-2 divide-gray-200">
                @foreach($data as $key => $value)
                    <tr class="hover:bg-blue-100 transition-all duration-200">
                        <td class="py-1 pl-4">{{$value->id}}</td>
                        <td class="py-1">{{$value->name}}</td>
                        <td class="py-1">{{$value->qty}}</td>
                        <td class="py-1">
                            <div>
                                <a href="{{route('produk.show', $value->id)}}"
                                   class="py-1 px-2 bg-indigo-500 hover:bg-indigo-600 text-white text-center rounded-md w-9 h-8">Detail</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{$data->links()}}
{{--            <div class="grid grid-cols-4 gap-5 mt-28 px-10">--}}
{{--                @foreach($data as $key => $value)--}}
{{--                    <a href="{{route('berita.show', $value->id)}}" class="p-5 bg-white rounded-lg">--}}
{{--                        <img src="{{asset('Upload/thumbnail/'.$value->thumbnail)}}">--}}
{{--                        <div>--}}
{{--                            <h3 class="text-lg">{{$value->judul}}</h3>--}}
{{--                            <p class="h-20 mt-5 overflow-hidden">--}}
{{--                                {{$value->qty}}--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                @endforeach--}}
{{--            </div>--}}
        </div>
    </div>
@endsection
