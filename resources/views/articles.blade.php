<x-layout>
    @seoTitle('Articles')

    <x-slot name="header">
        {{ __('Articles') }}
    </x-slot>

    <x-panel class="flex flex-col items-center pt-16 pb-16">
        <x-application-logo class="block w-auto h-12" />

        <div class="mt-8 mb-8 text-3xl font-bold">
            Articles
        </div>
        <div class="flex w-full gap-12">
            @foreach ($articles as $article)
                <Link href="{{ route('article.detail', ['id' => $article->id]) }}"
                    class="relative block flex-1 aspect-[9/12] border border-black group hover:cursor-pointer">
                <img src="{{ $article->image }}" alt="" class="object-cover w-full h-full">
                <div
                    class="absolute bottom-0 left-0 w-full py-6 text-center bg-gradient-to-t from-white from-20% to-transparent font-bold text-lg group-hover:from-50% group-hover:pt-12 transition-all">
                    {{ $article->title }}
                </div>
                </Link>
            @endforeach
        </div>

    </x-panel>
</x-layout>
