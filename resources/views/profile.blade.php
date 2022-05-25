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
        <form method="post" action="/profile/update/{{ request()->user()->id }}">
            @csrf
            @method('PUT')
            <input type="text" name="username" id="username" placeholder="username" value="{{ request()->user()->username  }}">
            <input type="text" name="name" id="name" placeholder="name" value="{{request()->user()->name}}">
            <input type="email" name="email" id="email" placeholder="email" value="{{ request()->user()->email  }}">
            <input type="password" name="password" id="password" value="***********">
            <input type="password" name="passwordconfirm" id="passwordconfirm" value="">
            <input type="submit" value="update">
        </form>
    </x-slot>
</x-layout>
