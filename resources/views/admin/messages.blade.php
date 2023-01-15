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
            								<th>Vartotojo ID</th>
											<th>Pokalbio ID</th>
											<th>Žinutė</th>
            								<th>Statusas</th>
											<th>Veiksmai</th>
        								</tr>
										
        								@foreach ($messages as $message)
        								<tr>
            								<td>{{ ++$i }}</td>
											<td>{{ $message->user_from_id }}</td>
            								<td>{{ $message->conversation_id }}</td>
            								<td>{{ $message->message }}</td>
											<td>{{ $message->status }}</td>

											<td>
                								<form action="#" method="POST">
   
                    							<a class="btn btn-info" href="#">Rodyti</a>
    
                    							<a class="btn btn-primary" href="#">Redaguoti</a>
   
                    							@csrf
                    							@method('DELETE')
      
                    							<button type="submit" class="btn btn-danger">Ištrinti</button>
                								</form>
            								</td>
        								</tr>
        								@endforeach
    								</table>
								</div>
								<div class="card-body">
								</div>
							</div>
						</div>
					</div>

				</div>
			</main>
@endsection
