<x-layout>
    <x-slot name="title">
        Register Page
    </x-slot>
    <x-slot name="content">
        <section class="pt-12 pb-24 bg-lightblue flex flex-col">
            <div
                class="flex flex-col md:flex-row mx-auto w-[70vw] xl:max-w-[60vw] bg-white rounded-lg border border-gray-200 shadow-md sm:p-6 lg:p-8 dark:bg-gray-800 dark:border-gray-700">
                <div class="flex float-right ">
                    <div
                        class=" bg-white rounded-lg flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <img class="object-cover h-full rounded-t-lg  md:rounded-none md:rounded-l-lg"
                            src="/assets/osaka.jpg" alt="">
                </div>
            </div>
            <article class="space-y-6 p-4 md:p-8">
                <form class="" action="/register" method="POST">
                    @csrf
                    <h2 class="text-xl pb-4 font-medium text-gray-900 dark:text-white">Register to our platform</h2>
                    <div>
                        <label for="name" class="block pt-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your name</label>
                            <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" autocomplete="off" type="text" name="name" id="name" placeholder="name" value="" required>
                        <label for="username" class="block pt-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your username</label>
                            <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" autocomplete="off" type="text" name="username" id="username" placeholder="username" value="" required>
                        <label for="email" class="block pt-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your
                            email</label>
                        <input type="email" name="email" id="email"
                            class="bg-gray-50 border  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="name@company.com" required="">
                        <label for="password"
                        class="block pt-2 mt-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your
                        password</label>
                    <input type="password" name="password" id="password" placeholder="••••••••"
                        class="bg-gray-50 border  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        required="">
                    <label for="password_confirm" class="block pt-2 text-sm font-medium text-gray-900 dark:text-gray-300">Password verification
                        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" autocomplete="off" type="password" name="password_confirm" id="password_confirm" placeholder="password confirmation" required>
                    </label>
                    </div>

                    <input type="submit" value="Create an account" class="w-full mt-8 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                </form>
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
                    <a href="" class="ml-auto text-sm text-blue-700 hover:underline dark:text-blue-500">Lost
                        Password?</a>
                </div>

                <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                    Already have an account? <a href="/login"
                                                class="text-blue-700 hover:underline dark:text-blue-500">Sign in to your account</a>
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
</x-layout>
