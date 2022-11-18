@extends('layout.admin.master')
@section('title', 'Admin')
@section('content')
    <div>Welcome to Admin</div>
    <div class="grid grid-cols-1 md:grid-cols-6 lg:grid-cols-12 gap-x-5 gap-y-5 my-5">
        <div class="md:col-span-3 bg-gray-100 shadow-md text-gray-800 rounded-xl flex">
            <div class="w-1/3 text-4xl p-5">
                <i class="bg-purple-500 text-white rounded-full px-5 py-4 fas fa-shopping-bag"></i>
            </div>
            <div class="w-2/3 ml-10 my-auto">
                <span class="text-4xl">236</span>
                <div class="-mt-3 text-lg">Orders<i class="mx-2 text-green-500 fas fa-caret-up"></i></div>
            </div>
        </div>
        <div class="md:col-span-3 bg-gray-100 shadow-md text-gray-800 rounded-xl flex">
            <div class="w-1/3 text-4xl p-5">
                <i class="bg-green-500 text-white rounded-full px-3 py-4 fas fa-users"></i>
            </div>
            <div class="w-2/3 ml-10 my-auto">
                <span class="text-4xl">56</span>
                <div class="-mt-3 text-lg">Users<i class="mx-2 text-green-500 fas fa-caret-up"></i></div>
            </div>
        </div>
        <div class="md:col-span-3 bg-gray-100 shadow-md text-gray-800 rounded-xl flex">
            <div class="w-1/3 text-4xl p-5">
                <i class="bg-blue-500 text-white rounded-full px-4 py-4 fas fa-envelope"></i>
            </div>
            <div class="w-2/3 ml-10 my-auto">
                <span class="text-4xl">12</span>
                <div class="-mt-3 text-lg">Emails<i
                        class="mx-2 text-red-500 fas fa-caret-up transform rotate-180"></i></div>
            </div>
        </div>
        <div class="md:col-span-3 bg-gray-100 shadow-md text-gray-800 rounded-xl flex">
            <div class="w-1/3 text-4xl p-5">
                <i class="bg-yellow-500 text-white rounded-full px-3.5 py-4 fas fa-id-card-alt"></i>
            </div>
            <div class="w-2/3 ml-10 my-auto">
                <span class="text-4xl">36</span>
                <div class="-mt-3 text-lg">Subscribers<i class="mx-2 text-green-500 fas fa-caret-up"></i></div>
            </div>
        </div>
    </div>
    <div class="border bg-gray-100 shadow-md text-gray-800 rounded-xl">
        <table class="w-full text-center">
            <thead class="bg-gray-100">
            <tr>
                <th class="py-1">#</th>
                <th class="py-1">Username</th>
                <th class="py-1">Email</th>
                <th class="py-1">Created At</th>
                <th class="py-1">Action</th>
            </tr>
            </thead>
            <tbody class="bg-white divide-y-2 divide-gray-200">
            @foreach($users as $key => $value)
                <tr class="hover:bg-blue-100 transition-all duration-200">
                    <td class="py-1 pl-4">{{$value->id}}</td>
                    <td class="py-1 pl-4">
                        <div class="flex items-center">
                            <img class="h-8 w-8 mr-2 rounded-full"
                                 src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                 alt="">
                            <div class="text-left my-auto">
                                <div class="text-sm text-gray-500">{{$value->name}}</div>
                            </div>
                        </div>
                    </td>
                    <td class="py-1">{{$value->email}}</td>
                    <td class="py-1">{{$value->created_at}}</td>
                    <form hidden id="formdelete" action="{{route('admin.destroy', $value->id)}}" method="post">
                        @csrf
                        @method('delete')
                    </form>
                    <td class="py-1">
                        <div>
                            <a href="{{route('admin.edit', $value->id)}}"
                               class="py-1 px-2 bg-indigo-500 hover:bg-indigo-600 text-white text-center rounded-l-md w-9 h-8"><i
                                    class="fas fa-edit m-auto"></i></a>
                            <button form="formdelete" type="submit" href="{{route('admin.destroy', $value->id)}}"
                                    class="py-1 px-2 bg-indigo-500 hover:bg-indigo-600 text-white text-center w-9 h-8">
                                <i class="fas fa-trash-alt"></i></button>
                            <a href="#"
                               class="py-1 px-2  bg-indigo-500 hover:bg-indigo-600 text-white text-center rounded-r-md w-9 h-8"><i
                                    class="fas fa-eye"></i></a>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="mt-5">
            {{$users->links()}}
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
