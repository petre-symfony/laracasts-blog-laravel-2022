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

            <x-form.textarea name="body"></x-form.textarea>

            <div
                class="flex justify-end mt-6 pt-6 border-t
                    border-gray-200
                "
            >
                <x-form.button>Submit</x-form.button>
            </div>

        </form>
    </x-panel>
@else
    <p>
        <a href="/register" class="hover:underline">Register</a> or <a href="/login" class="hover:underline">Log in to leave a comment</a>
    </p>
@endauth
