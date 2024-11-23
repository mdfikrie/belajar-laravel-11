<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

    <article class='py-8 max-w-screen-md border-b border-gray-300'>
        <h2 class="mb-1 text-3xl tracking-tighter text-gray-900">{{ $title }}</h2>

        <div class="text-base text-gray-500">
            <a href="#">{{ $post['author'] }} | 23 November 2024</a>
        </div>
        <p class="my-4 font-light">
            {{ $post['body'] }}
        </p>
        <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Back to Post</a>
    </article>




</x-layout>
