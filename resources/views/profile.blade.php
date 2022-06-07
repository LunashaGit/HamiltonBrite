<x-layout>
    <x-slot name="title">
        My profile
    </x-slot>
    <x-slot name="content">
        <section class="flex flex-col pt-12 pb-24 bg-lightblue">
            <div
                class="flex flex-col md:flex-row mx-auto max-w-[80vw] xl:max-w-[60rem] bg-white rounded-lg border border-gray-200 shadow-md sm:p-6 lg:p-8 dark:bg-gray-800 dark:border-gray-700">
                <div class="flex float-right ">
                    <div
                        class="flex-row bg-white rounded-lg md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <img class="object-cover h-full rounded-t-lg md:rounded-none md:rounded-l-lg"
                            src="/assets/osaka.jpg" alt="">
                    </div>
                </div>
                <article class="space-y-6 p-4 md:p-8 text-left text-md md:w-[30rem]">
                    <form class="" method="POST"
                    action="/profile/update/{{ request()->user()->id }}">
                    @csrf
                    @method('PUT')
                    <div class="img-preview">
                        <img class="mx-auto my-2 rounded-[50px]"
                            src="{{ gravatar(request()->user()->email) }}">
                        <input type="file" accept="image/*" id="choose file" name="choose file">
                        <label for="choose-file">Choose File</label>
 
                    </div>
                        <h2 class="flex justify-center pb-4 text-xl font-medium text-gray-800 dark:text-white">My profile</h2>
                        <div>

                            <label for="username"
                                class="block pt-4 pb-2 font-medium text-gray-800 dark:text-gray-300">Username</label>
                            <input
                                class="bg-gray-50 border border-gray-300 text-gray-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                autocomplete="off" type="text" name="username" id="username" placeholder="username"
                                value="{{ request()->user()->username }}">

                            <label for="lastname"
                                class="block pt-4 pb-2 font-medium text-gray-800 dark:text-gray-300">Last name</label>
                            <input
                                class="bg-gray-50 border border-gray-300 text-gray-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                autocomplete="off" type="text" name="lastname" id="lastname" placeholder="name" value="{{ request()->user()->lastname }}">

                                <label for="firstname"
                                class="block pt-4 pb-2 font-medium text-gray-800 dark:text-gray-300">First Name</label>
                            <input
                                class="bg-gray-50 border border-gray-300 text-gray-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                autocomplete="off" type="text" name="firstname" id="firstname" placeholder="name" value="{{ request()->user()->firstname }}">

                            <label for="email"
                                class="block pt-4 pb-2 font-medium text-gray-800 dark:text-gray-300">Email</label>
                            <input type="email" name="email" id="email"
                                class="bg-gray-50 border  border-gray-300 text-gray-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="name@company.com" value="{{ request()->user()->email }}">

                            <label for="password"
                                class="block pt-4 pb-2 font-medium text-gray-800 dark:text-gray-300">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••"
                                class="bg-gray-50 border  border-gray-300 text-gray-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">

                            <label for="password_confirm"
                                class="block pt-4 pb-2 font-medium text-gray-800 dark:text-gray-300">Password
                                confirmation</label>

                                <input
                                    class="bg-gray-50 border border-gray-300 text-gray-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    autocomplete="off" type="password" name="password_confirm" id="password_confirm"
                                    placeholder="Password confirmation">

                            <label class="block pt-4 pb-2 font-medium text-gray-800 dark:text-gray-300">My bio :</label>
                            <textarea placeholder="About me" rows="5" cols="40" name="bio" id="bio" value="{{request()->user()->bio }}" 
                            class="box-border block w-full h-40 text-sm text-gray-800 border border-gray-300 rounded-lg resize-none bg-gray-50 focus:ring-blue-500 p-2.5 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">{{ request()->user()->bio  }}</textarea>
                        </div>

                        <input type="submit" value="Update informations"
                            class="w-full mt-8 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    </form>
                    <div
                    class="p-4">
                    <form class="flex float-right"
                    method="post"
                        action="/profile/delete/{{ request()->user()->id }}">
                        @csrf
                        @method('DELETE')
                        <a class="text-sm hover:transition hover:duration-200 text-whitesmoke hover:text-red-600 hover:cursor-pointer">
                        <input class="" type="submit" value="delete">
                    </a>
                    </form>
                </div>
                    @if ($errors->any())
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                </article>
        </section>

        <script src="ressources/js/preview-image.js"></script>
    </x-slot>
</x-layout>
