<x-layout>
    <x-slot name="title">
        Register
    </x-slot>
    <x-slot name="content">
        <section class="flex flex-col pt-36 pb-24 bg-silver dark:bg-silver-blue">
            <div
                class="flex flex-col md:flex-row mx-auto max-w-[80vw] xl:max-w-[60rem] rounded-lg border shadow-md sm:p-6 lg:p-8 bg-gray-700 dark:bg-gray-800 border-gray-700">
                <div class="flex float-right ">
                    <div
                        class="flex-rowrounded-lg md:max-w-xl  ">
                        <img class="object-cover h-full rounded-t-lg md:rounded-none md:rounded-l-lg"
                            src="/assets/osaka.jpg" alt="">
                    </div>
                </div>
                <article class="p-4 space-y-6 text-left text-md md:p-8">
                    <form class="" action="/register" method="POST">
                        @csrf
                        <h2 class="flex justify-center pb-8 text-2xl text-white">Register to our platform</h2>
                        <div>
                            <label for="username"
                                class="block pt-4 pb-2 text-gray-300">Username</label>
                            <input
                                class="text-sm border  rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  bg-gray-600  border-gray-500  placeholder-gray-400  text-white"
                                autocomplete="off" type="text" name="username" id="username" placeholder="Username"
                                value="" required>

                            <label for="lastname"
                                class="block pt-4 pb-2 text-gray-300">Last name</label>
                            <input
                                class="text-sm  border   rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  bg-gray-600  border-gray-500  placeholder-gray-400  text-white"
                                autocomplete="off" type="text" name="lastname" id="lastname" placeholder="Last Name" value=""
                                required>

                            <label for="firstname"
                                class="block pt-4 pb-2 text-white">First Name</label>
                            <input
                                class="text-sm border rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  bg-gray-600  border-gray-500  placeholder-gray-400  text-white"
                                autocomplete="off" type="text" name="firstname" id="firstname" placeholder="First Name" value=""
                                required>
                            <label for="email"
                                class="block pt-4 pb-2 text-gray-300">Email</label>
                            <input type="email" name="email" id="email"
                                class="text-sm  border   rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  bg-gray-600  border-gray-500  placeholder-gray-400  text-white"
                                placeholder="name@company.com" required="">
                            <label for="password"
                                class="block pt-4 pb-2 text-white">Password</label>
                            <input type="password" name="password" id="password" placeholder="Password"
                                class="text-sm border rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  bg-gray-600  border-gray-500  placeholder-gray-400  text-white"
                                required="">
                            <label for="password_confirm"
                                class="block pt-4 pb-2 text-gray-300">Password
                                verification
                            </label>
                            <input
                                class="text-sm border rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  bg-gray-600  border-gray-500  placeholder-gray-400  text-white"
                                autocomplete="off" type="password" name="password_confirm" id="password_confirm"
                                placeholder="Password confirmation" required>
                        </div>

                        <input type="submit" value="Create an account"
                            class="w-full mt-8 text-white focus:ring-4 focus:outline-none rounded-lg text-sm px-5 py-2.5 text-center  bg-blue-600  hover:bg-blue-700  focus:ring-blue-800">
                    </form>
                    @if ($errors->any())
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="flex items-start">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="remember" type="checkbox" value=""
                                    class="w-4 h-4 border rounded focus:ring-3 bg-gray-700  border-gray-600  focus:ring-blue-600  ring-offset-gray-800">
                            </div>
                            <label for="remember"
                                class="ml-1 text-sm text-gray-300">Remember
                                me</label>
                        </div>
                        <a href="" class="ml-auto text-sm hover:underline text-blue-500">Lost
                            Password?</a>
                    </div>

                    <div class="text-sm    text-gray-300">
                        Already have an account? <a href="/login"
                            class="pr-2 hover:underline text-blue-500">Sign in to your account</a>
                    </div>
        </section>

    </x-slot>
</x-layout>
