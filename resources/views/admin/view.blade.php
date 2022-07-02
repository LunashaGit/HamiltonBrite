<x-layout>
    <x-slot name="title">
        Create Event Page
    </x-slot>
    <x-slot name="content">
        <div class="flex my-32 flex-col items-center">
        @foreach ($posts as $post)
            <div
                class="card my-6 w-96">

                <a class="{{ $loop->even ? 'Even' : 'No' }}" href="/posts/<?= $post->slug ?>">
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
                @auth()
                    @if(request()->user()->is_admin == 1)
                        <form method="POST" action="admin-view/posts/{{ $post->id }}/delete">
                            @csrf
                            @method('DELETE')
                            <input autocomplete="off" type="submit" value="Delete">
                        </form>
                    @endif
                @endauth
            </div>
        @endforeach
        </div>
    </x-slot>
</x-layout>
