@extends('admin.layouts.template')

@section('content')
    <div class="card">
        <h5 class="card-header">Sub Category Table</h5>

        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Category Name</th>
                        <th>Sub Category Name</th>
                        <th>Sub Category Product Count</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                        <tr>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td><a href=""><span class="badge bg-label-primary me-1">Active</span></a></td>
                            <td>
                                <a href="#" class="btn btn-primary">Edit</a>
                                <a href="#" class="btn btn-warning">Delete</a>
                            </td>
                        </tr>



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
