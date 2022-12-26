@auth
    <x-panel>
        <form
            action="/posts/{{ $post->slug }}/comments"
            method="post"
        >
            @csrf

            <header class="flex items-center">
                <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}" alt="" width="40" heught="40" class="rounded-full ">
                <h2 class="ml-4">Want to participate?</h2>
            </header>

            <div class="mt-6">
                <textarea
                    name="body"
                    id="body"
                    class="w-full focus:outline-none focus:ring"
                    placeholder="Quick, think of something to say"
                    cols="30" rows="5" required
                ></textarea>

                @error('body')
                <span class="text-sm text-red">{{ $message }}</span>
                @enderror

            </div>
            <div
                class="flex justify-end mt-6 pt-6 border-t
                    border-gray-200
                "
            >
                <button
                    type="submit"
                    class="bg-blue-500 text-white uppercase
                        font-semibold text-xs py-2 px-10 rounded-2xl
                        hover:bg-blue-600
                    "
                >
                    Post
                </button>
            </div>

        </form>
    </x-panel>
@else
    <p>
        <a href="/register" class="hover:underline">Register</a> or <a href="/login" class="hover:underline">Log in to leave a comment</a>
    </p>
@endauth
