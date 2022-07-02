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
        <section class="w-auto h-full pt-8 pb-16 bg-cover bg-paris bg-silver-blue">
            <div class="card flex flex-col gap-2 p-8 text-black md:w-[50vw] mx-auto">
                <div class="post__top">

                    <h1 class="pb-8 text-4xl font-bolder">{{ $post->title }} </h1>
                    <p>
                        By <a href="/?author={{ $post->author->username }}">{{ $post->author->username }}</a> in <a
                            href="/?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
                    </p>

                    <p>{{ $post->body }}</p>
                    <div class="">
                        <label>Starting :</label>
                        <h6>{{ $post->date_start }}</h6>
                        <label>At :</label>
                        <h5>{{ $post->start_hour }}</h5>
                    </div>
                    <div class="flex flex-col float-right text-right">
                        <label>Ending :</label>
                        <h6>{{ $post->date_end }}</h6>
                        <label>At :</label>
                        <h5>{{ $post->end_hour }}</h5>
                    </div>
                    @auth()
                        @if ($post->author->id == auth()->id())
                            <form method="POST" action="/posts/{{ $post->id }}/delete">
                                @csrf
                                @method('DELETE')
                                <input autocomplete="off" type="submit" value="Delete">
                            </form>
                        @endif
                    @endauth
                </div>
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
                    <div class="flex float-left bottom__left" id="map"></div>
                    <div class="flex flex-col justify-between float-right bottom__right">
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
                            <a class="flex justify-center float-right align-center" href="/">Go Back</a>
                        </div>
                        <div class="comment__section">
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
                    </div>
                </div>
            </div>
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
