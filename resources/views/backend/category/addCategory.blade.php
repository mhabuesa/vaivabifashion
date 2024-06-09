@extends('layouts.backend')
@section('content')

<!-- Basic Layout & Basic with Icons -->
<di class="row">
  <!-- Basic Layout -->
  <div class="col-lg-6 m-auto">
    <div class="card mb-4">
      <div class="card-header">
        <h3 class="text-center">Add Category</h3>
      </div>
      <div class="card-body">

        <form action="{{ route('categoryStore') }}" method="POST">
            @csrf

            <div class="mt-3">
                <label class="col-form-label" for="basic-default-name">Category Name</label>
              <input type="text" class="form-control" id="category_name" name="category_name" placeholder="Electronics" />
              @error('category_name')
                  <small class="text-danger">{{$message}}</small>
              @enderror
            </div>

            <div class="mt-3">
              <button type="submit" class="btn btn-primary">Add</button>
            </div>

        </form>

      </div>
    </div>
  </div>
</di>

@endsection