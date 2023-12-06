<x-layout>
    <x-slot name="header">
        {{ __('Home') }}
    </x-slot>

    <x-panel class="flex flex-col items-center pt-16 pb-16">
        <x-application-logo class="block w-auto h-12" />

        <div class="mt-8 text-2xl">
            Welcome to your Splade application!
        </div>
    </x-panel>
</x-layout>
