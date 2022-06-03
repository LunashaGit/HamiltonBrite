<x-layout>
    <x-slot name="title">
        Create Event
    </x-slot>
    <x-slot name="content">
        <section class="pt-12 pb-24 bg-lightblue flex flex-col text-left">
            <div>
                <div
                    class="flex flex-col md:flex-row mx-auto max-w-[80vw] xl:max-w-[60rem] bg-white rounded-lg border border-gray-200 shadow-md p-2 sm:p-4 md:p-6 lg:p-8 dark:bg-gray-800 dark:border-gray-700 ">
                    <div class="flex float-left ">
                        <div
                            class=" bg-white rounded-lg flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                            <img class="object-cover h-full rounded-t-lg md:rounded-none md:rounded-l-lg"
                                src="/assets/ticket.jpg" alt="">
                        </div>
                    </div>
                    <form class="p-4 md:p-8 flex flex-col justify-around" action="/event" method="POST">
                        @csrf
                        <h2 class="text-2xl pb-6 mx-auto font-medium text-gray-900 dark:text-white">Create a new event</h2>
                        <label for="title" class="block pt-4 pb-2 font-medium text-gray-900 dark:text-gray-300 ">Name
                            of the
                            event :</label>

                            
                        <input
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            autocomplete="off" type="text" name="title" id="title" placeholder="Title of post" required>

                            <label for="title" class="block pb-2 pt-4 font-medium text-gray-900 dark:text-gray-300 ">Type of event :</label>
                            <select  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            name="category_id">
                                @foreach($categories as $category)
                                    <option  value="{{ $category->id }}"> {{ $category->id }} {{ $category->name }} </option>
                                @endforeach
                            </select>

                        <div class="flex flex-col md:flex-row">
                            <div class="flex flex-col float-left text-left ">
                                <label for="date_start"
                                    class="block pt-4 pb-2 text-md font-medium text-gray-900 dark:text-gray-300">Starting
                                    :</label>
                                <input autocomplete="off" type="date" name="date_start"
                                    class="bg-gray-50 border w-[60%] md:w-[90%] border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                <label for="start_hour"
                                    class="block pt-2 pb-2 text-md font-medium text-gray-900 dark:text-gray-300">At :</label>
                                <input autocomplete="off" type="time" name="start_hour"
                                    class="bg-gray-50 border w-[60%] md:w-[90%] border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5  dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                            </div>
                            <div class="flex flex-col text-left md:float-right md:text-right md:items-end">
                                <label for="date_start"
                                    class="block pt-4 pb-2 text-md font-medium text-gray-900 dark:text-gray-300">Ending
                                    :</label>
                                <input autocomplete="off" type="date" name="date_end"
                                    class="bg-gray-50 border w-[60%] md:w-[90%] border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                <label for="end_hour"
                                    class="block pt-2 pb-2 text-md font-medium text-gray-900 dark:text-gray-300">At :</label>
                                <input autocomplete="off" type="time" name="end_hour"
                                        class="bg-gray-50 border w-[60%] md:w-[90%] border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                            </div>
                        </div>

                        <div class=" ">
                            <label for="excerpt"
                                class="block pt-4 pb-2 text-md font-medium text-gray-900 dark:text-gray-300">Short
                                description :</label>
                            <input
                                class="bg-gray-c50 border  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                autocomplete="off" type="text" name="excerpt" id="excerpt"
                                placeholder="Short description" required>

                            <label for="description"
                                class="block pt-4 pb-2  text-md font-medium text-gray-900 dark:text-gray-300">Description :</label>
                            <textarea
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full px-2.5 py-12 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                autocomplete="off" type="text" name="body" id="body" placeholder="Description" required></textarea>

                                <label for="image" 
                                class="block pt-4 pb-2  text-md font-medium text-gray-900 dark:text-gray-300">Image</label>
                                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                type="file" value="upload image" placeholder="Choose an image">


                            <button type="submit" value="Create Post"
                                class="w-full mt-8 text-white  bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-md px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create</button>
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
