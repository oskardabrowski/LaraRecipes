<x-body>
    <x-nav />
    <div class="w-100 d-flex align-items-center justify-content-center" style="height: 100vh;">
        <div class="d-flex flex-column justify-content-center align-items-center" style="">
            <img style="width: 25rem;" src="{{ $recipe['image'] }}" alt="image" />
            <h1>{{ $recipe['title'] }}</h1>
            <h2>{{ $recipe['type'] }}</h2>
            <p>{{ $recipe['description'] }}</p>
        </div>
    </div>
    <x-footer />
</x-body>
