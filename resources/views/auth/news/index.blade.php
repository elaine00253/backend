@extends('layouts/app')

@section('content')
<div class="container">
    <form method="POST" action="/home/news/store">
        @csrf
        <div class="form-group">
          <label for="img">Img</label>
          <input type="text" class="form-control" id="img" placeholder="Enter img" name="img">
        </div>
        <div class="form-group">
        <label for="title">Title</label>
          <input type="text" class="form-control" id="title" placeholder="Enter title" name="title">
        </div>
        <div class="form-group">
        <label for="content">Content</label>
          <input type="text" class="form-control" id="content" placeholder="Enter content" name="content">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection

