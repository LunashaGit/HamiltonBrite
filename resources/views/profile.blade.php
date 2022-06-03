{{-- <x-layout>
    <x-slot name="title">
        Profile page
    </x-slot>
    <x-slot name="content">
        <section class="flex flex-col profile">


            <div class="flex justify-center pt-8 pb-2 font-bold ">
                <div
                    class="flex flex-col justify-center px-8 text-left duration-100 ease-in-out rounded-lg card md:px-24 align-center hover:duration-500">
                    <div class="flex justify-center">
                        <h1 class="justify-center py-4 text-3xl font-semibold text-whitesmoke">
                            My profile
                        </h1>
                    </div>
                    <div class="flex my-2">
                        <form class="flex flex-col py-4 mx-4 profile__form" method="post"
                            action="/profile/update/{{ request()->user()->id }}">
                            @csrf
                            @method('PUT')
                            <div class="">
                                <img class="mx-auto my-2 rounded-[50px]"
                                    src="{{ gravatar(request()->user()->email) }}">
                            </div>

                            <label class="pt-4 pb-2 text-whitesmoke">Username :</label>
                            <input class="px-2 mx-2 rounded-md" type="text" name="username" id="username"
                                placeholder="username" value="{{ request()->user()->username }}">

                            <label class="pt-6 pb-2 text-whitesmoke">Name :</label>
                            <input class="px-2 mx-2 rounded-md" type="text" name="name" id="name" placeholder="name"
                                value="{{ request()->user()->name }}">

                                <label class="pt-6 pb-2 text-whitesmoke">Email :</label>
                            <input class="px-2 mx-2 rounded-md" type="email" name="email" id="email" placeholder="email"
                                value="{{ request()->user()->email }}">

                            <label class="pt-6 pb-2 text-whitesmoke">Password :</label>
                            <input class="px-2 mx-2 rounded-md" type="password" name="password" id="password"
                                value="***********">

                            <label class="pt-6 pb-2 text-whitesmoke">Password Confirmation :</label>
                            <input class="px-2 mx-2 rounded-md" type="password" name="passwordconfirm" id="passwordconfirm"
                                value="">
                                <label class="pt-4 pb-2 text-whitesmoke">My bio :</label>
                                <textarea placeholder="About me"class="box-border flex justify-start px-2 py-12 mx-2 rounded-md resize-none">
                                </textarea>
                                                               
                            <div class="flex py-2 my-2relative ">
                                <div
                                    class="absolute flex text-xl text-whitesmoke">
                                    <a class="">
                                        <input class="px-2 py-1 my-2 font-black hover:transition hover:duration-200 hover:text-green-600 hover:cursor-pointer " type="submit" value="Update"></a>
                                </div>
                            </div>
                        </form>


                    </div>
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
                </div>
            </div>

        </section>
    </x-slot>
</x-layout> --}}

<x-layout>
    <x-slot name="title">
        My profile
    </x-slot>
    <x-slot name="content">
        <section class="pt-12 pb-24 bg-lightblue flex flex-col">
            <div
                class="flex flex-col md:flex-row mx-auto max-w-[80vw] xl:max-w-[60rem] bg-white rounded-lg border border-gray-200 shadow-md sm:p-6 lg:p-8 dark:bg-gray-800 dark:border-gray-700">
                <div class="flex float-right ">
                    <div
                        class=" bg-white rounded-lg flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <img class="object-cover h-full rounded-t-lg md:rounded-none md:rounded-l-lg"
                            src="/assets/osaka.jpg" alt="">
                    </div>
                </div>
                <article class="space-y-6 p-4 md:p-8 text-left text-md md:w-[30 rem]">
                    <form class="" method="post"
                    action="/profile/update/{{ request()->user()->id }}">
                    @csrf
                    @method('PUT')
                    <div class="">
                        <img class="mx-auto my-2 rounded-[50px]"
                            src="{{ gravatar(request()->user()->email) }}">
                    </div>                        
                        <h2 class="text-xl flex justify-center pb-4 font-medium text-gray-800 dark:text-white">My profile</h2>
                        <div>

                            <label for="username"
                                class="block pt-4 pb-2 font-medium text-gray-800 dark:text-gray-300">Username</label>
                            <input
                                class="bg-gray-50 border border-gray-300 text-gray-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                autocomplete="off" type="text" name="username" id="username" placeholder="username"
                                value="{{ request()->user()->username }}" required>

                            <label for="lastname"
                                class="block pt-4 pb-2 font-medium text-gray-800 dark:text-gray-300">Last name</label>
                            <input
                                class="bg-gray-50 border border-gray-300 text-gray-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                autocomplete="off" type="text" name="lastname" id="lastname" placeholder="name" value="{{ request()->user()->lastname }}"
                                required>

                                <label for="firstname"
                                class="block pt-4 pb-2 font-medium text-gray-800 dark:text-gray-300">First Name</label>
                            <input
                                class="bg-gray-50 border border-gray-300 text-gray-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                autocomplete="off" type="text" name="firstname" id="firstname" placeholder="name" value="{{ request()->user()->firstname }}"
                                required>

                            <label for="email"
                                class="block pt-4 pb-2 font-medium text-gray-800 dark:text-gray-300">Email</label>
                            <input type="email" name="email" id="email"
                                class="bg-gray-50 border  border-gray-300 text-gray-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="name@company.com" required="" value="{{ request()->user()->email }}">

                            <label for="password"
                                class="block pt-4 pb-2 mt-2 font-medium text-gray-800 dark:text-gray-300">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••"
                                class="bg-gray-50 border  border-gray-300 text-gray-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                required="">

                            <label for="password_confirm"
                                class="block pt-4 pb-2 font-medium text-gray-800 dark:text-gray-300">Password
                                confirmation</label>

                                <input
                                    class="bg-gray-50 border border-gray-300 text-gray-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    autocomplete="off" type="password" name="password_confirm" id="password_confirm"
                                    placeholder="password confirmation" required>

                            <label class="block pt-4 pb-2 font-medium text-gray-800 dark:text-gray-300">My bio :</label>
                            <textarea placeholder="About me" value="{{request()->user()->bio }}" 
                            class="p-2 box-border resize-none bg-gray-50 border border-gray-300 text-gray-800 text-sm h-40 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                        </textarea>

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
                            @foreach ($errors->all as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                </article>
        </section>

    </x-slot>
</x-layout>
