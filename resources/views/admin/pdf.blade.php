<!DOCTYPE html>
<html>
<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    
</head>
<body>
  
<div class="container">
<table class="table table-bordered">
        <tr>
           
            <th>Vardas</th>
            <th>Pavarde</th>
            <th>El pastas</th>
            <th>Role</th>
          
        </tr>
        @foreach ($users as $user)
        <tr>
            
            <td>{{ $user->firstName }}</td>
            <td>{{ $user->lastName }}</td>
            <td>{{ $user->email}}</td>
            <td>{{ $user->type}}</td>
           
        </tr>
        @endforeach
    </table>
</div>
   
</body>
</html>

