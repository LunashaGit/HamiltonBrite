<x-layout>
    <x-slot name="title">
        Create Event Page
    </x-slot>
    <x-slot name="content">
        @foreach ($posts as $post)
            <div
                class="card rounded-lg mx-auto max-w-sm transition text-black hover:bg-gray-800 hover:text-white duration-100 ease-in-out hover:duration-500 cursor-pointer justify-between bg-whitesmoke">

                <a class="{{ $loop->even ? 'Even' : 'No' }}" href="/posts/<?= $post->slug ?>">
                    <div class=" ">
                        <img class="w-full max-h-48  object-cover bg-center rounded-t-lg"
                             src="/storage/images/{{ $post->image }}" alt="Picture of a bridge">
                    </div>
                    <h2 class=" text-lg lg:text-xl justify-center font-bold m-2 md:m-4 line-clamp-2">
                        {{ $post->title }}
                    </h2>
                    <p class=" overflow-hidden text-sm lg:text-md line-clamp-3 m-4">
                        {{ $post->body }}
                    </p>
                    <div class="flex justify-between pb-4">
                        <div class=" pl-2 md:pl-4 text-sm md:text-md">
                            <h6 class=" ">{{ $post->date_start }}</h6>
                            <h6 class="">{{ $post->start_hour }}</h6>
                        </div>
                        <div class="pr-2 md:pr-4 text-sm md:text-md">
                            <h6 class="">{{ $post->address }}</h6>
                        </div>
                    </div>
                </a>
            </div>
            @auth()
                @if(request()->user()->is_admin == 1)
                    <form method="POST" action="admin-view/posts/{{ $post->id }}/delete">
                        @csrf
                        @method('DELETE')
                        <input autocomplete="off" type="submit" value="Delete">
                    </form>
                @endif
            @endauth
        @endforeach
    </x-slot>
</x-layout>
