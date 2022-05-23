
<x-layout>
    <x-slot name="title">
        {{$post->title}}
    </x-slot>
    <x-slot name="content">
        <h2>{{$post->title}} </h2>
        <p>
            By <a href="/?author={{$post->author->username}}">{{$post->author->username}}</a><a href="/?category={{$post->category->slug}}">{{ $post->category->name }}</a>
        </p>
        <h6>{{$post->date}}</h6>
        <p>{{$post->body}}</p>
        @auth()
            @if($post->participation->where('user_id', request()->user()->id) == "[]")
                <form method="POST" action="/posts/{{ $post->slug }}/participation/">
                    @csrf
                    <input autocomplete="off" type="submit" value="Participate">
                </form>
            @else
                <p>Already Participate</p>
            @endif
            <form method="POST" action="/posts/{{ $post->slug }}">
                @csrf
                <div>
                    <input autocomplete="off" type="text" name="comment" id="comment" placeholder="comment  " value="{{ old('name') }}" required>
                </div>
                <input autocomplete="off" type="submit" value="send">
            </form>
        @endauth
        @foreach($post->comments as $comment)
            <p>{{ $comment->author->username }}</p>
            <p>{{ $comment->created_at }}</p>
            <p>{{ $comment->comment }}</p>
            @if($comment->author->id == auth()->id())
                <form method="POST" action="/comments/{{$comment->id}}">
                    @csrf
                    @method('DELETE')
                    <input autocomplete="off" type="submit" value="Delete">
                </form>
            @endif
        @endforeach
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
        <a href="/">Go Back</a>
    </x-slot>
</x-layout>

