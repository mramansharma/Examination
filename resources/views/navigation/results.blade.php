@extends('layouts.app')

@section('content')
	<div class="container centerButtons">
		<div class="row">
			
		<div class="jumbotron">
		<div class="container-fluid">
			<div class="col-md-4">
				<div class="card">
					<div class="container-fluid">
						<i class="fa fa-line-chart fa-5x" aria-hidden="true" style="color: #6be035;"></i><br>
						<h2>Score</h2>
						<h3>{{$last->score}}</h3>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card">
					<div class="container-fluid">
						<i class="fa fa-bar-chart fa-5x" aria-hidden="true" style="color: #4286f4;"></i><br>
						<h2>Correct</h2>
						<h3>{{$last->correct}}<h3>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card">
					<div class="container-fluid">
						<i class="fa fa-times-circle-o fa-5x" aria-hidden="true" style="color: #e04335;"></i><br>
						<h2>Wrong</h2>
						<h3>{{$last->wrong}}</h3>
					</div>
				</div>
			</div>
		</div>	
		</div>

		<div class="container-fluid">
			<i class="fa fa-table fa-2x" aria-hidden="true"></i><h1>Test History</h1>
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Test ID</th>
							<th>Score</th>
							<th>Correct</th>
							<th>Wrong</th>
							<th>Status</th>
							<th>Date</th>
						</tr>	
					</thead>
					
					<tbody>
						@foreach($results as $result)
						<tr>
							<td>{{$result->id}}</td>
							<td>{{$result->score}}</td>
							<td>{{$result->correct}}</td>
							<td>{{$result->wrong}}</td>
							<td>Attempted</td>
							<td>{{$result->created_at}}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
		
		</div>
	</div>
@endsection