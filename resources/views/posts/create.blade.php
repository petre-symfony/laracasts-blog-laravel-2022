<x-layout>
    <section class="py-6 max-w-md mx-auto">
        <h1 class="text-lg font-bold mb-6">Publish New Post</h1>

        <form action="/admin/posts" method="post" enctype="multipart/form-data">
            @csrf

            <x-form.input name="title"></x-form.input>

            <x-form.input name="slug"></x-form.input>

            <x-form.input name="thumbnail" type="file"></x-form.input>

            <x-form.textarea name="excerpt"></x-form.textarea>

            <x-form.textarea name="body"></x-form.textarea>

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
