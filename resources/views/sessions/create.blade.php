

<x-layout>
    <x-slot name="title">
        Login Page
    </x-slot>
    <x-slot name="content">
        <div>
            <h1>Login Page</h1>
            <form method="POST" action="/login">
                @csrf
                <div>
                    <input autocomplete="off" type="email" name="email" id="email" placeholder="email" required>
                    @error('email')
                    <p>{{$message}}</p>
                    @enderror
                </div>
                <div>
                    <input autocomplete="off" type="password" name="password" id="password" placeholder="password" required>
                    @error('password')
                    <p>{{$message}}</p>
                    @enderror
                </div>
                <input autocomplete="off" type="submit" value="Log in">
            </form>
            @if($errors->any())
                <ul>
                    @foreach($errors->all as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            @endif
        </div>
    </x-slot>
</x-layout>
