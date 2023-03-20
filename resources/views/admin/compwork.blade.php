@extends('layouts.admin')

@section('content')

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


<div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add New Company Work</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- general form elements -->
            <div class="card card-primary">
              
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('compworkpost')}}" method="POST" enctype = 'multipart/form-data'>
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Project Title</label>
                    <input type="text" name="title" class="form-control" id="" placeholder="Enter title">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Project Link</label>
                    <input type="text" name="link" class="form-control" id="" placeholder="Enter link">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Project Category</label>
                    <select class="form-control" name="category">
                      @foreach($datacat as $d)                    
                        <option  class="form-control" value="{{$d->name}}">{{$d->name}}</option>
                      @endforeach
                    </select>
                    <hr>
                    <a class="btn btn-success btn-sm" data-dismiss="modal" data-toggle="modal" data-target="#modal-cat">Add new category</a>
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





<script>
  $(function () {
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });

    $('.filter-container').filterizr({gutterPixels: 3});
    $('.btn[data-filter]').on('click', function() {
      $('.btn[data-filter]').removeClass('active');
      $(this).addClass('active');
    });
  })
</script>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Gallery</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Gallery</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <h4 class="card-title">Company Work Gallery</h4> <a data-toggle="modal" data-target="#modal-default" class="btn btn-success ml-3" data-gallery="gallery">Add New Record</a>
              </div>
              <div class="card-body">
                <div class="row">
                  @foreach($compwork as $compwork)

                  <div class="col-sm-2">
                    <a href="storage/companywork/{{$compwork->image}}" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery">
                      <img style="height:100px; width:100px;" src="storage/companywork/{{$compwork->image}}" class="img-fluid mb-2" alt="white sample"/>
                    </a>
                    <p>Name - {{$compwork->title}}</p>
                    <p>Category - {{$compwork->pcat}}</p>
                    <a href="{{route('deletework',$compwork->id)}}" class="btn btn-danger">Delete</a>
                  </div>
                @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <script>
  $(function () {
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });

    $('.filter-container').filterizr({gutterPixels: 3});
    $('.btn[data-filter]').on('click', function() {
      $('.btn[data-filter]').removeClass('active');
      $(this).addClass('active');
    });
  })
</script>

@endsection
