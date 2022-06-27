<x-layout-otherpage>
    <x-slot name="title">
        {{ $post->title }}
    </x-slot>
    <x-slot name="content">
        <section class="w-auto h-full pt-36 pb-24 bg-cover bg-silver dark:bg-silver-blue">

            <article
                class="p-8 mx-auto max-w-[90vw] xl:max-w-[90rem] rounded-lg border border-none shadow-md sm:p-4 lg:p-6 text-whitesmoke bg-gray-700">
                <h1 class="pb-8 text-4xl font-bolder">{{ $post->title }} </h1>
                <div class="flex flex-col lg:grid lg:grid-cols-3 gap-4">

                    <div class="mx-auto md:w-3/4 flex flex-col justify-between">
                        @auth()
                            @method('put')
                            @csrf
                            <h2 class="text-2xl pt-6">{{ $post->excerpt }}</h2>
                        @endauth
                        <video width="" height="" class ="h-64 w-auto" controls>
                            <source src="movie.mp4" type="video/mp4">
                            <source src="movie.ogg" type="video/ogg">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div class="mx-auto">
                        <div class="flex flex-col sm:flex-row gap-4 lg:gap-2 my-auto">
                            <div class="flex flex-col float-left text-left">
                                <label for="date_start"
                                    class="block pt-4 pb-2 font-medium text-md text-gray-300">Starting
                                    :</label>
                                <input autocomplete="off" type="date" name="date_start"
                                    value="{{ $post->date_start }}"
                                    class="border w-48 md:w-36 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 bg-gray-500 dark:bg-gray-600 border-gray-500 placeholder-gray-400 text-white">
                                <label for="start_hour" class="block pt-4 pb-2 font-medium text-md text-gray-300">At
                                    :</label>
                                <input autocomplete="off" min="00:00" max="23:59" type="time" name="start_hour"
                                    value="{{ $post->start_hour }}"
                                    class="border w-48 md:w-36 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5  bg-gray-500 dark:bg-gray-600 border-gray-500 placeholder-gray-400 text-white">
                            </div>
                            <div class="flex flex-col text-left md:float-right md:text-right md:items-end">
                                <label for="date_start"
                                    class="block pt-4 pb-2 font-medium  text-md text-gray-300">Ending
                                    :</label>
                                <input autocomplete="off" type="date" name="date_end" value="{{ $post->date_end }}"
                                    class="border w-48 md:w-36 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 bg-gray-500 dark:bg-gray-600 border-gray-500 placeholder-gray-400 text-white">
                                <label for="end_hour" class="block pt-4 pb-2 font-medium text-md text-gray-300">At
                                    :</label>
                                <input autocomplete="off" min="00:00" max="23:59" type="time" name="end_hour"
                                    value="{{ $post->end_hour }}"
                                    class=" border w-48 md:w-36 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 bg-gray-500 dark:bg-gray-600 border-gray-500 placeholder-gray-400 text-white">
                            </div>
                        </div>
                        <div class="overflow-hidden z-0 justify-center flex flex-col pt-4">
                            <div class="overflow-hidden h-64 rounded-lg" id="map">
                            </div>
                            <h2 class="text-left pt-2 flex"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>Address : Need the query to fetch the address</h2>
                        </div>
                    </div>


                    <div class="flex flex-col md:w-3/4 py-4 mx-auto">
                        @auth()
                            @method('put')
                            @csrf
                            <h3>{{ $post->body }}</h3>
                        @endauth
                    </div>
                    <div class="col-span-2">
                        <div
                            class="w-full sm:w-3/4 h-auto rounded-lg shadow-lg my-auto mx-auto place-items-end flex mb-0">
                            <img class="w-full h-full rounded-lg" src="/storage/images/{{ $post->image }}"
                                alt="Picture of the event : {{ $post->slug }}">
                        </div>
                    </div>
                    
                    <div class="flex flex-col justify-center">
                        @auth()
                        @if ($post->participation->where('user_id', request()->user()->id) == '[]')
                                <form method="POST" action="/posts/{{ $post->slug }}/participation/">
                                    @csrf
                                    <button type="submit"value="Participate"
                                        class="hover:scale-110 mt-8 cursor-pointer text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        Participate</button>
                                </form>
                            @else
                                <button class="border-2 border-white " type="submit" value="Participate">I
                                    participate</button>
                            @endif
                            <a class="" href="/">Go Back</a>
                            
                        </div>
                    </div>
                </article>
                <div class="bg-silver-blue mt-8 relative">
                    <div class="custom-shape-divider-top-1655368457">
                        <svg class="waves " xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                            <defs>
                                <path id="gentle-wave"
                                    d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                            </defs>
                            <g class="parallax">
                                <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.8)" />
                                <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                                <use xlink:href="#gentle-wave" x="48" y="5"
                                    fill="rgba(255,255,255,0.3)" />
                                <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                            </g>
                        </svg>
                    </div>
                </div>
                <article
                    class="comment__section mt-8 p-8 mx-auto max-w-[90vw] xl:max-w-[80rem] rounded-lg border border-none shadow-md sm:p-4 lg:p-6 text-whitesmoke bg-gray-700">
                    <h2 class="pt-8 text-center text-2xl">Leave a comment</h2>
                    <div class="flex pt-4">
                        @csrf
                        @auth
                            <div
                                class="w-[90vw] md:w-1/2 bg-lightgrey dark:bg-gray-600 p-2 pt-4 mx-auto rounded shadow-lg text-black dark:text-white">
                                <div class="flex ml-2">
                                    <div id="container" class="block md:flex w-16 h-16 md:w-24 md:h-24">
                                        <img id="img-preview" class="rounded-full h-full w-full"
                                            src="../storage/images/{{ request()->user()->profile_picture }}">

                                    </div>
                                    <div class="px-4 my-auto">

                                        <h1 class="font-semibold">{{ request()->user()->username }}</h1>
                                    </div>

                                </div>

                                <div class="mt-3 p-3 w-full ">
                                    <form method="POST" action="/posts/{{ $post->slug }}">
                                        @csrf
                                        <textarea autocomplete="off" type="text" name="comment" id="comment" value="{{ old('name') }}" required
                                            rows="3" class="border p-2 rounded w-full text-black" placeholder="Write something..."></textarea>

                                        <div class="flex float-right py-2">
                                            <input type="submit" autocomplete="off" value="Submit"
                                                class="px-3 py-1 bg-gray-700 dark:bg-gray-800 text-white rounded font-light hover:bg-gray-700">
                                        </div>
                                    </form>

                                </div>

                            </div>

                        </div>
                    @endauth
                    <form method="POST" action="/posts/{{ $post->slug }}">
                        @csrf
                        <div>
                            <input autocomplete="off" type="text" name="comment" id="comment"
                                placeholder="comment  " value="{{ old('name') }}" required>
                        </div>
                        <input autocomplete="off" type="submit" value="send">
                    </form>
                @endauth


                @foreach ($post->comments as $comment)
                    <p>{{ $comment->author->username }}</p>
                    <p>{{ $comment->created_at }}</p>
                    <p>{{ $comment->comment }}</p>


                    @if ($comment->author->id == auth()->id())
                        <form method="POST" action="/comments/{{ $comment->id }}">
                            @csrf
                            @method('DELETE')
                            <input autocomplete="off" type="submit" value="Delete">
                        </form>
                    @endif
                @endforeach
                @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
                {{-- @foreach ($post->comments as $comment)
                @endfor
                <p>{{ $comment->author->username }}</p>
                <p>{{ $comment->created_at }}</p>
                <p>{{ $comment->comment }}</p>
                @if ($comment->author->id == auth()->id())
                    <form method="POST" action="/comments/{{ $comment->id }}">
                        @csrf
                        @method('DELETE')
                        <input autocomplete="off" type="submit" value="Delete">
                    </form>
                @endif
                @endforeach
                @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif --}}


            </article>
        </section>
        <script>
            var map = L.map('map').setView([<?= json_encode($post->latitude) ?>, <?= json_encode($post->longitude) ?>], 4);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            L.marker([<?= json_encode($post->latitude) ?>, <?= json_encode($post->longitude) ?>]).addTo(map)
                .bindPopup('<?= json_encode($post->title) ?>')
                .openPopup();
        </script>
        <script src="../ressources/js/preload-image.js"></script>


    </x-slot>

</x-layout-otherpage>
