@extends('backend.master')

@section('title')
    Employee Details
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
                          <td>Contact Number</td>
                          
                          
                          
                      </tr>
                      @foreach($emp as $employeies)
                      <tr>
                          <td>{{ $employeies->id }}</td>
                           <td>{{ $employeies->first_name,$employeies->last_name }}</td>
                            <td>{{ $employeies->phone_number}}</td>
                        
                        
                      </tr>
                      @endforeach
                  </table>
              </div>
          </div>
      </div>
  </section>
@endsection 
       