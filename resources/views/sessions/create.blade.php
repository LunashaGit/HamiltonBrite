<x-layout>
    <x-slot name="title">
        Login Page
    </x-slot>
    <x-slot name="content">
        <section class="mx-auto my-12 flex justify-center  ">
            <div class="card mx-4 md:mx-6 lg:mx-8 md:flex bg-black text-white rounded-t-xl md:rounded-t-none md:rounded-l ">
                <div
                    class="sm:h-64 md:h-[18em] lg:h-[22em] lg:w-auto flex-none bg-cover text-center overflow-hidden">
                    <img class="object-cover h-full w-auto" src="/assets/bridge.jpg" alt="a picture of a bridge">
                </div>
                <div class="p-4 flex justify-between">
                    <form class="w-full mx-auto flex justify-center flex-col" method="POST" action="/login">
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

{{-- 
        <div class="p-10">
            <!--Card 1-->
            <div class=" w-full lg:max-w-full lg:flex">
              <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden">
                <img class="" src="/assets/bridge.jpg" alt="a picture of a bridge">

              </div>
              <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                <div class="mb-8">
                  <p class="text-sm text-gray-600 flex items-center">
                    <svg class="fill-current text-gray-500 w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                      <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
                    </svg>
                    Members only
                  </p>
                  <div class="text-gray-900 font-bold text-xl mb-2">Best Mountain Trails 2020</div>
                  <p class="text-gray-700 text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, Nonea! Maiores et perferendis eaque, exercitationem praesentium nihil.</p>
                </div>
                <div class="flex items-center">
                  <img class="w-10 h-10 rounded-full mr-4" src="/ben.png" alt="Avatar of Writer">
                  <div class="text-sm">
                    <p class="text-gray-900 leading-none">John Smith</p>
                    <p class="text-gray-600">Aug 18</p>
                  </div>
                </div>
              </div>
            </div>
          </div> --}}
    </x-slot>
</x-layout>
