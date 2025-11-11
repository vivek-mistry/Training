<div>
    <label for="category_id">Category</label>
    <select name="category_id">
        @foreach($categories as $category)
            <option value="{{ $category->id }}"> {{ $category->name }} </option>
        @endforeach

    </select>
</div>
<div>
    <label for="name">Name</label>
    <input type="text" name="name" placeholder="Name" required value="{{ $sub_category?->name }}">
</div>

<div>
    <button type="submit">SAVE</button>
</div>
