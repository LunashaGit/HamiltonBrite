<x-layout>
    <x-slot name="title">
        Posts
    </x-slot>
    <x-slot name="content">
        <div class="mx-auto my-5">
            <form class="" method="GET" action="/">
                <div class="form-group">
                    <input type="text"
                           class="text-center justify-center m-3 rounded-lg"
                           autocomplete="off"
                           name="search"
                           placeholder="Find Something"
                           value="{{ request('search') }}">
                </div>
            </form>
        </div>
        @auth()
        @if(session()->has('success'))
            <div>
                <p class="text-3xl">{{ session('success') . " " . request()->user()->name  }}</p>
            </div>
        @endif
        @endauth
g        @if($posts->count())
            <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5">

                @foreach($posts as $post)
                    <div class="flex relative justify-center align-center text-gray-900 m-5">
                        <div class="w-45 lg:w-60 px-2 py-2 bg-gray-700 dark:bg-gray-200 rounded-xl m-2">
                            <div class="font-bold text-md lg:text-lg justify-between h-full">
                                <a class="{{$loop->even ? "Even" : "No"}}" href="/posts/<?= $post->slug ?>">
                                    <img class="h-32 my-4 object-cover rounded-xl mx-auto" src="/assets/mrpickles.jpg"
                                         alt="image of mr. pickles">
                                    <h2 class="line-clamp-2">{{ $post->title}}</h2>
                                    </a>

                                <p class="line-clamp-2 m-2 mb-8">{{ $post->body }}</p>
                                <a class="text-white bg-green-700 mx-auto px-2 py-2 mt-auto rounded-lg">See More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{ $posts->onEachSide(3)->links() }}

        @else
            <p>No result</p>
        @endif
    </x-slot>
</x-layout>

