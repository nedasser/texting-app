@extends('layouts.user')
@section('content')
<main class="content">
				<div class="container-fluid p-0">


					<div class="row">

						<div class="col-xl-6 col-xxl-7">
                        <div class="card">
								
							</div>
							<div class="card flex-fill w-50">
                            <div class="card-header">
									<h5 class="card-title mb-0">Paieska</h5>
								</div>
								<div class="card-body">
									<input type="text" class="form-control" placeholder="Paieska">
								</div>
								<div class="card-header">

									<h5 class="card-title mb-0">Pokalbiai</h5>
								</div>
								<div class="card-body py-3">
								@foreach ($user as $vartotojas)
                                        <div>
										<a>
                                            {{$vartotojas->firstName}}
											{{$vartotojas->lastName}}
</a>
                                        </div>
										
                                        @endforeach
									
								</div>
							</div>
						</div>
					</div>

				</div>
			</main>
@endsection