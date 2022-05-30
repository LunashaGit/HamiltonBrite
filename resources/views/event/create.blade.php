<x-layout>
    <x-slot name="title">
        Create Event
    </x-slot>
    <x-slot name="content">
        <div>
            <h1>Create Event</h1>
            <form method="POST" action="/event">
                @csrf
                <div>
                    <select name="category_id">
                        @foreach($categories as $category)
                            <option  value="{{ $category->id }}"> {{ $category->id }} {{ $category->name }} </option>
                        @endforeach
                    </select>
                </div>
                <input autocomplete="off" type="text" name="title" id="title" placeholder="Title of post" required>
                <input autocomplete="off" type="text" name="excerpt" id="excerpt" placeholder="excerpt" required>
                <input autocomplete="off" type="text" name="body" id="body" placeholder="body" required>
                <input type="date" id="date" name="date" min="2022-01-01" required>
                <input autocomplete="off" type="submit" value="Create Post">
            </form>
            @if($errors->any())
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            @endif
        </div>
    </x-slot>
</x-layout>
