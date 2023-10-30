@extends('backend.master')

@section('title')
    Update Employww
@endsection

@section('content')
    <section class="p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-success">{{ Session::get('pmsg') }}</p>
                    <form action="{{route('employee.update',$emp->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h3>Edit Your Product</h3>
                        <div class="mb-3">
                            <label for="cnmae" class="form-label">First Name</label>
                            <input type="text" class="form-control" value="{{ $emp->first_name}}" name="cnmae" id="cnmae">
                            
                        </div>
                       
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="email"  value="{{$emp->email}}" >
                        </div>
                         <div class="mb-3">
                            <label for="phone" class="form-label">Phone no</label>
                            <input type="tel" class="form-control" name="phone" id="phone"  value="{{$emp->phone_number}}" >
                       
                        </div>
                       
                        <div>
                            <img src="{{asset('/')}}{{$emp->image}}" alt="" height="50" width="70">
                        </div>
                        <div class="mb-3">
                            <label for="img" class="form-label">Choose Product Image</label>
                            <input type="file" class="form-control" name="img" id="img">
                        </div>
                        <button type="submit" name="btn" id="btn" class="btn btn-primary">Update Product</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
