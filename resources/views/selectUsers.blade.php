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
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">Email</th>
                      
                    </tr>
                  </thead>
                  <tbody>

                @foreach($allUsersData as $user)
                    <tr>
                      <th scope="row">{{$user['id']}}</th>
                      <td>{{$user['name']}}</td>
                      <td>{{$user['email']}}</td>
                      <td><a class="btn btn-info" href="edit/{{$user['id']}}">Edit</a></td>
                     
                    </tr>
                    
                @endforeach
                  </tbody>
                </table>
        </div>
    
  </body>
</html>