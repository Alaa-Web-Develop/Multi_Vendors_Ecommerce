<div class="form-group">
    <label for="">cateogry name</label>
    <input type="text" name="name" value="{{$category->name}}" class="form-control">
</div>
<div class="form-group">
    <label for="">cateogry parent</label>
    <select name="parent_id" class="form-control form-select">
       <option value="">Primary category</option> 
       @foreach ( $parents as $parent)
       <option value="{{$parent->id}}" @selected($category->parent_id == $parent->id)>{{$parent->name}}</option>     
       @endforeach
    </select>
</div>
<div class="form-group">
    <label for="">Description</label>
    <textarea name="description" class="form-control">{{$category->description}}</textarea>
</div>

<div class="form-group">
    <label for="">Image</label>
    <input type="file" name="image" class="form-control" accept="image/*">

    @if ($category->image)
    <img src="{{asset('storage/'.$category->image)}}" height="60" alt="">
    @endif
</div>

<div class="form-group">
    <label for="">Status</label>
    <div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="status"  value="active" @checked($category->status == 'active') >
            <label class="form-check-label" for="">
             Active
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="status"  value="archived" @checked($category->status == 'archived')>
            <label class="form-check-label" for="">
              Archived
            </label>
          </div>
    </div>
</div>

<div class="form-group">
   {{-- <button type="submit" class="btn btn-primary">Save</button> --}}
   <button type="submit" class="btn btn-primary">{{$btn_label??'save'}}</button>

</div>
