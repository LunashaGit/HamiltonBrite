{{-- <x-layout>
    <x-slot name="title">
        Login Page
    </x-slot>
    <x-slot name="content">
        <section class="h-screen">
            <div class="h-full text-white rounded-t-xl md:rounded-t-none md:rounded-l ">
                <div
                    class="flex max-w-[50%] float-left bg-cover text-center overflow-hidden bg-bridge">
                </div>
                <div class="flex justify-between mx-auto">
                    <form class="flex flex-col" method="POST" action="/login">
                        @csrf

                        <div class="flex flex-col justify-left py-4 items-start">
                            <h1 class="mx-auto ">Login</h1>

                            <label class="pb-2 pt-4">E-mail :</label>

                            <input class="w-64  px-4 rounded-md" autocomplete="off" type="email" name="email" id="email" placeholder="email" required>
                            @error('email')
                                <p>{{ $message }}</p>
                            @enderror
                            <label class="pb-2 pt-4">Password :</label>

                            <input class="w-64 px-4 rounded-md" autocomplete="off" type="password" name="password" id="password"
                                placeholder="password" required>
                            @error('password')
                                <p>{{ $message }}</p>
                            @enderror
                            <input class="my-4 px-4 cursor-pointer hover:transition hover:duration-200 hover:text-green-700" autocomplete="off" type="submit" value="Go">
                        </div>
                    </form>
                </div>
            </div>
            @if ($errors->any())
                <ul>
                    @foreach ($errors->all as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </section>

    </x-slot>
</x-layout> --}}
<x-layout>
    <x-slot name="title">
        Login Page
    </x-slot>
    <x-slot name="content">
        <section class="pt-12 pb-24 bg-lightblue">
            <div
                class="flex flex-col md:flex-row mx-auto p-4 max-w-[70vw] xl:w-[60vw] bg-white rounded-lg border border-gray-200 shadow-md sm:p-6 lg:p-8 dark:bg-gray-800 dark:border-gray-700">
                <div class="flex float-left ">
                    <a href="#"
                        class=" bg-white rounded-lg md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <img class="object-cover h-full rounded-t-lg  md:rounded-none md:rounded-l-lg"
                            src="/assets/street.jpg" alt="">
                </div>
                <form class="space-y-6 p-4 md:p-8" action="/login" method="POST">
                    @csrf
                    <h5 class="text-xl pb-4 font-medium text-gray-900 dark:text-white">Sign in to our platform</h5>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-900 dark:text-gray-300">Your
                            email</label>
                        <input type="email" name="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="name@company.com" required="">
                        @error('email')
                            <p>{{ $message }}</p>
                        @enderror
              
                        <label for="password"
                            class="block mt-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your
                            password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            required="">
                        @error('password')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex items-start">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="remember" type="checkbox" value=""
                                    class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800">
                            </div>
                            <label for="remember"
                                class="ml-1 text-sm font-medium text-gray-900 dark:text-gray-300">Remember
                                me</label>
                        </div>
                        <a href="#" class="ml-auto text-sm text-blue-700 hover:underline dark:text-blue-500">Lost
                            Password?</a>
                    </div>
                    <button type="submit"
                        class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login
                        to your account</button>
                    <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                        Not registered? <a href="/register"
                            class="text-blue-700 hover:underline dark:text-blue-500">Create
                            account</a>
                    </div>
                </form>
            </div>
            </a>

            @if ($errors->any())
                <ul>
                    @foreach ($errors->all as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </section>

    </x-slot>
</x-layout>
