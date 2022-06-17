<x-layout>
    <x-slot name="title">
        Login
    </x-slot>
    <x-slot name="content">
        <section class="pt-36 pb-24 bg-silver dark:bg-silver-blue">
            <div
                class="flex flex-col md:flex-row mx-auto p-4 w-[90vw] xl:max-w-[60rem] my-auto rounded-lg border shadow-md sm:p-6 lg:p-8  bg-gray-800 border-gray-700">
                <div class="flex float-left ">
                    <a href="#"
                        class="rounded-lg md:flex-row md:max-w-xl">
                        <img class="object-cover h-full rounded-t-lg md:rounded-none md:rounded-l-lg"
                            src="/assets/london.jpg" alt="">
                </div>
                <form class="p-4 space-y-6 md:p-8 md:mt-[5rem]" action="/login" method="POST">
                    @csrf
                    <h5 class="pb-8 text-xl font-medium text-white">Sign in to our platform</h5>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-300 pb-1">Your
                            email</label>
                        <input type="email" name="email" id="email"
                            class="border text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400 text-white"
                            placeholder="name@company.com" required="">
                        @error('email')
                            <p class="py-4 text-white">{{ $message }}</p>
                        @enderror
              
                        <label for="password"
                            class="block mt-2 text-sm font-medium text-gray-300 pb-1">Your
                            password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••"
                            class="border text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400 text-white"
                            required="">
                        @error('password')
                            <p class="py-4 text-white">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex items-start">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="remember" type="checkbox" value=""
                                class="w-4 h-4 border rounded focus:ring-3 bg-gray-700  border-gray-600  focus:ring-blue-600  ring-offset-gray-800">
                            </div>
                            <label for="remember"
                                class="pr-2 ml-1 text-sm font-medium text-gray-300 bg-gray-700 dark:bg-gray-800">Remember
                                me</label>
                        </div>
                        <a href="#" class="ml-auto text-sm hover:underline text-blue-500">Lost
                            Password?</a>
                    </div>
                    <button type="submit"
                        class="w-full text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">Login
                        to your account</button>
                    <div class="text-sm font-medium text-gray-300">
                        Not registered? <a href="/register"
                            class="ml-auto hover:underline text-blue-500">Create
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
