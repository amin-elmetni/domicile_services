    <a href="/search/{{ $category->nom() }}"
        class="w-40 h-36 flex flex-col items-center justify-center gap-2 bg-primary bg-opacity-15 p-8 rounded-xl cursor-pointer hover:scale-110  hover:bg-opacity-25 transition-all ease-in-out">
        <img src="/categories/{{ $category->icon() }}" alt="icon" width="45" height="45">
        <h2 class="font-medium text-primary">{{ Str::ucfirst($category->nom()) }}</h2>
    </a>

    {{-- {{ $category->color() }} --}}
