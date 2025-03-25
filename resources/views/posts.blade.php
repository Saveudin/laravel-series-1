<x-layout>
        <div class="sticky top-0 translate-y-4 z-50">
          <!-- Start coding here -->
          <div class="relative shadow-md max-w-2xl bg-white sm:rounded-lg mx-auto">
            <div class="flex flex-col items-center justify-between p-4">
              <div class="mx-auto w-3/4">
                <form class="flex items-center gap-2">
                  <label for="simple-search" class="sr-only">Search</label>
                  <div class="relative w-full">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                      <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                      </svg>
                    </div>
                    <input type="text" id="simple-search" class="block w-full p-2 pl-10 text-sm text-gray-00 border border-gray-300 rounded-lg bg-gray-50 focus:ring-primary-500 focus:border-primary-500" placeholder="Search" required="">
                  </div>
                  <button type="submit" class="flex items-center justify-center px-4 py-2 text-sm font-medium text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                    Search
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>


    <div class="bg-white py-24 sm:py-32 relative -translate-y-18">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
          <div class="mx-auto max-w-2xl lg:mx-0">
            <h2 class="text-4xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-5xl">
                {{ $title }}</h2> 
            <p class="mt-2 text-lg/8 text-gray-600">Learn how to grow your business with our expert advice.</p>
          </div>
          <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-4 gap-y-8 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
        @foreach ($posts as $post)
            <article class="flex max-w-xl flex-col items-start justify-between border-1 border-gray-300 rounded-lg p-6 sm:p-8">
              <div class="flex items-center gap-x-4 text-xs">
                <time datetime="2020-03-16" class="text-gray-500">{{ $post['created_at']->diffForHumans() }}</time>
                <a href="category/{{ $post->category->id }}" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">{{ $post->category->name }}</a>
              </div>
              <div class="group relative">
                <h3 class="mt-3 text-lg/6 font-semibold text-gray-900 group-hover:text-gray-600">
                  <a href="posts/{{ $post['id'] }}">
                    <span class="absolute inset-0"></span>
                    {{ $post['title'] }}
                  </a>
                </h3>
                <p class="mt-5 line-clamp-3 text-sm/6 text-gray-600">{{Str::limit($post['body'], 80) }}</p>
              </div>
              <div class="relative mt-8 flex items-center gap-x-4">
                <img src={{ $post->author->img }} alt="" class="size-10 rounded-full bg-gray-50">
                <div class="text-sm/6">
                  <p class="font-semibold text-gray-900">
                    <a href="#">
                      <span class="absolute inset-0"></span>
                      {{ $post->author->name }}
                    </a>
                  </p>
                  <p class="text-gray-600">{{ $post->author->email }}</p>
                </div>
              </div>
            </article>
            @endforeach
          </div>
        </div>
      </div>

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