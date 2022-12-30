<x-layout>
    <section class="px-6 py-6">
        <main class="max-w-lg mx-auto mt-10">
            <x-panel>
                <h1 class="text-center font-bold text-xl">Register!</h1>
                <form action="/register" method="post" class="mt-10">
                    @csrf

                    <x-form.input name="name"></x-form.input>

                    <x-form.input name="username"></x-form.input>

                    <x-form.input name="email" type="email" autocomplete="username"></x-form.input>

                    <x-form.input name="password" type="password" autocomplete="new-password"></x-form.input>

                    <x-form.button>Register</x-form.button>
                </form>
            </x-panel>
        </main>
    </section>
</x-layout>
