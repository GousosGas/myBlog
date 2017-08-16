@extends('layout')


@section('content')

    <h1>Create a new Post</h1>

    <form method="post" action="/newblog/public/posts">
        {{csrf_field()}}
        <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Body</label>
            <textarea id="body" name='body' class="form-control" placeholder="write something"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Publish</button>
    </form>
@endsection