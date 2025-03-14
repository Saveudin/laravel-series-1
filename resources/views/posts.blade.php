<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @foreach ($posts as $post)

        <article class="py-8 max-w-screen-md border-b border-gray-300">

        <a href="/posts/{{ $post['id'] }}" class="hover:underline">
            <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
        </a>
        <div class="text-base text-gray-500">
            <a href="#">{{ $post['author'] }}</a> | 13 March 2025
        </div>
        <p class="my-4 font-light">{{ Str::limit($post['body'], 80) }}</p>
        <a href="/posts/{{ $post['id'] }}" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>
        </article>

    @endforeach

    

    {{-- <article class="py-8 max-w-screen-md border-b border-gray-300">

        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">Judul artikel 1</h2>
        <div class="text-base text-gray-500">
            <a href="#">Misono Mika</a> | 13 March 2025
        </div>
        <p class="my-4 font-light">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore, ipsam distinctio temporibus officia repellat autem. Quos dolore doloribus ex, nulla consectetur tempora sint cum pariatur quia aspernatur, minus aut ratione!</p>
        <a href="" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>
    </article>

    <article class="py-8 max-w-screen-md border-b border-gray-300">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">Judul artikel 2</h2>
        <div class="text-base text-gray-500">
            <a href="#">Misono Mika</a> | 14 March 2025
        </div>
        <p class="my-4 font-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint recusandae eveniet consequatur quaerat, iusto sunt vel possimus doloremque esse, dignissimos quisquam iure consectetur odit dolorem. Repellendus quia accusantium est numquam?</p>
        <a href="" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>
    </article> --}}

</x-layout>