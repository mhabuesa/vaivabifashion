@extends('admin.layouts.template')

@section('content')



<!-- Basic Layout & Basic with Icons -->
<div class="row">
  <!-- Basic Layout -->
  <h4 class="py-3 mb-4">Attribute Value</h4>
  <div class="col-lg-6">
    <div class="card">
        <h5 class="card-header">Values</h5>

        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Attribute</th>
                        <th>Values</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($attributevalue_info as $sl=> $attributevalue)


                        <tr>
                            <td>{{ $sl+1 }}</td>
                            <td>{{ \App\Models\Attributesets::where('id', $attributevalue->attributes_id)->get()->first()->title }}</td>
                            <td>{{ $attributevalue->value }}</td>
                            <td>
                                <a href="" class="btn btn-edit">Edit</a>
                                <a href="" class="btn btn-delete">Delete</a>
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
        <h5 class="mb-0">Add Value</h5>
      </div>
      <div class="card-body">

        <form action="{{ route('storeattributevalue') }}" method="POST">
            @csrf

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Attributes</label>
                <div class="col-sm-10">
                    <select class="form-select" id="attributes_id" name="attributes_id" aria-label="Default select example">
                        <option selected>Select Attribute</option>
                        @foreach ($attributeset_info as $attribute)
                            <option value="{{ $attribute->id }}">{{ $attribute->title }}</option>
                        @endforeach
                        </select>
                </div>
              </div>

          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">Value</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="value" name="value" placeholder="value" />

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
