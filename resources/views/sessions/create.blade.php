<x-layout>
    <x-slot name="title">
        Login Page
    </x-slot>
    <x-slot name="content">
        <section class="p-4 m4">
        <div>
            <h1>Login Page</h1>
            <form class="p-4 m-4" method="POST" action="/login">
                @csrf
                <div class="p-4 m-4">
                    <input autocomplete="off" type="email" name="email" id="email" placeholder="email" required>
                    @error('email')
                    <p>{{$message}}</p>
                    @enderror
                </div>
                <div class="p-4 m-4">
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
        </section>
    </x-slot>
</x-layout>
