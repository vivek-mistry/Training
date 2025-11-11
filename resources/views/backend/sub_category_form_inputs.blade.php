<div>
    <label for="category_id">Category</label>
    <select name="category_id">
        @foreach($categories as $category)
            @if($sub_category?->category_id === $category->id)
                <option value="{{ $category->id }}" selected> {{ $category->name }} </option>
            @else
                <option value="{{ $category->id }}"> {{ $category->name }} </option>
            @endif
            
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
