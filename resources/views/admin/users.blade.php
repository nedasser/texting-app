@extends('layouts.admin')
  
@section('content')
			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">Vartotojų valdymas</h1>

					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									

									<table class="table table-bordered">
        								<tr>
            								<th>Nr.</th>
            								<th>Vardas</th>
											<th>Pavardė</th>
											<th>El. paštas</th>
            								<th>Rolė</th>
											<th>Veiksmai</th>
        								</tr>
										
        								@foreach ($users as $user)
        								<tr>
            								<td>{{ ++$i }}</td>
											<td>{{ $user->firstName }}</td>
            								<td>{{ $user->lastName }}</td>
            								<td>{{ $user->email }}</td>
											<td>{{ $user->type }}</td>

											<td>
                								<form action="{{ route('admin.userDelete',$user->id) }}" method="POST">
   
    
                    							<a class="btn btn-primary" href="{{ route('admin.userEdit',$user->id) }}">Redaguoti</a>
   
                    							@csrf
                    							@method('DELETE')
      
                    							<button type="submit" class="btn btn-danger">Ištrinti</button>
                								</form>
            								</td>
        								</tr>
        								@endforeach
    								</table>
									<a class="btn btn-info" href="{{route('admin.pdf')}}">PDF</a>
								</div>
								<div class="card-body">
								</div>
							</div>
						</div>
					</div>

				</div>
			</main>
@endsection

