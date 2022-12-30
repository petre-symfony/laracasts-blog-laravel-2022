@props(['heading'])

<section class="py-6 max-w-md mx-auto">
    <h1 class="text-lg font-bold mb-6">{{ $heading }}</h1>

    <div class="flex">
        <aside>
            <ul>
                <li>
                    <a href="/admin/posts/create">New Post</a>
                </li>
            </ul>
        </aside>

        <main>
            <x-panel>
                {{ $slot }}
            </x-panel>
        </main>
    </div>
</section>
