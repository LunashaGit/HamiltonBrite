<x-layout>
    <x-slot name="title">
        Profile page
    </x-slot>
    <x-slot name="content">
        <h1>Profile page</h1>
        <p>Hey {{ auth()->user()->name }}</p>
        <img src="{{ gravatar(request()->user()->email) }}">
        <form method="post" action="/profile/delete/{{ request()->user()->id }}">
            @csrf
            @method('DELETE')
            <input type="submit" value="delete">
        </form>
    </x-slot>
</x-layout>
