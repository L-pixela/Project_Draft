@extends('Layouts.app')
  @section('title','User')
  @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">User</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title" style="font-size: 1.5rem ;">Adding New Book</h3>

                    <div class="card-tools">
                        <a href="{{ url('admin/user/index') }} "><button type="button" class="btn btn-block btn-primary">Back</button></a>
                    </div>
                </div>
              <!-- /.card-header -->
                <form method="post" action="{{route('borrower.store')}}">
                    @csrf
                    @method('post')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                            <!-- text input -->
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" name="first_name" class="form-control" placeholder="Enter First Name">
                            </div>
                            </div>
                            <div class="col-sm-4">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" name="last_name" class="form-control" placeholder="Enter Last Name">
                            </div>
                            </div>
                            <div class="col-sm-4">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Gender</label>
                                <select name="gender" class="form-control select2" id="">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Contact</label>
                                <input type="text" name="contact" class="form-control" placeholder="Enter Contact">
                            </div>
                            </div>
                            <div class="col-sm-4">
                            <div class="form-group">
                                <label for="book_id">Book:</label>
                                <select class="form-control select2" style="width: 100%;" name="book_id" id="book_id">
                                    @foreach($book as $row)
                                    <option value="{{$row->id}}">{{$row->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Return Date</label>

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                        </div>
                                        <input type="date" name="return_date" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
              <!-- /.card-body -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection