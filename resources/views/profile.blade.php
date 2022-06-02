<x-layout>
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
                                                               
                            {{-- <h6 class="py-2 max-w-[10ch]">Account created the {{ request()->user()->created_at }} </h6> // Problème de display on voit date + heures sans séparations ni rien// --}}
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
</x-layout>

{{-- <form action="/profile/delete/{{ request()->user()->id }}">
    @csrf
    @method('DELETE')
    <input type="submit" value="delete">
</form>
<div class="flex justify-center py-8 ">
    <div class="justify-center w-64 px-4 text-white bg-black rounded-xl align-center">
        <img class="mx-auto my-2" src="{{ gravatar(request()->user()->email) }}">
        <p>Name : {{ auth()->user()->name }} </p>
        <p>Email : {{ auth()->user()->email }}</p>
        <div class="flex justify-center mx-auto my-4">
            <p class="flex px-4 py-0 mx-0 my-2 text-left">Name:</p>
            <input placeholder="{{ auth()->user()->name }}" class="px-2 mx-2 text-gray-900 rounded-lg">
        </div>
        <div class="flex justify-center mx-auto my-4">
            <p class="flex justify-center px-4 py-0 mx-0 my-2 text-center">Email:</p>
            <input placeholder="{{ auth()->user()->email }}" class="px-2 mx-2 text-gray-900 rounded-lg">
        </div>
        <div class="flex justify-center mx-auto my-4">
            <p class="flex justify-center px-4 py-0 mx-0 my-2 text-center">Password:</p>
            <input placeholder="{{ auth()->user()->password }}" class="px-2 mx-2 text-gray-900 rounded-lg">
        </div>
        <div class="flex justify-center mx-auto my-4">
            <p class="flex justify-center px-4 py-0 mx-0 my-2 text-center">Confirmation:</p>
            <input placeholder="{{ auth()->user()->email }}" class="px-2 mx-2 text-gray-900 rounded-lg">
        </div>
    </div>
</div> --}}
