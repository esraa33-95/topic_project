<div class="container my-5">
    <div class="mx-2">
      <h2 class="fw-bold fs-2 mb-5 pb-2">Add Topic</h2>
      <form action="{{route('topic.store')}}" method="post" class="px-md-5" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3 row">
          <label for="" class="form-label col-md-2 fw-bold text-md-end">Topic Title:</label>
          <div class="col-md-10">
            <input type="text" placeholder="e.g. Design Patterns" class="form-control py-2" name="title" value="{{old('title')}}" />
            @error('title')
                <div class="alert alert-warning">{{$message}}</div>
            @enderror
          </div>
        </div>

        <div class="form-group mb-3 row">
          <label for="" class="form-label col-md-2 fw-bold text-md-end">Category:</label>
         
          <div class="col-md-10">
            <select name="category_id" id="" class="form-control py-1">
              <option>select category</option>
              @foreach ($categories as $category)
                    <option value="{{$category->id}}"@selected(old('category_id')== $category->id)>{{$category->category_name}}</option>
              @endforeach
       
            </select>
            @error('category_id')
            <div class="alert alert-warning">{{$message}}</div>
        @enderror
          </div>
        </div>
        <div class="form-group mb-3 row">
          <label for="" class="form-label col-md-2 fw-bold text-md-end">Content:</label>
          <div class="col-md-10">
            <textarea name="content" id="" rows="5" class="form-control">{{old('title')}}</textarea>
          </div>
          @error('content')
          <div class="alert alert-warning">{{$message}}</div>
      @enderror
        </div>
        <div class="form-group mb-3 row">
          <label for="" class="form-label col-md-2 fw-bold text-md-end">Trending:</label>
          <input type="hidden" name="trending" value="0" />

          <div class="col-md-10">
            <input type="checkbox" class="form-check-input" style="padding: 0.7rem;" name="trending"@checked(old('trending')) value="1" />
          </div>
          @error('trending')
          <div class="alert alert-warning">{{$message}}</div>
      @enderror
        </div>
        <div class="form-group mb-3 row">
          <label for="" class="form-label col-md-2 fw-bold text-md-end">Published:</label>
          <input type="hidden" name="published" value="0" />
          <div class="col-md-10">
            <input type="checkbox" class="form-check-input" style="padding: 0.7rem;" name="published"@checked(old('published')) value="1"/>
          </div>
          @error('published')
          <div class="alert alert-warning">{{$message}}</div>
      @enderror
        </div>
        <hr>
        <div class="form-group mb-3 row">
          <label for="" class="form-label col-md-2 fw-bold text-md-end">Image:</label>
          <div class="col-md-10">
            <input type="file" class="form-control" style="padding: 0.7rem;" name="image" />
          </div>
          @error('image')
          <div class="alert alert-warning">{{$message}}</div>
      @enderror
        </div>
        <div class="text-md-end">
          <button class="btn mt-4 btn-secondary text-white fs-5 fw-bold border-0 py-2 px-md-5">
            Add Topic
          </button>
        </div>
      </form>
    </div>
  </div>