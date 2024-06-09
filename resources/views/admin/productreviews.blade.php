@extends('admin.layouts.template')

@section('content')
    <div class="card">
        <h5 class="card-header">Product Reviews</h5>

        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>User</th>
                        <th>Product</th>
                        <th>Review Title</th>
                        <th>Rating</th>
                        <th>Comment</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <a href="#" class="btn btn-primary">Update</a>
                                <a href="" class="btn btn-warning">Delete</a>
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
