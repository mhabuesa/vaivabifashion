@extends('admin.layouts.template')

@section('content')



<!-- Basic Layout & Basic with Icons -->
<di class="row">
  <!-- Basic Layout -->
  <div class="col-xxl">
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Basic Layout</h5> <small class="text-muted float-end">Information</small>
      </div>
      <div class="card-body">

        <form action="{{ route('updatesubsubcategory') }}" method="POST">
            @csrf

            <input type="hidden" value="{{ $subsubcategories_info->id }}" name="id" id="">
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">SubSubCategory Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="subsubcategory_name" name="subsubcategory_name" value="{{ $subsubcategories_info->subsubcategory_name  }}" />
            </div>
          </div>


          <div class="row justify-content-end">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Add</button>
            </div>
          </div>
        </form>

      </div>
    </div>
  </div>
</di>



@endsection
