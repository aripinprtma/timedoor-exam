<x-layout>
    <x-slot name="title">Dashboard</x-slot>
    <section class="bg-white dark:bg-gray-900 my-5">
        <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-16 lg:px-6">
            <dl class="grid max-w-screen-md gap-8 mx-auto text-gray-900 sm:grid-cols-4 dark:text-white">
                <div class="flex flex-col items-center justify-center">
                    <dt class="mb-2 text-3xl md:text-4xl font-extrabold">{{ $totalAuthors }}</dt>
                    <dd class="font-light text-gray-500 dark:text-gray-400">Authors</dd>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <dt class="mb-2 text-3xl md:text-4xl font-extrabold">{{ $totalCategories }}</dt>
                    <dd class="font-light text-gray-500 dark:text-gray-400">Categories</dd>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <dt class="mb-2 text-3xl md:text-4xl font-extrabold">{{ $totalBooks }}</dt>
                    <dd class="font-light text-gray-500 dark:text-gray-400">Books</dd>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <dt class="mb-2 text-3xl md:text-4xl font-extrabold">{{ $totalVoters }}</dt>
                    <dd class="font-light text-gray-500 dark:text-gray-400">Rating</dd>
                </div>
            </dl>
        </div>
    </section>

    <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
        <div class="overflow-x-auto">
            <table id="myTable" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-4 py-3">No</th>
                        <th scope="col" class="px-4 py-3">Book Name</th>
                        <th scope="col" class="px-4 py-3">Category Name</th>
                        <th scope="col" class="px-4 py-3">Author Name</th>
                        <th scope="col" class="px-4 py-3">Average Rating</th>
                        <th scope="col" class="px-4 py-3">Voter</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ratings as $r)
                        <tr class="border-b dark:border-gray-700">
                            <th scope="row"
                                class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $loop->iteration }}</th>
                            <td class="px-4 py-3">{{ $r->book->title }}</td>
                            <td class="px-4 py-3">{{ $r->book->category->name_category }}</td>
                            <td class="px-4 py-3">{{ $r->book->author->name_author }}</td>
                            <td class="px-4 py-3">{{ $r->rating }}</td>
                            <td class="px-4 py-3">{{ $r->voter }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script>
        new DataTable('#myTable');
    </script>

</x-layout>
