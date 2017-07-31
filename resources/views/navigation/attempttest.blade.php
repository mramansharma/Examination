@extends('layouts.app')

@section('content')
	<div class="container" style="padding-bottom: 3%;">
		<div class="row">

		@include('layouts.partials.notifications')
				
				<h2>Attempt Test</h2>

			<form action="{{Route('attemptTest')}}" method="post" class="form-horizontal" onsubmit="return confirm('Do you want to end test?');">
			{{csrf_field()}}
			@foreach($questions as $question)
			<div class="card">
				<div class="container-fluid">
					<b>{{$question->id}}&nbsp;.&nbsp;{{$question->question}}</b><br>
					<div class="radio">
						<label><input type="radio" name="{{$question->id}}" value="{{$question->answer}}">{{$question->answer}}</label>
					</div>

					<div class="radio">
						<label><input type="radio" name="{{$question->id}}" value="{{$question->option1}}">{{$question->option1}}</label>
					</div>
					
					<div class="radio">
						<label><input type="radio" name="{{$question->id}}" value="{{$question->option2}}">{{$question->option2}}</label>
					</div>
					
					<div class="radio">
						<label><input type="radio" name="{{$question->id}}" value="{{$question->option3}}">{{$question->option3}}</label>
					</div>
				</div>
			</div>
			@endforeach
			<center><input type="submit" class="btn btn-success" value="End Test"></center>
		</div>
	</div>
@endsection