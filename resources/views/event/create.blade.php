<x-layout>
    <x-slot name="title">
        Create Event
    </x-slot>
    <x-slot name="content">
        <section class="pt-12 pb-24 bg-lightblue flex flex-col">
            <div>
                <div
                    class="flex flex-col md:flex-row mx-auto w-[80vw] xl:max-w-[70vw] bg-white rounded-lg border border-gray-200 shadow-md p-2 sm:p-4 md:p-6 lg:p-8 dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex float-left ">
                        <div
                            class=" bg-white rounded-lg flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                            <img class="object-cover h-full rounded-t-lg  md:rounded-none md:rounded-l-lg"
                                src="/assets/lizard.webp" alt="">
                        </div>
                    </div>
                    <form class="space-y-6 p-4 md:p-8 flex justify-around flex-col" action="/event" method="POST">
                        @csrf
                        <h2 class="text-xl pb-4 font-medium text-gray-900 dark:text-white">Create a new event</h2>
                        <label for="title" class="block pt-2 text-sm font-medium text-gray-900 dark:text-gray-300">Name
                            of the
                            event</label>
                        <input
                            class="bg-gray-50 border  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            autocomplete="off" type="text" name="title" id="title" placeholder="Title of post" required>
                        <div class="flex flex-col md:flex-row">
                            <div class="flex flex-col float-left text-left ">
                                <label for="date_start"
                                    class="block pt-2 text-sm font-medium text-gray-900 dark:text-gray-300">Starting
                                    :</label>
                                <input autocomplete="off" type="date" name="date_start"
                                    class="bg-gray-50 border w-[40%] md:w-[80%] border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                <label for="start_hour"
                                    class="block pt-2 text-sm font-medium text-gray-900 dark:text-gray-300">At :</label>
                                <input autocomplete="off" type="time" name="start_hour"
                                    class="bg-gray-50 border w-[40%] md:w-[80%] border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5  dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                            </div>
                            <div class="flex flex-col text-left md:float-right md:text-right md:items-end">
                                <label for="date_start"
                                    class="block pt-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ending
                                    :</label>
                                <input autocomplete="off" type="date" name="date_end"
                                    class="bg-gray-50 border w-[40%] md:w-[80%] border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                <label for="end_hour"
                                    class="block pt-2 text-sm font-medium text-gray-900 dark:text-gray-300">At :</label>
                                <input autocomplete="off" type="time" name="end_hour"
                                        class="bg-gray-50 border w-[40%] md:w-[80%] border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                            </div>
                        </div>

                        <div class=" ">
                            <label for="excerpt"
                                class="block text-sm font-medium text-gray-900 dark:text-gray-300">Short
                                description</label>
                            <input
                                class="bg-gray-50 border  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                autocomplete="off" type="text" name="excerpt" id="excerpt"
                                placeholder="Short description" required>

                            <label for="description"
                                class="block pt-2 text-sm font-medium text-gray-900 dark:text-gray-300">Description</label>
                            <textarea
                                class="bg-gray-50 border mb-8 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full px-2.5 py-12 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                autocomplete="off" type="text" name="body" id="body" placeholder="Description" required></textarea>


                            <button type="submit" value="Create Post"
                                class="w-full text-white  bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create
                                new event</button>
                        </div>

                    </form>
                    @if ($errors->any())
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
        </section>
    </x-slot>
</x-layout>
