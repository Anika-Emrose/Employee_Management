@extends('backend.master')
@section('title')
    ADD Employee page
@endsection
@section('content')
<div class="section py-5">
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <p style="color:green">{{Session::get('msg')}}</p>
        <form action="{{route("store.employee")}}"method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
    <label for="cname" class="form-label">First Name</label>
    <input type="text" class="form-control" id="cname" name="cname">
  </div>
 
  <div class="mb-3">
    <label for="lname" class="form-label">Last name </label>
    <input type="text" class="form-control" name="lname"id="lname">
  </div>
  
  <div class="mb-3">
    <label for="email" class="form-label">Email </label>
    <input type="email" class="form-control" name="email"id="email">
  </div>
  <div class="mb-3">
    <label for="pass" class="form-label">Password </label>
    <input type="password" class="form-control" name="pass"id="pass">
  </div>
   <div class="mb-3">
   <label for="phone">Enter your phone number:</label>
<input type="tel" id="phone" name="phone" pattern="01[1|5|6|7|8|9][0-9]{8}">
</div>
 
  <div class="mb-3">
    <label for="img" class="form-label">Choose category Image</label>
    <input type="file" class="form-control" id="img" name="img">
  </div>
  <button type="submit" id="btn" class="btn btn-primary">Add Employee</button>
</form>
    </div>
    </div>
</div>
</div>
@endsection
