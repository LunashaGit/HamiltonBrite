<x-layout>
    <x-slot name="title">
        Profile page
    </x-slot>
    <x-slot name="content">
        <h1>Profile page</h1>
        <p>Hey {{ auth()->user()->name }}</p>
        <img src="{{ gravatar(request()->user()->email) }}">
    </x-slot>
</x-layout>
