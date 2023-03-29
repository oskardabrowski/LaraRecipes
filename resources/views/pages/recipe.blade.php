<x-body>
    <x-nav />
    <div class="w-100 d-flex align-items-center justify-content-center" style="height: 100vh;">
        <div class="d-flex flex-column justify-content-center align-items-center" style="">
            <img style="width: 25rem;" src="/storage/{{ $recipe['image'] }}" alt="image" />
            <h1>{{ $recipe['title'] }}</h1>
            <h2>{{ $recipe['type'] }}</h2>
            <p>{{ $recipe['description'] }}</p>
        </div>
    </div>
    <div>
        <a href="/recipe/{{ $recipe->id }}/edit">Edit</a>
        <form action="/recipe/{{ $recipe->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button>Delete</button>
        </form>
    </div>
    <x-footer />
</x-body>
