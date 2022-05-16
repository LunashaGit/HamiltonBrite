<x-layout>
    <x-slot name="title">
        Posts
    </x-slot>
    <x-slot name="content">
        <form method="GET" action="/">
            <div class="form-group">
                <input type="text" class="form-control" autocomplete="off" name="search" placeholder="Find Something" value="{{ request('search') }}">
            </div>
        </form>
        @if(session()->has('success'))
            <div>
                <p>{{ session('success') }}</p>
            </div>
        @endif
        @if($posts->count())
            @foreach($posts as $post)
                <a class="{{$loop->even ? "Even" : "No"}}" href="/posts/<?= $post->slug; ?>">
                    <h2>{{ $post->title}}</h2></a>
                <p>
                    By <a href="/?author={{$post->author->username}}">{{$post->author->username}}</a> in <a href="/?category={{$post->category->slug}}">{{ $post->category->name }}</a>
                </p>

                <p>{{ $post->body }}</p>
            @endforeach
                {{ $posts->onEachSide(5)->links() }}
        @else
            <p>No result</p>
        @endif
    </x-slot>
</x-layout>

