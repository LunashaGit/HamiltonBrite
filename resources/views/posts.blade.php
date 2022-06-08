 <x-layout>
     <x-slot name="title">
         Home
     </x-slot>
     <x-slot name="content">
         <section class="h-[25rem] sm:h-[30rem] md:h-[35rem]">
             <div id="parallax" class="h-full mx-auto bg-center bg-cover parallax bg-concert">
             </div>
         </section>

         <section class="main">
             <div class="font-black tracking-wider ">
                 <h1 class="mt-8 mb-2 text-4xl para__text text-lightblue ">Hamilton Brite</h1>
                 <h2 class="text-2xl para__text ">THE ONLY EVENT PLANNER YOU NEED</h2>
             </div>
             @auth()
                 @if (session()->has('Success'))
                     <div>
                         <p class="pt-8 pb-4 text-3xl">{{ session('Success') . ' ' . request()->user()->name }}</p>
                     </div>
                 @endif
             @endauth
             <div class="flex items-center px-8 mx-auto my-5 md:px-16 justify-left">
                 <form class="" method="GET" action="/">
                     <div class="form-group">
                         <input type="text"
                             class="justify-center m-3 text-center border-2 border-solid rounded-lg md:p-1 md:w-64 border-lightblue"
                             autocomplete="off" name="search" placeholder="Find Something"
                             value="{{ request('search') }}">
                     </div>
                 </form>
             </div>

             <section id="select-container" class="flex flex-wrap justify-center p-4 mb-4">
                 @foreach ($categories as $category)
                     <a class="px-4 py-1 mx-2 my-2 duration-100 ease-in-out cursor-pointer bg-lightblue hover:bg-gray-800 hover:text-lightblue rounded-xl hover:duration-500"
                         href="/?category={{ $category->slug }}">{{ $category->name }}</a>
                 @endforeach
             </section>
             @if ($posts->count())
                 <div class="flex flex-col pb-24 mr-6 rounded-tr-lg rounded-br-lg bg-lightblue sm:mr-12">
                     <div class="flex pt-4 pl-8 text-left">
                         <h2 class="pt-8 pb-4 pl-2 text-4xl font-bold text-white md:pl-4 ">Happening Soon</h2>
                     </div>
                     <div
                         class="grid grid-cols-1 gap-4 px-4 mx-8 text-white sm:gap-8 md:gap-12 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5">
                         @foreach ($posts as $post)
                             <div
                                 class="justify-between xl:max-w-[1280px]  w-64 mx-auto text-black transition duration-100 ease-in-out rounded-lg cursor-pointer sm:w-56 card hover:bg-gray-800 hover:text-white hover:duration-500 bg-whitesmoke">

                                 <a class="{{ $loop->even ? 'Even' : 'No' }}" href="/posts/<?= $post->slug ?>">
                                     <div class="">
                                         <img class="object-cover w-full h-48 rounded-t-lg"
                                             src="/storage/images/{{ $post->image }}" alt="Picture of a bridge">
                                     </div>
                                     <h2 class="justify-center m-2 text-lg font-bold lg:text-xl md:m-4 line-clamp-2">
                                         {{ $post->title }}
                                     </h2>
                                     <p class="m-4 overflow-hidden text-sm lg:text-md line-clamp-3">
                                         {{ $post->body }}
                                     </p>
                                     <div class="flex justify-between pb-4">
                                         <div class="pl-2 text-sm md:pl-4 md:text-md">
                                             <h6 class="">{{ $post->date_start }}</h6>
                                             <h6 class="">{{ $post->start_hour }}</h6>
                                         </div>
                                         <div class="pr-2 text-sm md:pr-4 md:text-md">
                                             <h6 class="">{{ $post->address }}</h6>
                                         </div>
                                     </div>
                                 </a>
                             </div>
                         @endforeach
                         {{-- {{ $posts->onEachSide(3)->links() }} --}}
                     @else
                         <p>No result</p>
             @endif

             </div>
         </section>
         <section>
             <div class="pb-8 mb-16 ml-6 rounded-tl-lg rounded-bl-lg bg-silver-blue sm:ml-16">
                 <div class="text-left pr-8 mt-[-3em] pt-4  flex flex-col">
                     <h2 class="pt-8 pb-4 pr-6 text-4xl font-bold text-right text-white md:pr-12 ">Art</h2>
                 </div>

                 <div
                     class="grid grid-cols-1 gap-4 px-16 text-white sm:gap-8 md:gap-12 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5 ">


                     @foreach ($posts as $post)
                         <div
                             class="justify-between w-56 mx-auto text-black transition duration-100 ease-in-out rounded-lg cursor-pointer 2xl:w-[17rem] md:w-64 card hover:bg-gray-800 hover:text-white hover:duration-500 bg-whitesmoke">

                             <a class="{{ $loop->even ? 'Even' : 'No' }}" href="/posts/<?= $post->slug ?>">
                                 <div class="">
                                     <img class="object-cover w-full h-48 bg-center rounded-t-lg"
                                         src="/storage/images/{{ $post->image }}" alt="Picture of a bridge">
                                 </div>
                                     <h2 class="justify-center m-2 text-lg font-bold lg:text-xl md:m-4 line-clamp-2">
                                         {{ $post->title }}
                                     </h2>
                                     <p class="m-4 overflow-hidden text-sm lg:text-md line-clamp-3">
                                         {{ $post->body }}
                                     </p>
                                     <div class="flex justify-between pb-4">
                                         <div class="pl-2 text-sm md:pl-4 md:text-md">
                                             <h6 class="">{{ $post->date_start }}</h6>
                                             <h6 class="">{{ $post->start_hour }}</h6>
                                         </div>
                                         <div class="pr-2 text-sm md:pr-4 md:text-md">
                                             <h6 class="">{{ $post->address }}</h6>
                                         </div>
                                     </div>
                             </a>
                         </div>
                     @endforeach
                 </div>
             </div>
         </section>


         <footer class="w-full h-64 text-center text-white bg-gray-800">
             <div class="py-4 mx-auto my-auto ">
                 <ul class="float-left pl-8">
                     <li>Github Luna</li>
                     <li>Linked-in Luna</li>
                 </ul>
                 <ul class="float-right pr-8">
                     <li>Github Jerry</li>
                     <li>Linked-in Jerry</li>
                 </ul>
             </div>
         </footer>
     </x-slot>
 </x-layout>
