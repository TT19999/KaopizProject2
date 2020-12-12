<form method="POST">
    @csrf
    <div class="form-group">
      <label for="text">Email address</label>
      <input type="text" name="name" class="form-control" id="exampleInputEmail1" >
    </div><div class="form-group">
      <label for="text">Password</label>
      <input type="password" name="password" class="form-control" id="exampleInputEmail1" >
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>