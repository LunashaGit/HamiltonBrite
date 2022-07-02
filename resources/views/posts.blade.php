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
             <article class="bg-silver-blue mt-16 mb-8 mx-6 md:mx-12 rounded-xl relative">
                 <div class="custom-shape-divider-top-1655368457 rounded-xl">
                     <div>
                         <svg class="waves rounded-xl" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none"
                             shape-rendering="auto">
                             <defs>
                                 <path id="gentle-wave"
                                     d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                             </defs>
                             <g class="parallax">
                                 <use xlink:href="#gentle-wave" x="48" y="0"
                                     fill="rgba(255,255,255,0.7)" />
                                 <use xlink:href="#gentle-wave" x="48" y="3" fill="#506587" />
                                 <use xlink:href="#gentle-wave" x="48" y="5"
                                     fill="rgba(255,255,255,0.5)" />
                                 <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                             </g>
                         </svg>
                     </div>
                 </div>
                 <div class="font-black tracking-wider">
                     <h1 class="z-40 mt-2 mb-2 text-4xl para__text text-lightblue">Hamilton Brite</h1>
                     <h2 class="text-2xl para__text text-whiteish px-4">THE ONLY EVENT PLANNER YOU NEED</h2>
                     @auth()
                         @if (session()->has('Success'))
                             <div>
                                 <p class="pt-8 pb-4 text-3xl">{{ session('Success') . ' ' . request()->user()->name }}
                                 </p>
                             </div>
                         @endif
                     @endauth
                     <div id="select-container" class="flex flex-wrap text-sm justify-center py-4 px-2 md:px-24 mt-4">
                         @foreach ($categories as $category)
                             <a class="px-4 py-2 mx-1 text-sm md:text-base my-1 duration-100 ease-in-out cursor-pointer text-whiteish bg-gray-700 dark:bg-gray-800 hover:bg-gray-600 dark:hover:bg-gray-700 hover:scale-105 rounded-xl hover:duration-300"
                                 href="/?category={{ $category->slug }}">{{ $category->name }}</a>
                         @endforeach
                     </div>
                     <div class="flex items-center px-8 mx-auto pb-6 md:px-16 justify-left">
                         <form class="" method="GET" action="/">
                             <div class="form-group">
                                 <input type="text"
                                     class="text-black justify-center m-2 text-center border-2 border-solid rounded-lg md:p-1 w-36 md:w-64 border-lightblue"
                                     autocomplete="off" name="search" placeholder="Find Something"
                                     value="{{ request('search') }}">
                             </div>
                         </form>
                     </div>
                 </div>
             </article>
             @if (empty($_GET))
                 @if ($posts->count())
                     <div class="flex flex-col pb-24 mr-6 rounded-tr-xl rounded-br-xl bg-silver-blue sm:mr-12">
                         <div class="flex pb-4 pl-8 text-left">
                             <h2 class="pt-8 pb-8 pl-2 text-3xl font-bold text-white md:pl-4">Near your location :</h2>
                         </div>
                         <div
                             class="grid grid-cols-1 gap-4 md:px-4 mx-8 text-white sm:gap-8 md:gap-12 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5">
                             @foreach ($posts as $post)
                                 <div
                                     class="text-sm pb-6 w-72 md:w-56 mx-auto text-black rounded-xl cursor-pointer sm:w-64 overflow-hidden z-2 hover:scale-105 card hover:bg-gray-700 hover:text-whitesmoke hover:duration-300">

                                     <a class="{{ $loop->even ? 'Even' : 'No' }}" href="/posts/<?= $post->slug ?>">
                                         <div class="max-w-xs mb-2 rounded-lg shadow-lg">
                                             <img class="w-full max-h-64 rounded-t-xl"
                                                 src="/storage/images/{{ $post->image }}"
                                                 alt="Picture of the event : {{ $post->slug }}">
                                         </div>
                                         <div class="flex flex-col w-full">
                                             <div class="flex h-20 justify-center items-center">
                                                 <h2
                                                     class="justify-center w-48 overflow-ellipsis overflow-hidden flex flex-wrap text-lg font-bold lg:text-xl md:m-4 line-clamp-2">
                                                     {{ $post->title }}
                                                 </h2>
                                             </div>
                                             <div class="h-32">
                                                 <p
                                                     class="m-4 overflow-hidden overflow-ellipsis text-base lg:text-lg line-clamp-3">
                                                     {{ $post->body }}
                                                 </p>
                                             </div>
                                             <div class="flex flex-col place-content-end">
                                                 <div class="flex pl-4 pb-1 text-left justify-items-start"><svg
                                                         xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                         viewBox="0 0 20 20" fill="currentColor">
                                                         <path fill-rule="evenodd"
                                                             d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                             clip-rule="evenodd" />
                                                     </svg>
                                                     <h6 class=" pl-2">{{ $post->start_hour }}</h6>
                                                 </div>
                                                 <div class="flex pl-4 pb-1 text-left "><svg
                                                         xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                         viewBox="0 0 20 20" fill="currentColor">
                                                         <path fill-rule="evenodd"
                                                             d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                             clip-rule="evenodd" />
                                                     </svg>
                                                     <h6 class="pl-2 flex">{{ $post->date_start }}</h6>
                                                 </div>
                                                 <div class="flex pl-4 text-left justify-items-start"><svg
                                                         xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                         viewBox="0 0 20 20" fill="currentColor">
                                                         <path fill-rule="evenodd"
                                                             d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                                             clip-rule="evenodd" />
                                                     </svg>
                                                     <h6 class="line-clamp-1 pl-2 max-w-address">{{ $post->address }}
                                                     </h6>
                                                 </div>
                                             </div>
                                         </div>
                                     </a>
                                 </div>
                             @endforeach
                             {{-- {{ $posts->onEachSide(3)->links() }} --}}
                         @else
                             <p>No result</p>
                 @endif
             @else
                 <div class="flex flex-col pb-24 mr-6 rounded-tr-xl rounded-br-xl bg-newgrey sm:mr-12">
                     <div class="flex pb-4 pl-8 text-left">

                         <h2 class="pt-8 pb-4 pr-6 text-3xl font-bold text-right text-white md:pr-12 ">
                             @if (empty($_GET))
                                 Other Sections :
                             @else
                                 {{ $category->name }}
                             @endif
                         </h2>
                     </div>

                     <div
                         class="grid grid-cols-1 gap-4 md:px-4 mx-8 text-white sm:gap-8 md:gap-12 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5">
                         @foreach ($posts as $post)
                             <div
                                 class="xl:max-w-[1280px] text-sm pb-6 w-56 mx-auto text-black rounded-xl cursor-pointer sm:w-64 overflow-hidden z-2 hover:scale-105 card hover:bg-gray-700 hover:text-whitesmoke hover:duration-300    ">

                                 <a class="{{ $loop->even ? 'Even' : 'No' }}" href="/posts/<?= $post->slug ?>">
                                     <div class="max-w-xs mb-2 rounded-lg shadow-lg">
                                         <img class="w-full max-h-64 rounded-t-xl"
                                             src="/storage/images/{{ $post->image }}"
                                             alt="Picture of the event : {{ $post->slug }}">
                                     </div>
                                     <div class="flex flex-col w-full">
                                         <div class="flex h-20 justify-center items-center">
                                             <h2
                                                 class="justify-center w-48 overflow-ellipsis overflow-hidden flex flex-wrap text-lg font-bold lg:text-xl md:m-4 line-clamp-2">
                                                 {{ $post->title }}
                                             </h2>
                                         </div>
                                         <div class="h-32">
                                             <p
                                                 class="m-4 overflow-hidden overflow-ellipsis text-base lg:text-lg line-clamp-3">
                                                 {{ $post->body }}
                                             </p>
                                         </div>
                                         <div class="flex flex-col place-content-end">
                                             <div class="flex pl-4 pb-1 text-left justify-items-start"><svg
                                                     xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                     viewBox="0 0 20 20" fill="currentColor">
                                                     <path fill-rule="evenodd"
                                                         d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                         clip-rule="evenodd" />
                                                 </svg>
                                                 <h6 class=" pl-2">{{ $post->start_hour }}</h6>
                                             </div>
                                             <div class="flex pl-4 pb-1 text-left "><svg
                                                     xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                     viewBox="0 0 20 20" fill="currentColor">
                                                     <path fill-rule="evenodd"
                                                         d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                         clip-rule="evenodd" />
                                                 </svg>
                                                 <h6 class="pl-2 flex">{{ $post->date_start }}</h6>
                                             </div>
                                             <div class="flex pl-4 text-left justify-items-start"><svg
                                                     xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                     viewBox="0 0 20 20" fill="currentColor">
                                                     <path fill-rule="evenodd"
                                                         d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                                         clip-rule="evenodd" />
                                                 </svg>
                                                 <h6 class="line-clamp-1 pl-2 max-w-address">{{ $post->address }}
                                                 </h6>
                                             </div>
                                         </div>
                                     </div>
                                 </a>
                             </div>
                         @endforeach
             @endif
             </div>
         </section>
         @if (empty($_GET))
             <section>
                 <div class="pb-8 mb-16 ml-6 rounded-tl-xl rounded-bl-xl bg-gray-700 sm:ml-16">
                     <div class="text-left pr-8 mt-[-3em] pt-4  flex flex-col">
                         <h2 class="pt-8 pb-12 pr-6 text-3xl font-bold text-right text-white md:pr-12 ">
                             You might also like :
                         </h2>
                     </div>

                     <div
                         class="grid grid-cols-1 gap-4 md:px-4 mx-8 text-white sm:gap-8 md:gap-12 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5">
                         @foreach ($posts as $post)
                             <div
                             class="text-sm pb-6 w-72 md:w-56 mx-auto text-black rounded-xl cursor-pointer sm:w-64 overflow-hidden z-2 hover:scale-105 card hover:bg-gray-700 hover:text-whitesmoke hover:duration-300">

                                 <a class="{{ $loop->even ? 'Even' : 'No' }}" href="/posts/<?= $post->slug ?>">
                                     <div class="max-w-xs mb-2 rounded-lg shadow-lg">
                                         <img class="w-full max-h-64 rounded-t-xl"
                                             src="/storage/images/{{ $post->image }}"
                                             alt="Picture of the event : {{ $post->slug }}">
                                     </div>
                                     <div class="flex flex-col w-full">
                                         <div class="flex h-20 justify-center items-center">
                                             <h2
                                                 class="justify-center w-48 overflow-ellipsis overflow-hidden flex flex-wrap text-lg font-bold lg:text-xl md:m-4 line-clamp-2">
                                                 {{ $post->title }}
                                             </h2>
                                         </div>
                                         <div class="h-32">
                                             <p
                                                 class="m-4 overflow-hidden overflow-ellipsis text-base lg:text-lg line-clamp-3">
                                                 {{ $post->body }}
                                             </p>
                                         </div>
                                         <div class="flex flex-col place-content-end">
                                             <div class="flex pl-4 pb-1 text-left justify-items-start"><svg
                                                     xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                     viewBox="0 0 20 20" fill="currentColor">
                                                     <path fill-rule="evenodd"
                                                         d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                         clip-rule="evenodd" />
                                                 </svg>
                                                 <h6 class=" pl-2">{{ $post->start_hour }}</h6>
                                             </div>
                                             <div class="flex pl-4 pb-1 text-left "><svg
                                                     xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                     viewBox="0 0 20 20" fill="currentColor">
                                                     <path fill-rule="evenodd"
                                                         d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                         clip-rule="evenodd" />
                                                 </svg>
                                                 <h6 class="pl-2 flex">{{ $post->date_start }}</h6>
                                             </div>
                                             <div class="flex pl-4 text-left justify-items-start"><svg
                                                     xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                     viewBox="0 0 20 20" fill="currentColor">
                                                     <path fill-rule="evenodd"
                                                         d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                                         clip-rule="evenodd" />
                                                 </svg>
                                                 <h6 class="line-clamp-1 pl-2 max-w-address">{{ $post->address }}
                                                 </h6>
                                             </div>
                                         </div>
                                     </div>
                                 </a>
                             </div>
                         @endforeach
                     </div>
                 </div>
             </section>
         @endif
     </x-slot>
 </x-layout>
