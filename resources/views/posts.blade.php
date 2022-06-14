 <x-layout>
     <x-slot name="title">
         Home
     </x-slot>
     <x-slot name="content">
         <section class="h-[35rem] sm:h-[40rem] md:h-[45rem]">
             <div id="parallax" class="h-full mx-auto bg-center bg-cover parallax bg-concert">
             </div>
         </section>
         <section class="main">
             <article class=" ">
                 <div class="bg-lightgrey dark:bg-newgrey pt-6">
                     <div class="font-black tracking-wider">
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
                     <div id="select-container" class="flex flex-wrap text-sm justify-center p-2 mt-4">
                         @foreach ($categories as $category)
                             <a class="px-4 py-1 mx-2 my-2 duration-100 ease-in-out cursor-pointer text-white bg-gray-600 dark:bg-slate hover:scale-110 rounded-xl hover:duration-300"
                                 href="/?category={{ $category->slug }}">{{ $category->name }}</a>
                         @endforeach
                     </div>
                     <div class="flex items-center px-8 mx-auto pb-6 mb-16 md:px-16 justify-left">
                         <form class="" method="GET" action="/">
                             <div class="form-group">
                                 <input type="text"
                                     class="justify-center m-3 text-center border-2 border-solid rounded-lg md:p-1 md:w-64 border-lightblue"
                                     autocomplete="off" name="search" placeholder="Find Something"
                                     value="{{ request('search') }}">
                             </div>
                         </form>
                     </div>
                 </div>
             </article>
             @if ($posts->count())
                 <div class="flex flex-col pb-24 mr-6 rounded-tr-lg rounded-br-lg bg-newgrey sm:mr-12">
                     <div class="flex pt-4 pl-8 text-left">
                         <h2 class="pt-8 pb-4 pl-2 text-4xl font-bold text-white md:pl-4 ">Happening Soon</h2>
                     </div>
                     <div
                         class="grid grid-cols-1 gap-4 px-4 mx-8 text-white sm:gap-8 md:gap-12 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5">
                         @foreach ($posts as $post)
                             <div
                                 class="justify-between xl:max-w-[1280px] text-sm pb-6 w-64 mx-auto text-black rounded-lg cursor-pointer sm:w-56 card hover:bg-gray-800 hover:text-white hover:duration-300 bg-whitesmoke">

                                 <a class="{{ $loop->even ? 'Even' : 'No' }}" href="/posts/<?= $post->slug ?>">
                                     <div class="">
                                         <img class="object-cover w-full h-48 rounded-t-lg"
                                             src="/storage/images/{{ $post->image }}"
                                             alt="Picture of the event : {{ $post->slug }}">
                                     </div>
                                     <h2 class="justify-center m-2 text-lg font-bold lg:text-xl md:m-4 line-clamp-2">
                                         {{ $post->title }}
                                     </h2>
                                     <p class="m-4 overflow-hidden text-sm lg:text-md line-clamp-3">
                                         {{ $post->body }}
                                     </p>
                                     <div class="flex pl-4 pb-1 text-left justify-items-start"><svg
                                             xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                             viewBox="0 0 20 20" fill="currentColor">
                                             <path fill-rule="evenodd"
                                                 d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                 clip-rule="evenodd" />
                                         </svg>
                                         <h6 class=" pl-2">{{ $post->start_hour }}</h6>
                                     </div>
                                     <div class="flex pl-4 pb-1 text-left justify-items-start"><svg
                                             xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                             viewBox="0 0 20 20" fill="currentColor">
                                             <path fill-rule="evenodd"
                                                 d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                 clip-rule="evenodd" />
                                         </svg>
                                         <h6 class="pl-2">{{ $post->date_start }}</h6>
                                     </div>
                                     <div class="flex pl-4 text-left justify-items-start"><svg
                                             xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                             viewBox="0 0 20 20" fill="currentColor">
                                             <path fill-rule="evenodd"
                                                 d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                                 clip-rule="evenodd" />
                                         </svg>
                                         <h6 class="line-clamp-1 pl-2 max-w-address">{{ $post->address }}</h6>
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
                     class="grid grid-cols-1 gap-4 px-4 mx-8 text-white sm:gap-8 md:gap-12 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5">
                     @foreach ($posts as $post)
                         <div
                             class="justify-between xl:max-w-[1280px] pb-6 text-sm w-64 mx-auto text-black rounded-lg cursor-pointer sm:w-56 card hover:bg-gray-700 hover:text-white hover:duration-300 bg-whiteish">
                             <a class="{{ $loop->even ? 'Even' : 'No' }}" href="/posts/<?= $post->slug ?>">
                                 <div class="">
                                     <img class="object-cover w-full h-48 bg-center rounded-t-lg"
                                         src="/storage/images/{{ $post->image }}" alt="Picture of a bridge">
                                 </div>
                                 <h2 class="justify-center m-2 text-lg font-bold lg:text-xl md:m-4 line-clamp-2">
                                     {{ $post->title }}
                                 </h2>
                                 <p class="m-4 overflow-hidden lg:text-md line-clamp-3">
                                     {{ $post->body }}
                                 </p>
                                 <div class="flex pl-4 pb-1 text-left justify-items-start"><svg
                                         xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                         fill="currentColor">
                                         <path fill-rule="evenodd"
                                             d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                             clip-rule="evenodd" />
                                     </svg>
                                     <h6 class=" pl-2">{{ $post->start_hour }}</h6>
                                 </div>
                                 <div class="flex pl-4 pb-1 text-left justify-items-start"><svg
                                         xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                         fill="currentColor">
                                         <path fill-rule="evenodd"
                                             d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                             clip-rule="evenodd" />
                                     </svg>
                                     <h6 class="pl-2">{{ $post->date_start }}</h6>
                                 </div>
                                 <div class="flex pl-4 text-left justify-items-start"><svg
                                         xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                         fill="currentColor">
                                         <path fill-rule="evenodd"
                                             d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                             clip-rule="evenodd" />
                                     </svg>
                                     <h6 class="line-clamp-1 pl-2 max-w-address">{{ $post->address }}</h6>
                                 </div>
                             </a>
                         </div>
                     @endforeach
                 </div>
             </div>
         </section>
     </x-slot>
 </x-layout>