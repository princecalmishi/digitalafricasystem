@extends('layouts.admin')

@section('content')
<div class="content-wrapper">



<div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add New Service Form</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- general form elements -->
            <div class="card card-primary">
              
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('admincreateservice')}}" method="POST" enctype = 'multipart/form-data'>
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Serivice Name</label>
                    <input type="text" name="name" class="form-control" id="" placeholder="Enter Name">
                  </div><br>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Price per Hour</label>
                    <input type="number" name="price" class="form-control" id="" placeholder="Enter price">
                  </div>
            
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
           
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->






    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">All Services </h3> <a class="btn btn-primary ml-3" data-toggle="modal" data-target="#modal-default">Add New Service!</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Price</th>
                      <th>Date created</th>
                     
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($datablog as $data)

                    <tr>
                        <td>{{$data->id}}</td>
                        <td>{{$data->Name}}</td>
                        <td>{{$data->Price}}</td>
                        <td>{{$data->created_at}}</td>
                        
                        <td>
                          
                          <a class="btn btn-success btn-sm">Delete</a>

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
