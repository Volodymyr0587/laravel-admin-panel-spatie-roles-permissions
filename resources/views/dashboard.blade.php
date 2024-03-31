<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 m-6">

        <div>
            <a href="#" class="m-2 p-2 rounded-lg text-white font-bold bg-pink-400 hover:bg-pink-300">Create New Post</a>
        </div>

        <div class="flex flex-wrap justify-center mt-10">
            @foreach (App\Models\Post::all() as $post )
            <!-- card -->
            <div class="p-4 max-w-sm">
                <div class="flex rounded-lg h-full bg-pink-400 p-8 flex-col">
                    <div class="flex items-center mb-3">
                        <div
                            class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                            </svg>
                        </div>
                        <h2 class="text-white text-lg font-medium">{{ $post->title }}</h2>
                    </div>
                    <div class="flex flex-col justify-between flex-grow">
                        <p class="leading-relaxed text-base text-white">
                            Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo
                            juice poutine.
                        </p>
                        <div class="space-x-4">
                            <a href="#"
                            class="mt-3 text-black hover:text-blue-600 inline-flex items-center">
                            Edit
                        </a>
                        <a href="#"
                            class="mt-3 text-black hover:text-blue-600 inline-flex items-center">
                            Delete
                        </a>
                        </div>

                    </div>
                </div>
            </div>

            @endforeach
        </div>

        {{-- GRID --}}
        {{-- <div class="mt-16 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 p-4">
            @foreach (App\Models\Post::all() as $post )
            <div class="bg-gray-100 p-4">
                <h2>{{ $post->title }}</h2>
            </div>
            @endforeach
        </div> --}}

        {{-- TABLE --}}
        {{-- <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Id</th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Title</th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Status</th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Image</th>
                                <th scope="col" class="relative px-6 py-3">Edit</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr></tr>
                            @foreach (App\Models\Post::all() as $post)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $post->id }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $post->title }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">Active</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <img class="w-8 h-8 rounded-full" src="https://picsum.photos/200" />
                                </td>
                                <td class="px-6 py-4 text-right text-sm">Edit Delete</td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <div class="m-2 p-2">Pagination</div>
                </div>
            </div>
        </div> --}}

    </div>
</x-app-layout>
