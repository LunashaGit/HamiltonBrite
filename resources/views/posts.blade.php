    <x-layout>
        <x-slot name="title">
            Posts
        </x-slot>
        <x-slot name="content">
            <form method="GET" action="/">
                <div class="form-group">
                    <input type="text"
                           class="form-control text-center justify-content-center m-3 rounded"
                           autocomplete="off"
                           name="search"
                           placeholder="Find Something"
                           value="{{ request('search') }}">
                </div>
            </form>
            @if(session()->has('success'))
                <div>
                    <p>{{ session('success') }}</p>
                </div>
            @endif
            @if($posts->count())
                @foreach($posts as $post)
                    <div class="bg-orange-300 m-2 flex flex-wrap text-center place-content-center rounded w-[30%]">
                        <div class="float-left w-[60%]">
                    <a class="{{$loop->even ? "Even" : "No"}}" href="/posts/<?= $post->slug; ?>">
                        <h2>{{ $post->title}}</h2></a>
                    <p>
                        By <a class="flex text-center justify-content-center" href="/?author={{$post->author->username}}">{{$post->author->username}}</a> in <a href="/?category={{$post->category->slug}}">{{ $post->category->name }}</a>
                    </p>

                    <p>{{ $post->body }}</p>
                        </div>
                        <div class="float-right w-[40%]">
                            <img class="p-4 rounded" src="/assets/mrpickles.jpg" alt="image of mr. pickles">
                        </div>
                    </div>
                @endforeach
                    {{ $posts->onEachSide(5)->links() }}

            @else
                <p>No result</p>
            @endif
        </x-slot>
    </x-layout>

