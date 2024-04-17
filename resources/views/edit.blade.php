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
                      <input type="text" value="{{$selectData['name']}}" name="Name" id="" class="form-control" placeholder="" aria-describedby="helpId">
                     
                    </div>
                    <div class="form-group">
                      <label for="">Email</label>
                      <input type="text" value="{{$selectData['email']}}" name="Email" id="" class="form-control" -placeholder="" aria-describedby="helpId">
                     
                    </div>
                    <button class="btn btn-info"  >Update</button>
                </form>
        </div>  

    
  </body>
</html>