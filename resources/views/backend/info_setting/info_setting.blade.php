@extends('layouts.backend')
@section('content')
    <div class="row">
        <div class="col-lg-5 m-auto">
            <div class="card">
                <div class="card-header bg-gray">
                    <h3 class="text-center text-white">Info Setting Update</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('info.setting.update')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mt-3">
                        <label for="log0"  class="form-label"> Logo</label><br>
                        <img id="blah" src="{{asset('uploads')}}/logo/{{$setting->logo}}" alt="your image" width="100" height="100" />
                        <input type="file" id="logo" class="form-control mt-2" name="logo" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                    </div>
                    <div class="mt-3">
                        <label for="address"  class="form-label"> Address</label><br>
                        <input type="text" id="address" class="form-control" name="address" value="{{$setting->address}}" >
                    </div>
                    <div class="mt-3">
                        <label for="phone"  class="form-label"> Phone</label><br>
                        <input type="text" id="phone" class="form-control" name="phone" value="{{$setting->phone}}">
                    </div>
                    <div class="mt-3">
                        <label for="email"  class="form-label"> Email</label><br>
                        <input type="email" id="email" class="form-control" name="email" value="{{$setting->email}}">
                    </div>
                    <div class="mt-3">
                        <label for="fb_page"  class="form-label"> FB Page</label><br>
                        <input type="text" id="fb_page" class="form-control" name="fb_page" value="{{$setting->fb_page}}">
                    </div>
                    <div class="mt-5 d-flex justify-content-end">
                       <button class="btn btn-primary">Update</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')

@if (session('update'))
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
    title: "{{session('update')}}"
    });
</script>
@endif

@endpush