@foreach ($post->comments as $comment)
    <div class="flex pt-4">
        @csrf
        @auth
            <div
                class="w-[90vw] md:w-1/2 bg-lightgrey dark:bg-gray-600 p-2 pt-4 mx-auto rounded shadow-lg text-black dark:text-white">
                <div class="flex ml-2">
                    <div id="container" class="block md:flex w-16 h-16 md:w-24 md:h-24">
                        <img id="img-preview" class="rounded-full h-full w-full"
                            src="../storage/images/{{ request()->user()->profile_picture }}">

                    </div>
                    <div class="px-4 my-auto">

                        <h1 class="font-semibold">{{ request()->user()->username }}</h1>
                    </div>

                </div>

                <div class="mt-3 p-3 w-full ">
                    <form method="POST" action="/posts/{{ $post->slug }}">
                        @csrf
                        <input autocomplete="off" type="text" name="comment" id="comment"
                            value="{{ $comment->comment }}" required rows="3"
                            class="border p-2 rounded w-full text-black">

                   
                @if ($errors->any())
                    <ul>
                     @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                 @endforeach
                     </ul>
                  @endif
                </form>
                @if ($comment->author->id == auth()->id())
                <form method="POST" action="/comments/{{ $comment->id }}">
                    @csrf
                    @method('DELETE')
                    <input autocomplete="off" type="submit" value="Delete">
                </form>
            @endif
    @endforeach
             </div>

        </div>

    </div>
