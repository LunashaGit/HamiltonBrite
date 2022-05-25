

<x-layout>
    <x-slot name="title">
        Register Page
    </x-slot>
    <x-slot name="content">
            <div>
{{--                <div class=" absolute flex">--}}
{{--                    <img class="w-24 h-auto  relative object-cover" src="/assets/bridge.jpg" alt="picture of a bridge">--}}
{{--                </div>--}}
                <h1 class="my-2 text-3xl font-bold text-white">Register</h1>

                <form class="my-4" method="POST" action="/register">
                    @csrf
                    <div class="my-2">
                        <input autocomplete="off" type="text" name="name" id="name" placeholder="name" value="{{ old('name') }}" required>
                    </div>
                    <div class="my-2">
                        <input autocomplete="off" type="text" name="username" id="username" placeholder="Username" required>
                    </div>
                    <div class="my-2">
                        <input autocomplete="off" type="email" name="email" id="email" placeholder="email" required>

                    </div>
                    <div class="my-2">
                        <input autocomplete="off" type="password" name="password" id="password" placeholder="password" required>

                    </div>
                    <div class="my-2">
                        <input autocomplete="off" type="password" name="password_confirm" id="password" placeholder="password confirmation" required>
                    </div>
                    <input class="text-xl font-semibold text-white" autocomplete="off" type="submit" value="send">
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
