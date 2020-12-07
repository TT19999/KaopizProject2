
<!DOCTYPE html>
<html >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{$title}}</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('app.css')}}">
    </head>
    <body >
        <div class="input-user">
        <h1>{{$post->title}}</h1>
        <h3>{{$post->content}}</h3>
        <p>{{$post->description}}</p>
        <p>{{$post->created_at}}</p>
        <a href="/post">
            <button>back</button>
        </a>
        @if (session('role')=='admin')
        <a href="/edit/{{$post->id}}">
            <button>edit</button>
        </a>
        @endif
        </div>
        
    </body>
</html>
