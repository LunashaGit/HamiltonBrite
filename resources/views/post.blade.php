
<x-layout>
    <x-slot name="title">
        {{$post->title}}
    </x-slot>
    <x-slot name="content">
        <style>
            #map { height: 20rem; width: 20rem; }
        </style>
        <h2>{{$post->title}} </h2>
        <p>
            By <a href="/?author={{$post->author->username}}">{{$post->author->username}}</a> in <a href="/?category={{$post->category->slug}}">{{ $post->category->name }}</a>
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
                @if(request()->user()->username == $post->author->username && request()->user()->id == $post->author->id)
                    <form method="POST" action="/posts/{{ $post->id }}/update ">
                        @method('put')
                        @csrf
                        <input autocomplete="off" type="text" name="title" id="title" placeholder="Title of post" value="{{$post->title}}" required>
                        <input autocomplete="off" type="text" name="excerpt" id="excerpt" placeholder="excerpt" value="{{$post->excerpt}}" required>
                        <input autocomplete="off" type="text" name="body" id="body" placeholder="body" value="{{$post->body}}" required>
                        <input type="date" id="date" name="date" min="2022-01-01" value="{{$post->date}}" required>
                        <input type="submit" value="send">
                    </form>
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
        <div id="map"></div>
        <script>
            var map = L.map('map').setView([<?= json_encode($post->latitude); ?>, <?= json_encode($post->longitude); ?>], 4);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            L.marker([<?= json_encode($post->latitude); ?>, <?= json_encode($post->longitude); ?>]).addTo(map)
                .bindPopup('<?= json_encode($post->title); ?>')
                .openPopup();
        </script>
    </x-slot>

</x-layout>

