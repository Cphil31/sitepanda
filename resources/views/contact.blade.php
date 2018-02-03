@extends('layouts.app')

@section('title', 'Contact')

@section('sidebar')
@parent


@endsection

@section('content')
<h1 class="titrediapo">Contact</h1>

<form>
	<div class="row">
		<div class="col">
			<input type="text" class="form-control" placeholder="Nom">
		</div>
		<div class="col">
			<input type="text" class="form-control" placeholder="Prénom">
		</div>
	</div>
	<div class="form-group">
		<label for="exampleInputEmail1">Email address</label>
		<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
		
	</div>
	<div class="form-group">
		<label for="exampleFormControlTextarea1">Message</label>
		<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
	</div>


	<button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
</form>


@endsection