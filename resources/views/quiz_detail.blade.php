<x-app-layout>
<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

<x-slot name="header">{{$quiz->title}}</x-slot>
    <div class="card">
        <div class="card-body">
            <p class="card-text">
                <div class="row">
                    <div class="col-md-4">
                        <ul>
                            @if($quiz->finished_at)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Finished at
                                <span title="{{$quiz->finished_at}}" class="badge bg-danger bg-pill">{{$quiz->finished_at->diffForHumans()}}</span>
                            </li>
                            @endif
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Questions count
                                <span class="badge bg-warning bg-pill">{{$quiz->questions_count}}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Number of participants
                                <span class="badge bg-warning bg-pill">15</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Score average
                                <span class="badge bg-warning bg-pill">60</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-8">
                        {{$quiz->description}}</p>
                        <a href="" class="btn btn-primary btn-sm">Start quiz</a>
                    </div>
                </div>
        </div>
    </div>
    
</x-app-layout>

<script src="{{asset('css/bootstrap.js')}}"></script>
<script src="{{asset('css/bootstrap.min.js')}}"></script>
