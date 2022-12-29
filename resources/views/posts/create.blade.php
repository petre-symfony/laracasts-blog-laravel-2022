<x-layout>
    <section class="py-6 max-w-md mx-auto">
        <h1 class="text-lg font-bold mb-6">Publish New Post</h1>

        <form action="/admin/posts" method="post" enctype="multipart/form-data">
            @csrf

            <x-form.input name="title"></x-form.input>

            <x-form.input name="slug"></x-form.input>

            <x-form.input name="thumbnail" type="file"></x-form.input>


            <div class="mb-6">
                <label for="excerpt" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                    Excerpt
                </label>

                <textarea
                    class="border border-gray-400 p-2 w-full"
                    name="excerpt"
                    id="excerpt"
                    required
                >{{ old('excerpt') }}</textarea>

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
                >{{ old('body') }}</textarea>

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
                        <option
                            value="{{ $category->id }}"
                            {{ old('category_id') == $category->id ? 'selected' : ''}}
                        >{{ ucwords($category->name) }}</option>
                    @endforeach
                </select>

                @error('category')
                    <span class="text-sm text-red">{{ $message }}</span>
                @enderror
            </div>

            <x-submit-button>Publish</x-submit-button>
        </form>
    </section>
</x-layout>
