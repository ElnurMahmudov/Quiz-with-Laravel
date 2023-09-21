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
                            @if($quiz->my_result)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Answers
                                <div class="float-end">
                                <span class="badge bg-success bg-pill">{{$quiz->my_result->correct}} correct</span>
                                <span class="badge bg-danger bg-pill">{{$quiz->my_result->wrong}} wrong</span>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Point
                                <span class="badge bg-primary bg-pill">{{$quiz->my_result->point}}</span>
                            </li>
                            @endif
                            @if($quiz->finished_at)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Finished at
                                <span title="{{$quiz->finished_at}}" class="badge bg-danger bg-pill">{{$quiz->finished_at->diffForHumans()}}</span>
                            </li>
                            @endif
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Questions count
                                <span class="badge bg-secondary bg-pill">{{$quiz->questions_count}}</span>
                            </li>
                            @if($quiz->details)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Number of participants
                                <span class="badge bg-secondary bg-pill">{{$quiz->details['join_count']}}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Score average
                                <span class="badge bg-secondary bg-pill">{{$quiz->details['average']}}</span>
                            </li>
                            @endif
                        </ul>
                    </div>
                    <div class="col-md-8">
                        {{$quiz->description}}</p>
                        @if($quiz->my_result)
                            <a href="{{route('quiz.join',$quiz->slug)}}" class="btn btn-success btn-sm">view quiz</a>
                        @else
                            <a href="{{route('quiz.join',$quiz->slug)}}" class="btn btn-primary btn-sm">Start quiz</a>
                        @endif
                    </div>
                </div>
        </div>
    </div>
    
</x-app-layout>

<script src="{{asset('css/bootstrap.js')}}"></script>
<script src="{{asset('css/bootstrap.min.js')}}"></script>
