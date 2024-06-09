@extends('admin.layouts.template')

@section('content')



<!-- Basic Layout & Basic with Icons -->
<div class="row">
  <!-- Basic Layout -->
  <h4 class="py-3 mb-4">All Colors</h4>
  <div class="col-lg-6">
    <div class="card">
        <h5 class="card-header">Colors</h5>

        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Code</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($colors as $color)
                        <tr>
                            <td>{{ $color->id }}</td>
                            <td>{{ $color->color_name }}</td>
                            <td>{{ $color->color_code }}</td>
                            <td>
                                <a href="{{ route('editcolors', $color->id) }}" class="btn btn-edit">Edit</a>
                                <a href="{{ route('deletecolors', $color->id) }}" class="btn btn-delete">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
  </div>


  <div class="col-lg-6">
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Add Color</h5>
      </div>
      <div class="card-body">

        <form action="{{ route('storecolor') }}" method="POST">
            @csrf

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="color_name" name="color_name" placeholder="Name" />
                </div>
              </div>

          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">Color Code</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="color_code" name="color_code" placeholder="#ff0000" />

            </div>
          </div>


          <div class="row justify-content-end">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </div>

        </form>

      </div>
    </div>
  </div>
</div>



@endsection
