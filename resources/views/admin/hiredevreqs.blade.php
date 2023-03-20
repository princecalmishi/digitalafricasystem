@extends('layouts.admin')

@section('content')
<div class="content-wrapper">


    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">All Hire Requests </h3> 
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Hours</th>
                        <th>Service ordered</th>
                      <th>Date created</th>
                     
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($datablog as $data)

                    <tr>
                        <td>{{$data->id}}</td>
                        <td>{{$data->name}}</td>
                        <td>{{$data->phone}}</td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->hours}}</td>
                        <td>{{$data->service}}</td>
                        <td>{{$data->created_at}}</td>
                        
                        <td>
                          
                          <a href="{{route('deletehiredevreqs',$data->id)}}" class="btn btn-success btn-sm">Delete</a>

                        </td>
                                          
                    </tr>
                    @endforeach
                    </tbody>
                 
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
  

              <script>
                $(function () {
                  $("#example1").DataTable({
                    "responsive": true, "lengthChange": false, "autoWidth": false,
                    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                  }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                  $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                  });
                });
              </script>
    
</div>
@endsection
