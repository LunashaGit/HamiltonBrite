<x-layout>
    <x-slot name="title">
        Create Event
    </x-slot>
    <x-slot name="content">
        <section class="flex flex-col pt-16 pb-24 text-left">
            <div class="custom-shape-divider-top-1655368457 pb-16">
                <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                    <defs>
                        <path id="gentle-wave"
                            d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                    </defs>
                    <g class="parallax ">
                        <use xlink:href="#gentle-wave" x="48" y="0"
                            fill="rgba(255,255,255,0.8)"/>
                        <use xlink:href="#gentle-wave" x="48" y="3"
                            fill="rgba(255,255,255,0.5)" />
                        <use xlink:href="#gentle-wave" x="48" y="5"
                            fill="rgba(255,255,255,0.3)" />
                        <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                    </g>
                </svg>
            </div>
            <div>
                <div
                    class="flex flex-col md:flex-row mx-auto max-w-[80vw] xl:w-[60vw] rounded-lg shadow-md p-2 sm:p-4 md:p-6 lg:p-8 text-whitesmoke dark:bg-gray-800 bg-gray-700 ">
                    <div class="flex float-left ">
                        <div
                            class="flex-row rounded-lg bg-gray-blue md:max-w-xl dark:border-gray-700 dark:bg-gray-700 dark:hover:bg-gray-700">
                            <img class="object-cover h-full rounded-t-lg md:rounded-none md:rounded-l-lg"
                                src="/assets/ticket.jpg" alt="">
                        </div>
                    </div>
                    <div class="w-1/2 px-8">
                        <form class="flex flex-col justify-around p-4 md:p-8" action="/event" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <h2 class="pb-6 mx-auto text-2xl font-medium dark:text-white">Create a new event
                            </h2>
                            <label for="title" class="block pt-4 pb-2 font-medium dark:text-gray-300 ">Name
                                of the
                                event :</label>
                            <input
                                class="  border border-gray-300  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-600 dark:bg-gray-700 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                autocomplete="off" type="text" nam0e="title" id="title"
                                placeholder="Title of post" required>
                            <label for="address"
                                class="block pt-4 pb-2 font-medium text-md dark:text-gray-300">Address</label>
                            <div class="relative flex "><input
                                    class="  border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-600 dark:bg-gray-700 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    type="text" name="address" value="" id="address" placeholder="Address"
                                    autocomplete="off" onchange="mapUp()">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 flex absolute right-[5%] top-[20%] hover:scale-120"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="hidden pt-4 pb-2 mx-auto" id="here">

                            </div>


                            <label for="title" class="block pt-4 pb-2 font-medium dark:text-gray-300 ">Type
                                of
                                event :</label>
                            <select
                                class="text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-600 dark:bg-gray-700 dark:border-gray-500 dark:placeholder-gray-400 active:bg-gray-600 dark:text-white"
                                name="category_id">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"> {{ $category->id }} {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>

                            <div class="flex flex-col md:flex-row">
                                <div class="flex flex-col float-left text-left ">
                                    <label for="date_start"
                                        class="block pt-4 pb-2 font-medium text-md dark:text-gray-300">Starting
                                        :</label>
                                    <input autocomplete="off" type="date" name="date_start"
                                        class="w-[60%] md:w-[90%] border-gray-300  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 bg-gray-600 dark:bg-gray-700 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                    <label for="start_hour"
                                        class="block pt-2 pb-2 font-medium text-md dark:text-gray-300">At
                                        :</label>
                                    <input autocomplete="off" type="time" name="start_hour"
                                        class="w-[60%] md:w-[90%] border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5  bg-gray-600 dark:bg-gray-700 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                </div>
                                <div class="flex flex-col text-left md:float-right md:text-right md:items-end">
                                    <label for="date_start"
                                        class="block pt-4 pb-2 font-medium text-md dark:text-gray-300">Ending
                                        :</label>
                                    <input autocomplete="off" type="date" name="date_end"
                                        class="w-[60%] md:w-[90%] border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 bg-gray-600 dark:bg-gray-700 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                    <label for="end_hour"
                                        class="block pt-2 pb-2 font-medium text-md dark:text-gray-300">At
                                        :</label>
                                    <input autocomplete="off" type="time" name="end_hour"
                                        class="w-[60%] md:w-[90%] border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 bg-gray-600 dark:bg-gray-700 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                </div>
                            </div>

                            <div class="">
                                <label for="excerpt"
                                    class="block pt-4 pb-2 font-medium text-md dark:text-gray-300">Short
                                    description :</label>
                                <input
                                    class="border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-600 dark:bg-gray-700 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    autocomplete="off" type="text" name="excerpt" id="excerpt"
                                    placeholder="Short description" required>

                                <label for="description"
                                    class="block pt-4 pb-2 font-medium text-md dark:text-gray-300">Description
                                    :</label>
                                <textarea
                                    class=" resize-none text-sm rounded-lg block w-full px-2.5 py-12 bg-gray-600 dark:bg-gray-700 dark:placeholder-gray-400 dark:text-white"
                                    autocomplete="off" type="text" name="body" id="body" placeholder="Description" required></textarea>

                                <div id="container" class="hidden pt-4 mx-auto"><img placeholder="Your image"
                                        class="hidden mx-auto rounded-lg" id="img-preview"></div>
                                <h2 class="block pt-4 pb-2 font-medium text-md dark:text-gray-300">Image :
                                </h2>
                                <label
                                    class="border-gray-300 text-sm choose-file rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-600 dark:bg-gray-700 dark:border-gray-500 text-gray-400"
                                    for="image">

                                    <input class="hidden" type="file" id="image" onchange="showPreview(event)"
                                        name="image" value="upload image" placeholder="">Choose an image <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="flex float-right mr-1 w-[1.15rem] h-[1.15rem] hover:scale-120"
                                        viewBox="0 0 20 20" fill="white">
                                        <path fill-rule="evenodd"
                                            d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM6.293 6.707a1 1 0 010-1.414l3-3a1 1 0 011.414 0l3 3a1 1 0 01-1.414 1.414L11 5.414V13a1 1 0 11-2 0V5.414L7.707 6.707a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd" />
                                    </svg></label>
                                <h4 class="text-[10px] italic text-white ">Accept only .png, .jpg, .svg, </h4>
                                <input
                                    class="text-gray-400 border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-600 dark:bg-gray-700 dark:border-gray-500 "
                                    autocomplete="off" type="hidden" name="latitude" id="latitude"
                                    placeholder="latitude" required>
                                <input
                                    class="border-gray-300  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-600 dark:bg-gray-700 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    autocomplete="off" type="hidden" name="longitude" id="longitude"
                                    placeholder="longitude" required>

                                <button type="submit" value="Create Post"
                                    class="w-full mt-8 text-white  bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-md px-5 py-2.5 text-center dark:bg-blue-700 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Create Event</button>
                            </div>
                    </div>
                    </form>


                    <style>
                        #map {
                            height: 15rem;
                            width: 15rem;
                        }
                    </style>
                    <p id="errormap"></p>
                    @if ($errors->any())
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
        </section>
        <script src="/ressources/js/map.js"></script>
    </x-slot>
</x-layout>
