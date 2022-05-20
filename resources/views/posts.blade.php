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
        @if(session()->has('success'))
            <div>
                <p>{{ session('success') }}</p>
            </div>
        @endif

        @if($posts->count())
                <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5">

            @foreach($posts as $post)
                    <div class="flex relative justify-center align-center text-gray-900 m-5">
                        <div class="w-60 lg:w-80 p-4 bg-gray-700 dark:bg-gray-200 rounded-xl m-2">
                            <div class="font-bold text-lg lg:text-xl">
                                <a class="{{$loop->even ? "Even" : "No"}}" href="/posts/<?= $post->slug ?>">
                                    <h2 class="line-clamp-2">{{ $post->title}}</h2></a>
                                <img class="h-32 my-4 object-cover rounded-xl mx-auto" src="/assets/mrpickles.jpg"
                                     alt="image of mr. pickles">

                                <p class="text-md text-gray-600 my-2">
                                    By <a class=""
                                          href="/?author={{$post->author->username}}">{{$post->author->username}}</a> in
                                    <a
                                        href="/?category={{$post->category->slug}}">{{ $post->category->name }}</a>
                                </p>

                                <p class="line-clamp-4 m-2 mb-20">{{ $post->body }}</p>
                                <a class="text-white bg-green-700 mx-auto px-4 py-2 rounded-lg mx-auto absolute bottom-[7.5%] left-[30%]">See More</a>
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

