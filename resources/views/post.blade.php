<x-layout-otherpage>
    <x-slot name="title">
        {{ $post->title }}
    </x-slot>
    <x-slot name="content">
        <section class="w-auto h-full pt-36 pb-24 bg-cover bg-silver dark:bg-silver-blue">

            <article
                class="p-8 mx-auto max-w-[90vw] xl:max-w-[80rem] rounded-lg border border-none shadow-md sm:p-4 lg:p-6 text-whitesmoke bg-gray-700">
                <h1 class="pb-8 text-4xl font-bolder">{{ $post->title }} </h1>
                <div class="flex flex-col lg:grid lg:grid-cols-3 gap-4">
                    <div class="">
                        <div class="w-40 h-40 md:w-64 md:h-56 mb-2 rounded-lg shadow-lg">
                            <img class="w-full h-full rounded-t-xl" src="/storage/images/{{ $post->image }}"
                                alt="Picture of the event : {{ $post->slug }}">
                        </div>
                    </div>
                    <div class="mx-auto my-auto">
                        @auth()
                            @method('put')
                            @csrf
                            <h2 class="text-2xl">{{ $post->excerpt }}</h2>
                        @endauth
                    </div>
                    <div class="flex flex-col md:flex-row gap-2 lg:gap-4 justify-center">
                        <div class="flex flex-col float-left text-left  ">
                            <label for="date_start" class="block pt-4 pb-2 font-medium  text-md text-gray-300">Starting
                                :</label>
                            <input autocomplete="off" type="date" name="date_start"
                                class="border w-48 md:w-36 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 bg-gray-500 dark:bg-gray-600 border-gray-500 placeholder-gray-400 text-white">
                            <label for="start_hour" class="block pt-4 pb-2 font-medium text-md text-gray-300">At
                                :</label>
                            <input autocomplete="off" type="time" name="start_hour"
                                class="border w-48 md:w-36 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5  bg-gray-500 dark:bg-gray-600 border-gray-500 placeholder-gray-400 text-white">
                        </div>
                        <div class="flex flex-col text-left md:float-right md:text-right md:items-end">
                            <label for="date_start" class="block pt-4 pb-2 font-medium  text-md text-gray-300">Ending
                                :</label>
                            <input autocomplete="off" type="date" name="date_end"
                                class="border w-48 md:w-36 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 bg-gray-500 dark:bg-gray-600 border-gray-500 placeholder-gray-400 text-white">
                            <label for="end_hour" class="block pt-4 pb-2 font-medium text-md text-gray-300">At
                                :</label>
                            <input autocomplete="off" type="time" name="end_hour"
                                class=" border w-48 md:w-36 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 bg-gray-500 dark:bg-gray-600 border-gray-500 placeholder-gray-400 text-white">
                        </div>

                    </div>
                    <div class="overflow-hidden z-0">
                        <div class="flex float-left overflow-hidden bottom__left w-64 h-64" id="map">
                        </div>
                    </div>
                    <div class="flex flex-col ">
                        @auth()
                            @method('put')
                            @csrf
                            <h3>{{ $post->body }}</h3>
                        @endauth
                    </div>
                    <div class="flex flex-col justify-center">
                        @auth()
                            @if ($post->participation->where('user_id', request()->user()->id) == '[]')
                                <form method="POST" action="/posts/{{ $post->slug }}/participation/">
                                    @csrf
                                    <button class="border-2 border-white px-4 py-2 rounded-lg" type="submit"
                                        value="Participate">Participate</button>
                                </form>
                            @else
                                <button class="border-2 border-white " type="submit" value="Participate">I
                                    participate</button>
                            @endif
                        </div>
                    </div>
                    <div>
                        <div class="bg-silver-blue mt-16 mb-8 mx-12 rounded-xl relative">
                            <div class="custom-shape-divider-top-1655368457 rounded-xl">
                                <svg class="waves rounded-xl " xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28"
                                    preserveAspectRatio="none" shape-rendering="auto">
                                    <defs>
                                        <path id="gentle-wave"
                                            d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                                    </defs>
                                    <g class="parallax">
                                        <use xlink:href="#gentle-wave" x="48" y="0"
                                            fill="rgba(255,255,255,0.7)" />
                                        <use xlink:href="#gentle-wave" x="48" y="3" fill="#506587" />
                                        <use xlink:href="#gentle-wave" x="48" y="5"
                                            fill="rgba(255,255,255,0.5)" />
                                        <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="comment__section">
                        <h2 class="pt-8 text-left text-2xl">Leave a comment</h2>
                        <div class="flex pt-4">
                            @csrf
                            @auth
                                <div class="w-1/2 bg-silver dark:bg-gray-600 p-2 pt-4 rounded shadow-lg text-black dark:text-white">
                                    <div class="flex ml-3">
                                        <div class="mr-3 w-20 h-20">
                                            <img alt="" class="rounded-full"
                                            src="storage/images/{{ request()->user()->profile_picture }}">

                                        </div>
                                        <div>

                                            <h1 class="font-semibold">{{request()->user()->username}}</h1>
                                            <p class="text-xs">2 seconds ago</p>
                                        </div>

                                    </div>

                                    <div class="mt-3 p-3 w-full">
                                        <textarea rows="3" class="border p-2 rounded w-full text-black" placeholder="Write something..."></textarea>
                                    </div>

                                    <div class="flex justify-between mx-3">
                                        <div>
                                            <button
                                                class="px-4 py-1 bg-gray-700 dark:bg-gray-800 text-white rounded font-light hover:bg-gray-700">Submit</button>
                                        </div>
                                        <div>
                                            <div tabindex="0" class="dropdown">
                                                <div tabindex="0" class="cursor-pointer">...</div>
                                                <ul class="dropdown-content bg-white p-3 shadow rounded menu w-52">
                                                    <li><a href="#">Link 1</a></li>
                                                    <li><a href="#">Link 2</a></li>
                                                    <li><a href="#">Link 3</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        @endauth
                    </div>
                    <form method="POST" action="/posts/{{ $post->slug }}">
                        @csrf
                        <div>
                            <input autocomplete="off" type="text" name="comment" id="comment"
                                placeholder="comment  " value="{{ old('name') }}" required>
                        </div>
                        <input autocomplete="off" type="submit" value="send">
                    </form>
                @else
                    <a href="/">For the participation: Login</a>
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
            </article>
            <a class="" href="/">Go Back</a>

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
    </x-slot>

</x-layout-otherpage>
