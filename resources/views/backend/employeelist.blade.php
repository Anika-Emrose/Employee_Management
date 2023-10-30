@extends('backend.master')

@section('title')
    Employee list
@endsection



@section('content')
  <section class="p-5">
      <div class="container">
            <div class="row ">
                <h1 class="text-center text-success">{{ Session::get('pmsg') }}</h1>
            </div>
          <div class="row">
              <div class="col-md-12">
                  <table class="table table-hover table-striped">
                      <tr>
                          <td>ID</td>
                          <td>Employee Name</td>
                          <td>Image</td>
                          
                      
                      </tr>
                      @foreach($emp as $employeies)
                      <tr>
                          <td>{{ $employeies->id }}</td>
                           <td>{{ $employeies->first_name,$employeies->last_name }}</td>
                         
                          <td><img src="{{ $employeies->image }}" alt="" height="50px" width="50px"></td>
                         
                      </tr>
                      @endforeach
                  </table>
              </div>
          </div>
      </div>
  </section>
@endsection 
       