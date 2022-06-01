 <x-layout>
     <x-slot name="title">
         Posts

     </x-slot>
     <x-slot name="content">

         <section class="h-64 sm:h-80 md:h-[30rem]">
             <div id="parallax" class="parallax bg-concert mx-auto parallax bg-cover h-full  bg-center  ">
                 <div class=""></div>
             </div>
         </section>

         <section class="main">
             <div class="font-black tracking-wider ">
                 <h1 class="para__text text-4xl mt-8 mb-2 text-lightblue ">Hamilton Brite</h1>
                 <h2 class="para__text text-2xl ">THE ONLY EVENT PLANNER YOU NEED</h2>
             </div>
             <div class="mx-auto my-5 flex px-8 md:px-16 justify-left items-center">


                 <form class="" method="GET" action="/">

                     <div class="form-group">
                         <input type="text" class="justify-center m-3 md:p-1 md:w-64 border-solid border-2 border-lightblue text-center rounded-lg"
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
                 <div class="bg-lightblue pb-24 mr-6 sm:mr-12 rounded-tr-lg rounded-br-lg flex flex-col">
                     <div class="flex text-left pl-8 pt-4">
                         <h2 class="text-4xl font-bold pl-2 md:pl-4 pt-8 pb-4 text-white ">Happening Soon</h2>
                     </div>
                     <div
                         class="text-white gap-4 sm:gap-8 md:gap-12 px-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 mx-8 ">

                         @foreach ($posts as $post)
                             <div
                                 class="max-h-sm card rounded-lg mx-auto max-w-sm transition text-black hover:bg-black hover:text-white duration-100 ease-in-out hover:duration-500 cursor-pointer justify-between bg-whitesmoke">

                                 <a class="{{ $loop->even ? 'Even' : 'No' }}" href="/posts/<?= $post->slug ?>">
                                     <div class=" ">
                                         <img class="w-full object-cover bg-center rounded-t-lg" src="/assets/buildings.jpg"
                                             alt="Picture of a bridge">
                                     </div>
                                     <h2 class=" text-lg lg:text-xl justify-center font-bold m-2 md:m-4 line-clamp-2">
                                         {{ $post->title }}
                                     </h2>
                                     <p class=" overflow-hidden text-sm lg:text-md line-clamp-3 m-4">
                                         {{ $post->body }}
                                     </p>
                                     <div class="flex justify-between pb-4">
                                         <div class=" pl-2 md:pl-4 text-sm md:text-md">
                                             <h6 class=" ">31/08/22</h6>
                                             <h6 class="">à 17h22</h6>
                                         </div>
                                         <div class="pr-2 md:pr-4 text-sm md:text-md">
                                             <h6 class="">Liège</h6>
                                             <h6 class="">Le carré</h6>
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
    <div class="bg-silver-blue ml-6 sm:ml-16 rounded-tl-lg rounded-bl-lg mb-16 pb-8">
                 <div class="text-left pr-8 mt-[-3em] pt-4  flex flex-col">
                     <h2 class="text-4xl font-bold pr-6 md:pr-12 text-white pt-8 pb-4 text-right ">Art</h2>
                 </div>

                 <div
                     class="text-white gap-4 sm:gap-8 md:gap-12 px-16 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 ">


                     @foreach ($posts as $post)
                         <div
                         class="max-h-sm card rounded-lg mx-auto max-w-sm transition text-black hover:bg-black hover:text-white duration-100 ease-in-out hover:duration-500 cursor-pointer justify-between bg-whitesmoke">

                             <a class="{{ $loop->even ? 'Even' : 'No' }}" href="/posts/<?= $post->slug ?>">
                                 <div class="max-h-48 ">
                                     <img class="w-full max-h-48 object-cover bg-center rounded-t-lg" src="/assets/manathan.jpg"
                                         alt="Picture of a bridge">
                                 </div>
                                 <div class="flex flex-col">
                                 <h2 class=" text-lg lg:text-xl justify-center font-bold m-2 md:m-4 line-clamp-2">
                                     {{ $post->title }}
                                 </h2>
                                 <p class=" overflow-hidden text-sm lg:text-md line-clamp-3 m-4">
                                     {{ $post->body }}
                                 </p>
                                 <div class="flex justify-between pb-4">
                                     <div class=" pl-2 md:pl-4 text-sm md:text-md">
                                         <h6 class=" ">31/08/22</h6>
                                         <h6 class="">à 17h22</h6>
                                     </div>
                                     <div class="pr-2 md:pr-4 text-sm md:text-md">
                                         <h6 class="">Liège</h6>
                                         <h6 class="">Le carré</h6>
                                     </div>
                                 </div>
                                </div>
                             </a>
                         </div>
                     @endforeach
                 </div>
             </div>
            </section>

             {{-- <div class="bg-pourpre ml-6 sm:ml-16 rounded-tl-lg rounded-bl-lg">
                <div class="text-left pr-8 mt-[-3em] pt-4  flex flex-col">
                    <h2 class="text-4xl font-bold pl-2 md:pl-6 pb-8 text-black text-right ">Comedy</h2>
                </div>
             </div> --}}
     </x-slot>
 </x-layout>
