@extends('component.content')

@section('table')
    <div class="row">
    <div class="col-sm-12">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col">Description</th>
            <th scope="col">Create</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($posts as $post)
          <tr>
            
          <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->content}}</td>
            <td>{{$post->description}}</td>
            <td>{{$post->created_at}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
