 <x-layout>
     <x-slot name="title">
         Posts

     </x-slot>
     <x-slot name="content">

         <section class="top">


             <div id="parallax" class="opacity-30 mx-auto parallax w-[100vw] h-auto">

             </div>

         </section>

         <section class="main">
             <div class="text-white font-black tracking-wider">
                 <h1 class="para__text text-4xl my-6 ">Hamilton Brite</h1>
                 <h2 class="para__text text-2xl ">THE ONLY EVENT PLANNER YOU NEED</h2>
             </div>
             <div class="mx-auto my-5 flex px-8 md:px-16 justify-left items-center">
                 <div class="">
                     <select class="rounded-lg md:p-1">
                         <option>--</option>
                         <option class="pl-1 py-1">Art</option>
                         <option class="pl-1 py-1">Cinema</option>
                         <option class="pl-1 py-1">Politics</option>
                         <option class="pl-1 py-1">Ta mère</option>



                     </select>
                 </div>
                 <form class="" method="GET" action="/">
                     <div class="form-group">
                         <input type="text" class="justify-center m-3 md:p-1 md:w-64  text-center rounded-lg"
                             autocomplete="off" name="search" placeholder="Find Something"
                             value="{{ request('search') }}">

                     </div>

                 </form>
             </div>
             @auth()
                 @if (session()->has('success'))
                     <div>
                         <p class="text-3xl">{{ session('success') . ' ' . request()->user()->name }}</p>
                     </div>
                 @endif
             @endauth
             @if ($posts->count())
                 <div
                     class=" text-white grid grid-cols-1 gap-4 p-5 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-8 m-2">

                     @foreach ($posts as $post)
                         <div class="flex">
                             <div
                                 class="transition hover:text-black hover:bg-white duration-100 ease-in-out hover:duration-500 cursor-pointer justify-between bg-black rounded shadow-lg">
                                 <a class="{{ $loop->even ? 'Even' : 'No' }}" href="/posts/<?= $post->slug ?>">
                                     <img class="object-fill " src="/assets/bridge.jpg" alt="Picture of a bridge">
                                     <h2 class=" text-lg lg:text-xl justify-center font-bold m-4 line-clamp-2">
                                         {{ $post->title }}
                                     </h2>
                                     <p class=" overflow-hidden text-sm lg:text-md line-clamp-3 m-4">
                                         {{ $post->body }}
                                     </p>
                                     <div class="flex justify-between pb-4">
                                         <div class=" pl-6 md:pl-4 text-sm md:text-md">
                                             <h6 class=" ">31/08/22</h6>
                                             <h6 class="">à 17h22</h6>
                                         </div>
                                         <div class="pr-6 md:pr-4 text-sm md:text-md">
                                             <h6 class="">Liège</h6>
                                             <h6 class="">Le carré</h6>
                                         </div>
                                     </div>
                                 </a>
                             </div>
                         </div>
                     @endforeach
                 </div>

                 {{ $posts->onEachSide(3)->links() }}
             @else
                 <p>No result</p>
             @endif


         </section>

     </x-slot>
 </x-layout>












 {{-- <x-layout>
    <x-slot name="title">
        Posts
    </x-slot>
    <x-slot name="content">
        <div class="mx-auto my-5">
            <form class="" method="GET" action="/">
                <div class="form-group">
                    <input type="text"
                           class="justify-center m-3 text-center rounded-lg"
                           autocomplete="off"
                           name="search"
                           placeholder="Find Something"
                           value="{{ request('search') }}">
                </div>
            </form>
        </div>
        @auth()
        @if (session()->has('success'))
            <div>
                <p class="text-3xl">{{ session('success') . " " . request()->user()->name  }}</p>
            </div>
        @endif
        @endauth
g        @if ($posts->count())
            <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-7">

                @foreach ($posts as $post)
                    <div class="relative flex justify-center text-gray-900 align-center">
                        <div class="bg-gray-700 w-45 lg:w-60 dark:bg-gray-200">
                            <div class="justify-between h-full font-bold text-md lg:text-lg">
                                <a class="{{$loop->even ? "Even" : "No"}}" href="/posts/<?= $post->slug ?>">
                                    <div class="w-1/2">
                                    <img class="object-cover w-full h-full" src="/assets/mrpickles.jpg"
                                         alt="image of mr. pickles">
                                    </div>
                                    <h2 class="line-clamp-2">{{ $post->title}}</h2>
                                    </a>

                                <p class="m-2 mb-8 line-clamp-2">{{ $post->body }}</p>
                                <a class="px-2 py-2 mx-auto mt-auto text-white bg-green-700 rounded-lg">See More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{ $posts->onEachSide(3)->links() }}

        @else
            <p>No result</p>
        @endif
    </x-slot>
</x-layout> --}}
