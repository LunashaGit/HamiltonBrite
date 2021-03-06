<x-layout>
    <x-slot name="title">
        My profile
    </x-slot>
    <x-slot name="content">
        <section class="flex flex-col pt-16  pb-24">
            <div class="custom-shape-divider-top-1655368457  pb-16">
                <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                    <defs>
                        <path id="gentle-wave"
                            d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                    </defs>
                    <g class="parallax">
                        <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.8)" />
                        <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                        <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                        <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                    </g>
                </svg>
            </div>
            <div
                class="flex flex-col md:flex-row mx-auto w-[90vw] xl:max-w-[70rem] rounded-lg border border-none shadow-md sm:p-6 lg:p-8 text-whitesmoke bg-gray-700 dark:bg-gray-800">
                <div class="flex float-right ">
                    <div class="flex-row rounded-lg md:max-w-xl ">
                        <img class="object-cover h-full rounded-t-lg md:rounded-none md:rounded-l-lg"
                            src="/assets/osaka.jpg" alt="">
                    </div>
                </div>

                <article class="space-y-6 p-4 md:p-6  text-left text-md md:w-[40rem]">
                    <h2 class="flex justify-center pb-4 text-2xl font-medium text-white">My profile</h2>
                    
                    
                    <form class="" method="POST" action="/profile/update/{{ request()->user()->id }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <div class="flex items-end justify-between">
                            
                            <div class="flex flex-col float-left">
                                <h2 class="block pt-4 pb-2 font-medium text-md text-gray-300">Image :</h2>
                                <label
                                    class="flex border cursor-pointer text-sm choose-file rounded-lg focus:ring-blue-500 focus:border-blue-500 md:w-40 lg:w-48 p-2.5 bg-gray-500 dark:bg-gray-600 border-gray-500 text-gray-400"
                                    for="image">
                                    <input class="hidden" type="file" id="image" onchange="showPreview(event)"
                                        name="image" value="upload image" placeholder="">Choose an image <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="flex ml-auto w-[1.2rem] h-[1.2rem]" viewBox="0 0 20 20"
                                        fill="black">
                                        <path fill-rule="evenodd"
                                            d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM6.293 6.707a1 1 0 010-1.414l3-3a1 1 0 011.414 0l3 3a1 1 0 01-1.414 1.414L11 5.414V13a1 1 0 11-2 0V5.414L7.707 6.707a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd" />
                                    </svg></label>

                            </div>
                            
                            <div id="container" class= "block md:flex w-24 h-24">
                                <img id="img-preview"
                                    class="float-right h-full w-full object-cover rounded-lg mx-auto sm:ml-auto sm:mr-0"
                                    src="storage/images/{{ request()->user()->profile_picture }}">
                            </div>
                           
                        </div>
                        <div>

                            <label for="username" class="block pt-4 pb-2 font-medium text-gray-300">Username</label>
                            <input
                                class="text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-500 dark:bg-gray-600 border-gray-500 placeholder-gray-400 text-white"
                                autocomplete="off" type="text" name="username" id="username" placeholder="username"
                                value="{{ request()->user()->username }}">

                            <label for="lastname" class="block pt-4 pb-2 font-medium text-gray-300">Last name</label>
                            <input
                                class="border text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-500 dark:bg-gray-600 border-gray-500 placeholder-gray-400 text-white"
                                autocomplete="off" type="text" name="lastname" id="lastname" placeholder="name"
                                value="{{ request()->user()->lastname }}">

                            <label for="firstname" class="block pt-4 pb-2 font-medium text-gray-300">First Name</label>
                            <input
                                class="border text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-500 dark:bg-gray-600 border-gray-500 placeholder-gray-400 text-white"
                                autocomplete="off" type="text" name="firstname" id="firstname" placeholder="name"
                                value="{{ request()->user()->firstname }}">

                            <label for="email" class="block pt-4 pb-2 font-medium text-gray-300">Email</label>
                            <input type="email" name="email" id="email"
                                class="border text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-500 dark:bg-gray-600 border-gray-500 placeholder-gray-400 text-white"
                                placeholder="name@company.com" value="{{ request()->user()->email }}">

                            <label for="password" class="block pt-4 pb-2 font-medium text-gray-300">Password</label>
                            <input type="password" name="password" id="password" placeholder="????????????????????????"
                                class="border text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-500 dark:bg-gray-600 border-gray-500 placeholder-gray-400 text-white">

                            <label for="password_confirm" class="block pt-4 pb-2 font-medium text-gray-300">Password
                                confirmation</label>

                            <input
                                class="text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-500 dark:bg-gray-600 border-gray-500 placeholder-gray-400 text-white"
                                autocomplete="off" type="password" name="password_confirm" id="password_confirm"
                                placeholder="Password confirmation">

                            <label class="block pt-4 pb-2 font-medium text-gray-300">My bio :</label>
                            <textarea placeholder="About me" rows="5" cols="40" name="bio" id="bio"
                                value="{{ request()->user()->bio }}"
                                class="box-border block w-full h-40 text-sm border rounded-lg resize-none focus:ring-blue-500 p-2.5 focus:border-blue-500 bg-gray-500 dark:bg-gray-600 border-gray-500 placeholder-gray-400text-white">{{ request()->user()->bio }}</textarea>
                        </div>
                        <div class="flex items-end justify-between">
                        <input type="submit" value="Update informations"
                            class="hover:scale-110 mt-8 cursor-pointer text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    </form>
                    <form class="flex" method="post" action="/profile/delete/{{ request()->user()->id }}">
                        @csrf
                        @method('DELETE')
                        <a
                        class="hover:scale-110 mt-6 cursor-pointer text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                            <input type="button" data-modal-toggle="defaultModal" class="delete cursor-pointer "
                                type="submit" value="delete">
                        </a>
                    </form>
                </div>
                    @if ($errors->any())
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                </article>

        </section>
        <script src="/ressources/js/preload-image.js"></script>
        <script src="/ressources/js/delete-profile.js"></script>
        <script src="ressources/js/preview-image.js"></script>
    </x-slot>
</x-layout>
