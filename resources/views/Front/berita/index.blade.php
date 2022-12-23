@extends('layout.master')
@section('title', 'Home')
@section('content')
    <div class="" @click="closeModal">
        <div class="overflow-hidden min-h-screen">
            <div class="grid grid-cols-4 gap-5 mt-28 px-10">
                @foreach($data as $key => $value)
                    <a href="{{route('berita.show', $value->id)}}" class="p-5 bg-white rounded-lg">
                        <img src="{{asset('Upload/thumbnail/'.$value->thumbnail)}}">
                        <div>
                            <h3 class="text-lg">{{$value->judul}}</h3>
                            <p class="h-20 mt-5 overflow-hidden">
                                {{$value->isi}}
                            </p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
