<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
        <div class="container p-5">
                <form action="" method="post">
                    @csrf
                    <div class="form-group">
                      <label for="">Name</label>
                      <input type="text" value="{{old('Name')}}" name="Name" id="" class="form-control" placeholder="" aria-describedby="helpId">
                      @error('Name')
                      <small class="text-danger">{{$message}}</small>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="">Email</label>
                      <input type="text" value="{{old('Email')}}"  name="Email" id="" class="form-control" -placeholder="" aria-describedby="helpId">
                      @error('Email')
                      <small  class="text-danger ">{{$message}}</small>
                      @enderror
                     
                    </div>
                    <button class="btn btn-info" name="orderPlace" >Submit</button>
                </form>
        </div>  

    
  </body>
</html>