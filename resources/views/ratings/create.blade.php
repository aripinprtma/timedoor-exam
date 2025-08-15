<x-layout>
    <x-slot name="title">Create Rating</x-slot>

    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
        <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Add a new rating</h2>
        <form action="{{ route('ratings.store') }}" method="POST">
            @csrf
            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                <div>
                    <label for="authorSelect"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Author</label>
                    <select id="authorSelect" name="author_id"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option value="">Select Author</option>
                        @foreach ($authors as $a)
                            <option value="{{ $a->id }}">{{ $a->name_author }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label for="bookSelect"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Book</label>
                    <select id="bookSelect" name="book_id"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option value="">Select Book</option>
                    </select>
                </div>

                <div>
                    <label for="category"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Rating</label>
                    <select id="rating" name="rating"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option selected="">Select Rating</option>
                        @for ($i = 1; $i < 11; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
                </div>
            </div>
            <button type="submit"
                class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                Add rating
            </button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $('#authorSelect').on('change', function() {
            var authorId = $(this).val();
            if (authorId) {
                $.ajax({
                    url: '/author/' + authorId + '/books',
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        $('#bookSelect').empty();
                        $('#bookSelect').append('<option value="">Select Book</option>');
                        $.each(data, function(key, value) {
                            $('#bookSelect').append('<option value="' + value.id + '">' + value
                                .title + '</option>');
                        });
                    }
                });
            } else {
                $('#bookSelect').empty();
                $('#bookSelect').append('<option value="">Select Book</option>');
            }
        });
    </script>

</x-layout>
