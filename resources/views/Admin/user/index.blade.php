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
      <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" style="font-size: 1.5rem ;">List of Borrowers</h3>

                <div class="card-tools">
                    <a href="{{ url('admin/user/create') }} "><button type="button" class="btn btn-block btn-primary">Add New Borrower</button></a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>FIRST NAME</th>
                        <th>LAST NAME</th>
                        <th>GEDNER</th>
                        <th>CONTACT</th>
                        <th>BORROWED BOOK</th>
                        <th>RETURN DATE</th>
                        <th>ACTION</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($borrowers as $borrower)
                        <tr>
                                <td>{{$borrower->id}}</td>
                                <td>{{$borrower->first_name}}</td>
                                <td>{{$borrower->last_name}}</td>
                                <td>{{$borrower->gender}}</td>
                                <td>{{$borrower->contact}}</td>
                                <td>{{$borrower->books->title}}</td>
                                <td>{{$borrower->return_date}}</td>
                                <td>
                                    <a href="" ><button type="button" class="btn btn-block btn-primary">View</button></a>
                                    <a href="{{route('borrower.edit',['borrower' => $borrower])}}" ><button type="button" class="btn btn-block btn-success">Update</button></a>
                                    <form method="post" action="{{route('borrower.delete', ['borrower' => $borrower])}}">
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