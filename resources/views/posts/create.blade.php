<x-layout>
    <section class="px-6 py-6">
        <x-panel class="max-w-sm mx-auto">
            <form action="/admin/posts" method="post">
                @csrf

                <div class="mb-6">
                    <label for="title" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Title
                    </label>

                    <input
                        type="text"
                        class="border border-gray-400 p-2 w-full"
                        name="title" id="title"
                    >

                    @error('title')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="slug" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Slug
                    </label>

                    <input
                        type="text"
                        class="border border-gray-400 p-2 w-full"
                        name="slug" id="slug"
                    >

                    @error('slug')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="excerpt" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Excerpt
                    </label>

                    <textarea
                        class="border border-gray-400 p-2 w-full"
                        name="excerpt"
                        id="excerpt"
                        required
                    ></textarea>

                    @error('excerpt')
                        <span class="text-sm text-red">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="body" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Body
                    </label>

                    <textarea
                        class="border border-gray-400 p-2 w-full"
                        name="body"
                        id="body"
                        required
                    ></textarea>

                    @error('body')
                        <span class="text-sm text-red">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="category_id" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Category
                    </label>

                    <select name="category_id" id="category_id">
                        @php
                            $categories = \App\Models\Category::all()
                        @endphp

                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ ucwords($category->name) }}</option>
                        @endforeach
                    </select>

                    @error('category')
                        <span class="text-sm text-red">{{ $message }}</span>
                    @enderror
                </div>

                <x-submit-button>Publish</x-submit-button>
            </form>
        </x-panel>
    </section>
</x-layout>
