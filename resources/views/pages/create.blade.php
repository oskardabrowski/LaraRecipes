<x-body>
    <x-nav />
    <div class="w-100 mt-5 d-flex align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="border border-dark p-5 d-flex align-items-center justify-content-center flex-column"
            style="height: auto; width: 22.5rem;">
            <h2 style="color: #EF3B2D">Add recipe</h2>
            <form style="width: 15rem;" method="POST" action="/create" enctype="multipart/form-data">
                @csrf
                <label>Add photo:</label>
                <input style="width: 15rem;" type="file" name="image" />
                @error('image')
                    <p style="color: red">Something went wrong! Try again later.</p>
                @enderror
                <label class="mt-2">Add title:</label>
                <input style="width: 15rem;" type="text" name="title" />
                @error('title')
                    <p style="color: red">Title is required!</p>
                @enderror
                <label class="mt-2">Add type:</label>
                <select style="width: 15rem;" name="type">
                    <option value="spicy">Spicy</option>
                    <option value="nospicy">No spicy</option>
                </select>
                <label class="mt-2">Add description:</label>
                <textarea rows="5" style="width: 15rem; resize: none;" name="description"></textarea>
                @error('description')
                    <p style="color: red">Description is required!</p>
                @enderror
                <button class="mt-2 border-0 text-light bg-dark p-2 w-25" type="submit">Add</button>
            </form>
        </div>
    </div>
    <x-footer />
</x-body>
