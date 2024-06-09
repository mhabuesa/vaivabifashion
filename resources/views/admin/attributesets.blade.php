@extends('admin.layouts.template')

@section('content')



<!-- Basic Layout & Basic with Icons -->
<div class="row">
  <!-- Basic Layout -->
  <h4 class="py-3 mb-4">All Attribute</h4>
  <div class="col-lg-6">
    <div class="card">
        <h5 class="card-header">Attributes</h5>

        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Values</th>
                        <th>Categories</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($attributes as $sl=> $attribute)
                        <tr>
                            <td>{{ $sl+1 }}</td>
                            <td>{{ $attribute->title }}</td>
                            <td>{{ \App\Models\Attributevalue::where('id', $attribute->id)->get()->first()->value }}</td>
                            <td>{{ $attribute->category->category_name }}</td>
                            <td>
                                <a href="{{ route('editattributes', $attribute->id) }}" class="btn btn-edit">Edit</a>
                                <a href="{{ route('deleteattributes', $attribute->id) }}" class="btn btn-delete">Delete</a>
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
        <h5 class="mb-0">Add Attributes</h5>
      </div>
      <div class="card-body">

        <form action="{{ route('storeattribute') }}" method="POST">
            @csrf

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Title</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="title" name="title" placeholder="Name" />
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
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </div>

        </form>

      </div>
    </div>
  </div>
</div>



@endsection
