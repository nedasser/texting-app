<!DOCTYPE html>
<html>
<head>
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    
</head>
<body>
  
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Redaguoti vartotoją</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('admin.users') }}"> Atgal</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('admin.userUpdate',$user->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Vardas:</strong>
                    <input type="text" name="firstName" value="{{ $user->firstName }}" class="form-control" placeholder="firstName">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Pavardė:</strong>
                    <input type="text" name="lastName" value="{{ $user->lastName }}" class="form-control" placeholder="lastName">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>El. paštas:</strong>
                    <input type="text" name="email" value="{{ $user->email }}" class="form-control" placeholder="email">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Rolė:</strong>
                    <input type="text" name="type" value="{{ $user->type }}" class="form-control" placeholder="type">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Redaguoti</button>
            </div>
        </div>
   
    </form>
</div>
   
</body>
</html>

