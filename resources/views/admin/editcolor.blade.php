@extends('admin.layouts.template')

@section('content')



<!-- Basic Layout & Basic with Icons -->
<di class="row">
  <!-- Basic Layout -->
  <div class="col-xxl">
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Update Color</h5>
      </div>

      <div class="card-body">

        <form action="{{ route('updatecolor') }}" method="POST">
            @csrf

            <input type="hidden" value="{{ $colors_info->id }}" name="id">
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="color_name" name="color_name" value="{{ $colors_info->color_name }}" />
                </div>
              </div>

          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">Color Code</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="color_code" name="color_code" value="{{ $colors_info->color_code }}" />

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
