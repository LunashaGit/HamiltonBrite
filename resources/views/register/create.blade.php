

<x-layout>
    <x-slot name="title">
        Register Page
    </x-slot>
    <x-slot name="content">
            <div>
                <h1>Register Page</h1>
                <form method="POST" action="/register">
                    @csrf
                    <div>
                        <input autocomplete="off" type="text" name="name" id="name" placeholder="name" value="{{ old('name') }}" required>
                    </div>
                    <div>
                        <input autocomplete="off" type="text" name="username" id="username" placeholder="Username" required>

                    </div>
                    <div>
                        <input autocomplete="off" type="email" name="email" id="email" placeholder="email" required>

                    </div>
                    <div>
                        <input autocomplete="off" type="password" name="password" id="password" placeholder="password" required>

                    </div>
                    <div>
                        <input autocomplete="off" type="password" name="password_confirm" id="password" placeholder="password confirmation" required>
                    </div>
                    <input autocomplete="off" type="submit" value="send">
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
