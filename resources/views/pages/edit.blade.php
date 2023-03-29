<x-body>
    <x-nav />
    <div class="w-100 mt-5 d-flex align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="border border-dark p-5 d-flex align-items-center justify-content-center flex-column"
            style="height: auto; width: 22.5rem;">
            <h2 style="color: #EF3B2D">Edit recipe</h2>
            <form style="width: 15rem;" method="POST" action="/recipe/{{ $recipe['id'] }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <img style="width: 15rem;" src="/storage/{{ $recipe['image'] }}" alt="" />
                <label>Change photo:</label>
                <input style="width: 15rem;" type="file" name="image" />
                @error('image')
                    <p style="color: red">Something went wrong! Try again later.</p>
                @enderror
                <label class="mt-2">Change title:</label>
                <input style="width: 15rem;" value="{{ $recipe['title'] }}" type="text" name="title" />
                @error('title')
                    <p style="color: red">Title is required!</p>
                @enderror
                <label class="mt-2">Change type:</label>
                <select style="width: 15rem;" name="type">
                    <option value="spicy" @if ($recipe['type'] == 'spicy') checked @endif>Spicy</option>
                    <option value="nospicy" @if ($recipe['type'] == 'nospicy') checked @endif>No spicy</option>
                </select>
                <label class="mt-2">Change description:</label>
                <textarea rows="5" style="width: 15rem; resize: none;" name="description">{{ $recipe['description'] }}</textarea>
                @error('description')
                    <p style="color: red">Description is required!</p>
                @enderror
                <button class="mt-2 border-0 text-light bg-dark p-2 w-25" type="submit">Save</button>
            </form>
        </div>
    </div>
    <x-footer />
</x-body>
