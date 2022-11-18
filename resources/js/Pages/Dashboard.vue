<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/inertia-vue3';

const props = defineProps(['users']);

</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
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
                    <tr v-for="(item, key, value) in users" class="hover:bg-blue-100 transition-all duration-200">
                        <td class="py-1 pl-4">{{item.id}}</td>
                        <td class="py-1 pl-4">
                            <div class="flex items-center">
                                <img class="h-8 w-8 mr-2 rounded-full"
                                     src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                     alt="">
                                <div class="text-left my-auto">
                                    <div class="text-sm text-gray-500">{{item.name}}</div>
                                </div>
                            </div>
                        </td>
                        <td class="py-1">{{item.email}}</td>
                        <td class="py-1">{{item.created_at}}</td>
                        <td class="py-1">
                            <div>
                                <button class="bg-indigo-500 hover:bg-indigo-600 text-white text-center rounded-l-md w-9 h-8"><i class="fas fa-edit m-auto"></i></button><button class="bg-indigo-500 hover:bg-indigo-600 text-white text-center w-9 h-8"><i class="fas fa-trash-alt"></i></button><button class="bg-indigo-500 hover:bg-indigo-600 text-white text-center rounded-r-md w-9 h-8"><i class="fas fa-eye"></i></button>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <div class="mt-5">
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

