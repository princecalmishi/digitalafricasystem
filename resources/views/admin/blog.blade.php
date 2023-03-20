@extends('layouts.admin')

@section('content')
<div class="content-wrapper">



<div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add New Post Form</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- general form elements -->
            <div class="card card-primary">
              
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('admincreateblog')}}" method="POST" enctype = 'multipart/form-data'>
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Post Title</label>
                    <input type="text" name="title" class="form-control" id="" placeholder="Enter title">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Post Category</label>
                    <select class="form-control" name="category">
                      @foreach($datacat as $d)                    
                        <option  class="form-control" value="{{$d->name}}">{{$d->name}}</option>
                      @endforeach
                    </select>
                    <hr>
                    <a class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-cat">Add new category</a>
                  </div>
                 
                 
                      <div class="form-group">
                        <label>Post Body</label>
                        <textarea id="w3review" name="body" class="form-control" rows="4" cols="50"></textarea>                      
                      </div>
                   

                  <div class="form-group">
                    <label for="exampleInputFile">Featured Image Input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
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




      <div class="modal fade" id="modal-cat">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add New Category Form</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- general form elements -->
            <div class="card card-primary">
              
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('createcategory')}}" method="POST" enctype = 'multipart/form-data'>
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Post Title</label>
                    <input type="text" name="name" class="form-control" id="" placeholder="Enter name">
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
                  <h3 class="card-title">All Blogs </h3> <a class="btn btn-primary ml-3" data-toggle="modal" data-target="#modal-default">Add New Post!</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Category</th>
                      <th>Image</th>
                      <th>Date created</th>
                     
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($datablog as $data)

                    <tr>
                        <td>{{$data->id}}</td>
                        <td>{{$data->title}}</td>
                        <td>{{$data->category}}</td>
                        <td> <img src="storage/blog/{{$data->image}}" alt="image" width="100%" height="40"></td>
                        <td>{{$data->created_at}}</td>
                        
                        <td>
                          
                          <a href="{{route('deleteblog',$data->id)}}" class="btn btn-success btn-sm">Delete</a>

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
