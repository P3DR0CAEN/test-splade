<x-layout>

    @seoTitle('Laravel Splade Course')

    <x-slot name="header">
        {{ __('Docs') }}
    </x-slot>

    <x-panel>
        <h1 class="text-2xl">Hi developer!</h1>
        <p class="mt-2 text-lg">You'll find the docs at <a target="_blank" class="underline"
                href="https://splade.dev/docs">splade.dev/docs</a></p>
    </x-panel>
</x-layout>
