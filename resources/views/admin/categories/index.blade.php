@section('title', 'Browse All Categories')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Browse All Categories
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- Create button --}}
                    <div class="mb-4 text-right">
                        <a href="{{ route('admin.categories.create') }}">
                            <x-primary-button class="bg-indigo-500 dark:bg-indigo-500">Add a Category</x-primary-button>
                        </a>
                    </div>

                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th class="px-6 py-3" scope="col">
                                        Name
                                    </th>
                                    <th class="px-6 py-3" scope="col">
                                        Slug
                                    </th>
                                    <th class="px-6 py-3" scope="col">
                                        Posts
                                    </th>
                                    <th class="px-6 py-3" scope="col">
                                        Created
                                    </th>
                                    <th class="px-6 py-3" scope="col">
                                        <span class="sr-only">Edit</span>
                                        <span class="sr-only">Delete</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($categories as $category)
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $category->name }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ $category->slug }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ number_format($category->posts->count()) }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $category->created_at->diffForHumans() }}
                                        </td>
                                        <td class="px-6 py-4 text-right">
                                            <a href="{{ route('admin.categories.edit', $category) }}"
                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>

                                            <a href="#"
                                                class="font-medium text-red-600 hover:underline dark:text-red-500">Delete</a>

                                        </td>
                                    </tr>
                                @empty
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            No Data Available
                                        </th>
                                        <td class="px-6 py-4">

                                        </td>
                                        <td class="px-6 py-4">

                                        </td>
                                        <td class="px-6 py-4">

                                        </td>
                                        <td class="px-6 py-4 text-right">

                                        </td>
                                    </tr>
                                @endforelse

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
