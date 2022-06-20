<x-layout>
    <x-slot name="title">
        Create Event
    </x-slot>
    <x-slot name="content">
        <section class="flex flex-col pt-36 pb-24 text-left bg-littlegrey dark:bg-silver">
            <div
                class="flex flex-col md:flex-row mx-auto max-w-[90vw] xl:max-w-[70rem] rounded-lg shadow-md p-2 sm:p-4 md:p-6 lg:p-8 text-whitesmoke bg-gray-700 dark:bg-gray-800">
                <div class="flex float-left ">
                    <div class="flex-row rounded-lg md:max-w-xl">
                        <img class="object-cover h-full rounded-t-lg md:rounded-none md:rounded-l-lg"
                            src="/assets/ticket.jpg" alt="">
                    </div>
                </div>
                <form class="flex flex-col justify-around p-4 md:p-8" action="/event" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <h2 class="pb-6 mx-auto text-2xl font-medium  text-white">Create a new event
                    </h2>
                    <div class="flex items-end max-h-48 pt-4">
                        <div class="flex flex-col float-left ">
                            <h2 class="block pt-4 pb-2 font-medium text-md text-gray-300">Image :</h2>
                            <label
                                class="border flex items-center justify-between cursor-pointer text-[12px] md:text-sm choose-file h-10 rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 bg-gray-500 dark:bg-gray-600 border-gray-500 text-gray-400"
                                for="image">Upload

                                <input class="hidden relative" type="file" id="image" onchange="showPreview(event)"
                                    name="image" value="upload image" placeholder="">
                                    <i class="fa-solid fa-upload"></i>
                            </label>
                            <h4 class="text-[10px] italic text-white ">Accept only .png, .jpg, .svg, </h4>
                        </div>
                        <div id="container"
                            class="flex justify-center w-36 h-36 rounded-lg mx-auto sm:mr-0">
                            <img
                                placeholder="Your image" class="hidden w-full h-full rounded-lg" id="img-preview">
                        </div>
                    </div>
                    <label for="title" class="block pt-4 pb-2 font-medium  text-gray-300 ">Name
                        of the
                        event :
                    </label>
                    <input
                        class="border text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-500 dark:bg-gray-600 border-gray-500 placeholder-gray-400 text-white"
                        autocomplete="off" type="text" name="title" id="title" placeholder="Title of post" required>
                    <label for="address" class="block pt-4 pb-2 font-medium  text-md dtext-gray-300">Address :</label>
                    <input
                        class=" border text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-500 dark:bg-gray-600 border-gray-500 
                            type="
                        text" name="address" value="" id="address" placeholder="Address" autocomplete="off"
                        onchange="mapUp()">
                    <div class="hidden pt-4 pb-2 mx-auto" id="here"></div>


                    <label for="title" class="block pt-4 pb-2 font-medium  text-gray-300 ">Type of
                        event :</label>
                    <select
                        class=" border text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-500 dark:bg-gray-600 border-gray-500"
                        name="category_id">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"> {{ $category->id }} {{ $category->name }}
                            </option>
                        @endforeach
                    </select>

                    <div class="flex flex-col md:flex-row">
                        <div class="flex flex-col float-left text-left ">
                            <label for="date_start" class="block pt-4 pb-2 font-medium  text-md text-gray-300">Starting
                                :</label>
                            <input autocomplete="off" type="date" name="date_start"
                                class="border w-[60%] md:w-[90%] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 bg-gray-500 dark:bg-gray-600 border-gray-500 placeholder-gray-400 text-white">
                            <label for="start_hour" class="block pt-2 pb-2 font-medium text-md text-gray-300">At
                                :</label>
                            <input autocomplete="off" type="time" name="start_hour"
                                class="border w-[60%] md:w-[90%] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5  bg-gray-500 dark:bg-gray-600 border-gray-500 placeholder-gray-400 text-white">
                        </div>
                        <div class="flex flex-col text-left md:float-right md:text-right md:items-end">
                            <label for="date_start" class="block pt-4 pb-2 font-medium  text-md text-gray-300">Ending
                                :</label>
                            <input autocomplete="off" type="date" name="date_end"
                                class="border w-[60%] md:w-[90%] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 bg-gray-500 dark:bg-gray-600 border-gray-500 placeholder-gray-400 text-white">
                            <label for="end_hour" class="block pt-2 pb-2 font-medium text-md text-gray-300">At
                                :</label>
                            <input autocomplete="off" type="time" name="end_hour"
                                class=" border w-[60%] md:w-[90%] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 bg-gray-500 dark:bg-gray-600 border-gray-500 placeholder-gray-400 text-white">
                        </div>
                    </div>

                    <div class="">
                        <label for="excerpt" class="block pt-4 pb-2 font-medium text-md text-gray-300">Short
                            description :</label>
                        <input
                            class="border text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-500 dark:bg-gray-600 border-gray-500 placeholder-gray-400 text-white"
                            autocomplete="off" type="text" name="excerpt" id="excerpt" placeholder="Short description"
                            required>

                        <label for="description" class="block pt-4 pb-2 font-medium text-md text-gray-300">Description
                            :</label>
                        <textarea
                            class="border resize-none text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full px-2.5 py-12 bg-gray-500 dark:bg-gray-600 border-gray-500 placeholder-gray-400 text-white"
                            autocomplete="off" type="text" name="body" id="body" placeholder="Description" required>
                        </textarea>
                       
                        <input
                            class="border text-gray-400 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-500 dark:bg-gray-600 border-gray-500 "
                            autocomplete="off" type="hidden" name="latitude" id="latitude" placeholder="latitude"
                            required>
                        <input
                            class=" border text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-500 dark:bg-gray-600 border-gray-500 placeholder-gray-400 :text-white"
                            autocomplete="off" type="hidden" name="longitude" id="longitude" placeholder="longitude"
                            required>

                        <button type="submit" value="Create Post"
                            class="w-full mt-8 text-white  bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-md px-5 py-2.5 text-center dark:bg-blue-700 dark:hover:bg-blue-800 dark:focus:ring-blue-900">
                            Create Event</button>
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
        </section>
        <script src="/ressources/js/map.js"></script>

    </x-slot>
</x-layout>
