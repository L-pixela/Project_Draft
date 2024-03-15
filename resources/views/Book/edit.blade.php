@extends('Admin.book_create')

@section('title','Library Book')
@section('main','Book')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3>Adding Book</h3>
                </div>

                <form  method="post" action="{{route('book.update', ['book' => $book])}}">
                    @csrf
                    @method('put')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Title: </label>
                            <input type="text" class="form-control" name="title" placeholder="Title" value="{{$book->title}}">
                        </div>

                        <div class="form-group">
                            <label for="author">Author: </label>
                            <input type="text" class="form-control" name="author" placeholder="Author" value="{{$book->author}}">
                        </div>

                        <div class="form-group">
                            <label>Description: </label>
                            <textarea class="form-control" name="description" rows="3" placeholder="Enter Description" >{{$book->description}}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="publishDate">Publish Date: </label>
                            <input type="date" class="form-control" name="publishDate" placeholder="Date" value="{{$book->publishDate}}">
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@stop