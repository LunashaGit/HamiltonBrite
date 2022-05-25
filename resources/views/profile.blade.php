<x-layout>
    <x-slot name="title">
        Profile page
    </x-slot>
    <x-slot name="content">
        <div class="py-64">
            <h1 class="flex justify-center py-8 text-3xl font-semibold ">
                Your Profile
            </h1>
        </div>


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
        </div>
    </x-slot>
</x-layout>
