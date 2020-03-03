@extends('layouts/app')

@section('content')
<div class="container">
<form method="POST" action="/home/news/update/{{$news->id}}">
        @csrf
        <div class="form-group">
          <label for="img">Img</label>
          <input type="text" class="form-control" id="img" placeholder="Enter img" name="img" value="{{$news->img}}">
        </div>
        <div class="form-group">
        <label for="title">Title</label>
          <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" value="{{$news->title}}">
        </div>
        <div class="form-group">
        <label for="content">Content</label>
        <textarea class="form-control" name="content" id="content" cols="30" rows="10">{{$news->content}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection


