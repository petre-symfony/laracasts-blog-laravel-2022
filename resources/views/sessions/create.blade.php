<x-layout>
    <section class="px-6 py-6">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl">Log In</h1>

            <form action="/login" method="post" class="mt-10">
                @csrf

                <x-form.input type="email" name="email"></x-form.input>

                <x-form.input type="password" name="password"></x-form.input>

                <x-form.button>Log In</x-form.button>
            </form>
        </main>
    </section>
</x-layout>
