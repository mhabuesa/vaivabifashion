@extends('admin.layouts.template')

@section('content')
    <div class="card">
        <h5 class="card-header">Category Table</h5>

        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Category Name</th>
                        <th>Slug</th>
                        <th>Product Count</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->category_name }}</td>
                            <td>{{ $category->slug }}</td>
                            <td>{{ $category->product_count }}</td>
                            <td><a href=""><span class="badge bg-label-primary me-1">Active</span></a></td>
                            <td>
                                <a href="{{ route('editcategory', $category->id) }}" class="btn btn-primary">Edit</a>
                                <a href="{{ route('deletecategory', $category->id) }}" class="btn btn-warning">Delete</a>
                            </td>
                        </tr>
                    @endforeach



                </tbody>
            </table>
        </div>
    </div>
@endsection


@push('script')

@if (session('message'))
<script>
    const Toast = Swal.mixin({
    toast: true,
    position: "top-end",
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.onmouseenter = Swal.stopTimer;
        toast.onmouseleave = Swal.resumeTimer;
    }
    });
    Toast.fire({
    icon: "success",
    title: "{{session('message')}}"
    });
</script>
@endif

@endpush
