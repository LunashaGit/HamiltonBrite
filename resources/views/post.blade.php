
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
        <a href="/">Go Back</a>
    </x-slot>
</x-layout>

