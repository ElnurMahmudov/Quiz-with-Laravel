<x-app-layout>
<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

<x-slot name="header">{{$quiz->title}}</x-slot>
    <div class="card">
        <div class="card-body">
            <p class="card-text">
            <h5 class="card-title">
                <a href="{{route('quizzes.index')}}" class="btn btn-sm btn-outline-primary"><i class="fa-solid fa-arrow-left"></i> Back</a><br><br>
            </h5>
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
                       
                        @if(count($quiz->topTen)>0)
                        <div class="card mt-3">
                            <div class="card-body">
                                <h5 class="card-title">Top 10</h5>
                                @foreach($quiz->topTen as $result)
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    {{$loop->iteration}})
                                    <img src="{{$result->user->profile_photo_url}}" class="w-8 h-8 rounded-full">
                                    <span @if(auth()->user()->id==$result->user_id) style="background-color:#DAA520	; color:white; border-radius: 5px; border: 1px solid #73AD21;" @endif>- {{$result->user->name}} -</span>
                                    <span class="badge bg-success bg-pill">{{$result->point}}</span>
                                </li>
                                @endforeach
                            </div>
                        </div>
                        @endif
                    </ul>
                    </div>
                    <div class="col-md-8">
                        {{$quiz->description}}</p>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">№</th>
                                    <th scope="col">Participant</th>
                                    <th scope="col">Point</th>
                                    <th scope="col">Correct</th>
                                    <th scope="col">Wrong</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($quiz->results as $result)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$result->user->name}}</td>
                                    <td>{{$result->point}}</td>
                                    <td>{{$result->correct}}</td>
                                    <td>{{$result->wrong}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                    </div>
                </div>
        </div>
    </div>
    
</x-app-layout>

<script src="{{asset('css/bootstrap.js')}}"></script>
<script src="{{asset('css/bootstrap.min.js')}}"></script>
