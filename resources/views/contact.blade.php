@extends('layouts.app')

@section('title', 'Contact')

@section('sidebar')
@parent


@endsection

@section('content')
<h1 class="titrecontact">Contact</h1>
<div class="row">
		
			<div class="col-2"></div>
			<div class="col-8">
				
				<form>
					<div class="row">
						<div class="col">
							<label>Nom</label>
							<input type="text" class="form-control" placeholder="Doe">
						</div>
						<div class="col">
							<label>Prénom</label>
							<input type="text" class="form-control" placeholder="John">
						</div>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Email</label>
						<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
					</div>

					<div class="form-group">
						<label for="exampleFormControlTextarea1">Message</label>
						<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
					</div>


					<button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
				</form>

			</div>
		<div class="col-2"></div>
</div>
@endsection