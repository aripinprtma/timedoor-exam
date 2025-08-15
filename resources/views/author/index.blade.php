<x-layout>
    <x-slot name="title">Authors</x-slot>

    <h1 class="text-center text-5xl my-4 text-gray-700 dark:text-gray-400">Top 10 Most Famous Author</h1>
    <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
        <div class="overflow-x-auto">
            <table id="myTable" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-4 py-3">No</th>
                        <th scope="col" class="px-4 py-3">Author Name</th>
                        <th scope="col" class="px-4 py-3">Voter</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($authors as $a)
                        <tr class="border-b dark:border-gray-700">
                            <th scope="row"
                                class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $loop->iteration }}
                            </th>
                            <td class="px-4 py-3">{{ $a->name_author }}</td>
                            <td class="px-4 py-3">{{ $a->total_voter }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
