@extends('layout.admin.master')
@section('title', 'Admin')
@section('content')
    <div>Welcome to Admin</div>
@endsection
@section('notification')
    <div class="fixed bottom-0 right-0 flex-row">
        @forelse ($errors->all() as $error)
            <notification-component type="error" message="{{$error}}"></notification-component>
        @empty
        @endforelse
        @if(session()->has('success'))
            <notification-component type="success" message="{{ session()->get('success') }}"></notification-component>
        @endif
        @if(session()->has('error'))
            <notification-component type="error" message="{{ session()->get('error') }}"></notification-component>
        @endif
    </div>
@endsection
