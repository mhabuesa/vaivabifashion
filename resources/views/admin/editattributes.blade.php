@extends('admin.layouts.template')

@section('content')



<!-- Basic Layout & Basic with Icons -->
<di class="row">
  <!-- Basic Layout -->
  <div class="col-xxl">
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Update Attributes</h5>
      </div>

      <div class="card-body">

        <form action="{{ route('updateattribute', $attrubutes_info->id) }}" method="POST">
            @csrf
            @method('post')

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Title</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="title" name="title" value="{{ $attrubutes_info->title }}" />
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Category</label>
                <div class="col-sm-10">
                    <select class="form-select" id="category_id" name="category_id" aria-label="Default select example">
                        <option selected>Select Category</option>
                        @foreach ($categories_info as $categorie)
                            <option value="{{ $categorie->id }}">{{ $categorie->category_name }}</option>
                        @endforeach
                        </select>
                </div>
              </div>


          <div class="row justify-content-end">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
          </div>

        </form>

      </div>

    </div>
  </div>
</di>



@endsection
