<div>
    <label for="name" class="form-lable">Name</label>
    <input type="text" class="form-control" name="name" placeholder="Name" required value="{{ $category?->name }}">
</div>

<div class="mt-2" >
    <button type="submit" class="btn btn-primary px-5">SAVE</button>
</div>
