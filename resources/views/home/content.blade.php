<div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        @forelse ($posts as $post)
                <div class="post-preview">
                <a href="/post/{{$post->id}}">
                <h2 class="post-title">
                {{$post->title}}
                </h2>
                <h3 class="post-subtitle">
                {{$post->content}}
                </h3>
            </a>
            <p class="post-meta">Posted by
                <a href="#">Start Bootstrap</a>
                    on {{$post->created_at}}</p>
            </div>
            @if (session('role')=='admin')
            <p class="post-meta">
              <a href="/edit/{{$post->id}}">Edit</a>
                <a href="/delete/{{$post->id}}">Delete</a>
                </p>          
             @endif
            <hr>
            
        @empty
            <p>not post </p>
        @endforelse
        
      </div>
    </div>
  </div>