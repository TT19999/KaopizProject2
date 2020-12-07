<!DOCTYPE html>
<html >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>edit</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('app.css')}}">
    </head>
    <body >
        <div class="input-user">
            
            <div class="input-form">
                <form method="POST"  >
                    @csrf
                  <div class="form-group col-md-8">
                    <label for="inputName">title</label>
                    <input type="text" name="title" class="form-control" id="inputEmail4" value="{{ $post->title }}"  required>
                  </div>
                
                <div class="form-group col-md-8">
                  <label for="inputEmail4">content</label>
                  <input type="text" name="content" class="form-control" id="inputAddress" value="{{ $post->content }}"  required>
                </div>
                <div class="form-group col-md-8">
                  <label for="inputAddress2">description </label>
                  <input type="text" class="form-control" name="description" id="inputAddress2" value="{{ $post->description }}" >
                </div>
               
                <button class="btn btn-dark" style="margin-left: 10px"><a href="/index"> Back</a></button>
                <button  class="btn btn-dark" style="margin-left: 10px"  type="submit"> Save</button>
              </form>
            </div>
            
         </div>
        
    </body>
</html>
