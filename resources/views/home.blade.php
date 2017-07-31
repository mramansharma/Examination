@extends('layouts.app')

@section('content')
<div class="container centerButtons">
    <div class="row">

    @include('layouts.partials.notifications')

    <!-- Side Bar Section-->
    <div class="col-md-3">
        <div class="card">
            <div class="container-fluid">
                <a href="{{Route('attemptTest')}}" class="btn btn-primary btn-block">Attempt Test</a>
                <a href="#" class="btn btn-primary btn-block">Schedules</a>
                <a href="#" class="btn btn-primary btn-block">Error Analysis</a>
                <a href="#" class="btn btn-primary btn-block">Recent Exam</a>
                <a href="#" class="btn btn-primary btn-block">Overall Performance</a>
                <a href="#" class="btn btn-primary btn-block">Timeline</a>
                <a href="#" class="btn btn-primary btn-block">Topic wise Analysis</a>
                <a href="#" class="btn btn-primary btn-block">Report</a>
                <a href="{{Route('results')}}" class="btn btn-primary btn-block">Results</a>
        </div>
    </div>
    </div>
    <!-- End of Side Bar Section-->

    <div class="col-md-9">
        <div class="panel panel-info">
            <div class="panel-heading">Activity Log</div>
            <div class="panel-body">
                <ul class="list-group">
                @foreach($result as $result)
                  <li class="list-group-item">
                    <div class="row">
                    <div class="col-md-3"> 
                        Test Id: {{$result->id}}
                    </div>
                    <div class="col-md-3"> 
                        Status: Attempted                      
                    </div>
                    <div class="col-md-3"> 
                        Score: {{$result->score}}
                    </div>
                    <div class="col-md-3">
                        <span class="pull-right" style="padding-right: 2%;">{{$result->updated_at->diffForHumans()}}</span>
                    </div>
                    </div>
                  </li>
                @endforeach
                </ul>
            </div>
        </div>
    </div>

    </div>
</div>
@endsection
