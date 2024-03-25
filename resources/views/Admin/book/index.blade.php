@extends('Layouts.app')
  @section('title','Book')
  @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Book</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Book</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" style="font-size: 1.5rem ;">Books List</h3>

                <div class="card-tools">
                    <a href="{{ url('admin/book/create') }} "><button type="button" class="btn btn-block btn-primary">Add New Book</button></a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Title</th>
                      <th>Author</th>
                      <th style="width: 12%;">Publish Date</th>
                      <th>Description</th>
                      <th style="width: 10%;">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($books as $book)
                        <tr>
                            <td>{{$book->id}}</td>
                            <td>{{$book->title}}</td>
                            <td>{{$book->author}}</td>
                            <td>{{$book->publishDate}}</td>
                            <td>{{$book->description}}</td>
                            <td>
                                <a href="" ><button type="button" class="btn btn-block btn-primary">View</button></a>
                                <a href="{{route('book.edit',['book' => $book])}}" ><button type="button" class="btn btn-block btn-success">Update</button></a>
                                <form method="post" action="{{route('book.delete', ['book' => $book])}}">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" class="btn btn-block btn-danger" value="Delete">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection