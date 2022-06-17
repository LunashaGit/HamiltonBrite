<x-layout-otherpage>
    <x-slot name="title">
        {{ $post->title }}
    </x-slot>
    <x-slot name="content">
        <style>
            #map {
                height: 15rem;
                width: 15rem;
            }
        </style>
        <section class="w-auto h-full pt-36 pb-24 bg-cover bg-silver dark:bg-silver-blue">
            <div
                class="card flex flex-col gap-2 p-8 mx-auto max-w-[90vw] xl:max-w-[70rem] rounded-lg border border-none shadow-md sm:p-6 lg:p-8 text-whitesmoke bg-gray-700 dark:bg-gray-800">

                <h1 class="pb-8 text-4xl font-bolder">{{ $post->title }} </h1>


                <div class="flex justify-between">
                    <div class="w-40 h-40 md:w-64 md:h-56 mb-2 rounded-lg shadow-lg">
                        <img class="w-full h-full rounded-t-xl" src="/storage/images/{{ $post->image }}"
                            alt="Picture of the event : {{ $post->slug }}">
                    </div>
                    <div class="flex flex-col md:flex-row">
                        <div class="flex flex-col float-left text-left ">
                            <label for="date_start" class="block pt-4 pb-2 font-medium  text-md text-gray-300">Starting
                                :</label>
                            <input autocomplete="off" type="date" name="date_start"
                                class="border w-[60%] md:w-[90%] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400 text-white">
                            <label for="start_hour" class="block pt-2 pb-2 font-medium text-md text-gray-300">At
                                :</label>
                            <input autocomplete="off" type="time" name="start_hour"
                                class="border w-[60%] md:w-[90%] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5  bg-gray-600 border-gray-500 placeholder-gray-400 text-white">
                        </div>
                        <div class="flex flex-col text-left md:float-right md:text-right md:items-end">
                            <label for="date_start" class="block pt-4 pb-2 font-medium  text-md text-gray-300">Ending
                                :</label>
                            <input autocomplete="off" type="date" name="date_end"
                                class="border w-[60%] md:w-[90%] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400 text-white">
                            <label for="end_hour" class="block pt-2 pb-2 font-medium text-md text-gray-300">At
                                :</label>
                            <input autocomplete="off" type="time" name="end_hour"
                                class=" border w-[60%] md:w-[90%] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400 text-white">
                        </div>
                    </div>
                    </div>
                    <div class="">
                        @auth()
                            @if ($post->participation->where('user_id', request()->user()->id) == '[]')
                                <form method="POST" action="/posts/{{ $post->slug }}/participation/">
                                    @csrf
                                    <button class="border-2 border-white" type="submit"
                                        value="Participate">Participate</button>
                                </form>
                            @else
                                <button class="border-2 border-white " type="submit" value="Participate">I
                                    participate</button>
                            @endif
                        </div>

                    <p>{{ $post->body }}</p>
                   
                    @auth()
                        @if ($post->author->id == auth()->id())
                            <form method="POST" action="/posts/{{ $post->id }}/delete">
                                @csrf
                                @method('DELETE')
                                <input autocomplete="off" type="submit" value="Delete">
                            </form>
                        @endif
                    @endauth
                    @auth()
                        @if (request()->user()->username == $post->author->username && request()->user()->id == $post->author->id)
                            <form method="POST" action="/posts/{{ $post->id }}/update ">
                                @method('put')
                                @csrf
                                <input autocomplete="off" type="text" name="title" id="title" placeholder="Title of post"
                                    value="{{ $post->title }}" required>
                                <input autocomplete="off" type="text" name="excerpt" id="excerpt" placeholder="excerpt"
                                    value="{{ $post->excerpt }}" required>
                                <input autocomplete="off" type="text" name="body" id="body" placeholder="body"
                                    value="{{ $post->body }}" required>
                                <input type="date" id="date" name="date" min="2022-01-01" value="{{ $post->date }}" required>
                                <input type="submit" value="send">
                            </form>
                        @endif
                    @endauth
                    <div class="bottom">
                        <div class="flex float-left bottom__left" id="map">
                        </div>
                        <div class="flex flex-col justify-between float-right bottom__right">

                            <a class="flex justify-center float-right align-center" href="/">Go Back</a>
                        </div>

                        <p>
                            By <a href="/?author={{ $post->author->username }}">{{ $post->author->username }}</a> in
                            <a href="/?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
                        </p>

                    </div>
                </div>

            </section>
            <section class="comment__section">
                <form method="POST" action="/posts/{{ $post->slug }}">
                    @csrf
                    <div>
                        <input autocomplete="off" type="text" name="comment" id="comment" placeholder="comment  "
                            value="{{ old('name') }}" required>
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
