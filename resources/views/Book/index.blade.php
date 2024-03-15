@extends('Admin.book_index')

@section('title','Library Book')
@section('main','Book')
@section('content')
    <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><b>List of Books</b></h3>
              </div>
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>TITLE</th>
                      <th>AUTHOR</th>
                      <th>DESCRIPTION</th>
                      <th>PUSBLISH DATE</th>
                      <th>ACTION</th>
                    </tr>
                  </thead>
                  <tbody>
                        @foreach($books AS $book)
                            <tr>
                                <td>{{$book->id}}</td>
                                <td>{{$book->title}}</td>
                                <td>{{$book->author}}</td>
                                <td>{{$book->description}}</td>
                                <td>{{$book->publishDate}}</td>
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
        </div>
    </div>
@stop