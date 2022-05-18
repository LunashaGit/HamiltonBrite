{{--<x-layout>--}}
{{--    <x-slot name="title">--}}
{{--        Posts--}}
{{--    </x-slot>--}}
{{--    <x-slot name="content">--}}
{{--        <form method="GET" action="/">--}}
{{--            <div class="form-group">--}}
{{--                <input type="text"--}}
{{--                       class="form-control text-center justify-content-center m-3 rounded"--}}
{{--                       autocomplete="off"--}}
{{--                       name="search"--}}
{{--                       placeholder="Find Something"--}}
{{--                       value="{{ request('search') }}">--}}
{{--            </div>--}}
{{--        </form>--}}

{{--        @if(session()->has('success'))--}}
{{--            <div>--}}
{{--                <p>{{ session('success') }}</p>--}}
{{--            </div>--}}
{{--        @endif--}}
{{--        @if($posts->count())--}}

{{--            @foreach($posts as $post)--}}
{{--                <div class="flex flex-nowrap sm:flex flex-wrap">--}}

{{--                <div class="h-full bg-orange-300 m-2 text-center place-content-center rounded flex flex-col flex-wrap w-[25%] m-4 p-4">--}}
{{--                    <div class="max-h-[40%]">--}}
{{--                        <img class="p-4 rounded" src="/assets/mrpickles.jpg" alt="image of mr. pickles">--}}
{{--                    </div>--}}
{{--                    <div class="max-h-[60%]">--}}
{{--                <a class="{{$loop->even ? "Even" : "No"}}" href="/posts/<?= $post->slug ?>">--}}
{{--                    <h2>{{ $post->title}}</h2></a>--}}
{{--                <p class="">--}}
{{--                    By <a class="text-center justify-content-center" href="/?author={{$post->author->username}}">{{$post->author->username}}</a> in <a href="/?category={{$post->category->slug}}">{{ $post->category->name }}</a>--}}
{{--                </p>--}}

{{--                <p class="post__paragraph line-clamp-3">{{ $post->body }}</p>--}}
{{--                    </div>--}}
{{--                    <a href="/" class="my-auto justify-self-end">See More</a>--}}
{{--                </div>--}}
{{--                </div>--}}
{{--            @endforeach--}}
{{--            {{ $posts->onEachSide(5)->links() }}--}}
{{--        @else--}}
{{--            <p>No result</p>--}}
{{--        @endif--}}
{{--    </x-slot>--}}
{{--</x-layout>--}}

<x-layout>
    <div class="mx-auto my-5">
        <form class="" method="GET" action="/">
            <div class="form-group">
                <input type="text"
                       class="text-center justify-center m-3 rounded-l"
                       autocomplete="off"
                       name="search"
                       placeholder="Find Something"
                       value="{{ request('search') }}">
            </div>
        </form>
    </div>
    <x-slot name="title">
        Posts
    </x-slot>
    <x-slot name="content">

        @if(session()->has('success'))
            <div>
                <p>{{ session('success') }}</p>
            </div>
        @endif

        @if($posts->count())

            @foreach($posts as $post)
                <div class="">
                    <div class="flex justify-center align-center text-gray-900 m-5">
                        <div class="w-60 p-8 bg-white rounded-l m-2">
                            <div class="font-bold text-md">
                                <a class="{{$loop->even ? "Even" : "No"}}" href="/posts/<?= $post->slug ?>">
                                    <h2>{{ $post->title}}</h2></a>
                                <img class="h-32 my-4 object-cover rounded-l mx-auto" src="/assets/mrpickles.jpg"
                                     alt="image of mr. pickles">

                                <p class="text-sm text-gray-600 my-2">
                                    By <a class=""
                                          href="/?author={{$post->author->username}}">{{$post->author->username}}</a> in
                                    <a
                                        href="/?category={{$post->category->slug}}">{{ $post->category->name }}</a>
                                </p>

                                <p class="line-clamp-3 m-2">{{ $post->body }}</p>
                                <a href="/" class="text-white bg-green-700 m-4 px-3 py-1 rounded-sm">See More</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            {{ $posts->onEachSide(5)->links() }}
        @else
            <p>No result</p>
        @endif
    </x-slot>
</x-layout>

