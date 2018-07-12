<label for="">Status</label>
<select class="form-control" name="published">
  @if (isset($category->id))
    <option value="0" @if ($category->published == 0) selected="" @endif>Not public</option>
    <option value="1" @if ($category->published == 1) selected="" @endif>Public</option>
  @else
    <option value="0">Not public</option>
    <option value="1">Public</option>
  @endif
</select>

<label for="">Name</label>
<input type="text" name="title" class="form-control" placeholder="Caption of category" value="{{$category->title or ""}}" required>

<label for="">Slug</label>
<input type="text" name="slug" class="form-control" placeholder="Automatic generation" value="{{$category->slug or ""}}" readonly="">

<label for="">Parent category</label>
<select class="form-control" name="parent_id">
  <option value="0">-- Without parent --</option>
  @include('admin.categories.partials.categories',['categories' => $categories])
</select>

<hr>

<input type="submit"  value="Save" class="btn btn-primary">
