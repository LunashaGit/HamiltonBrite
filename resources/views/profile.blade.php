<x-layout>
    <x-slot name="title">
        Profile page
    </x-slot>
    <x-slot name="content">
        <section class="profile flex flex-col">


            <div class="flex justify-center pb-2 pt-8 font-bold">
                <div
                    class=" card justify-center align-center text-left flex flex-col rounded-lg duration-100 ease-in-out hover:duration-500">
                    <div class="flex justify-center">
                        <h1 class="justify-center py-4 text-3xl font-semibold ">
                            Your Profile
                        </h1>
                    </div>
                    <div class="my-2 flex">
                        <form class="profile__form py-4 mx-4 flex flex-col" method="post"
                            action="/profile/update/{{ request()->user()->id }}">
                            @csrf
                            @method('PUT')
                            <div class="">
                                <img class="mx-auto my-2 rounded-[50px]"
                                    src="{{ gravatar(request()->user()->email) }}">
                            </div>

                            <label class="pb-2 pt-4">Username :</label>
                            <input class="mx-2 px-2 rounded-md" type="text" name="username" id="username"
                                placeholder="username" value="{{ request()->user()->username }}">

                            <label class="pb-2 pt-6">Name :</label>
                            <input class="mx-2 px-2 rounded-md" type="text" name="name" id="name" placeholder="name"
                                value="{{ request()->user()->name }}">

                                <label class="pb-2 pt-6">Email :</label>
                            <input class="mx-2 px-2 rounded-md" type="email" name="email" id="email" placeholder="email"
                                value="{{ request()->user()->email }}">

                            <label class="pb-2 pt-6">Password :</label>
                            <input class="mx-2 px-2 rounded-md" type="password" name="password" id="password"
                                value="***********">

                            <label class="pb-2 pt-6">Password Confirmation :</label>
                            <input class="mx-2 px-2 rounded-md" type="password" name="passwordconfirm" id="passwordconfirm"
                                value="">

                            {{-- <h6 class="py-2 max-w-[10ch]">Account created the {{ request()->user()->created_at }} </h6> // Problème de display on voit date + heures sans séparations ni rien// --}}
                            <div class="py-2 my-2 mx-auto relative flex justify-around">
                                <div
                                    class="absolute flex text-lg justify-around mx-auto ">
                                    <a class="">
                                        <input class="font-black my-2 py-1 px-2 hover:transition hover:duration-200 hover:text-green-700 hover:cursor-pointer " type="submit" value="Update"></a>
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
                            <a class="hover:transition text-sm hover:duration-200 hover:text-red-700 hover:cursor-pointer">
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
