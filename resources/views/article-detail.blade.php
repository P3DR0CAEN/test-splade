<x-layout>
    @seoTitle('Article ' . $article->id)

    <x-slot name="header">
        {{ __('Articles > ' . $article->title) }}
    </x-slot>

    <x-panel class="!p-0">
        <div class="relative aspect-video">
            <img src="{{ $article->image }}" alt="" class="object-cover w-full h-full">
            <div
                class="absolute p-6 px-12 text-xl font-bold -translate-x-1/2 -translate-y-1/2 bg-white top-1/2 left-1/2">
                {{ $article->title }}
            </div>
            <Link href="{{ route('articles') }}"
                class="absolute flex items-center justify-center w-12 text-2xl font-bold bg-white rounded-full aspect-square top-6 left-6">
            <i class="las la-angle-left"></i>
            </Link>
        </div>
        <div class="px-12 py-14">
            {{ $article->description }}
        </div>
    </x-panel>

</x-layout>
