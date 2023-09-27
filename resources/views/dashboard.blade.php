<x-app-layout>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <x-slot name="header">Ana səhifə</x-slot>
    <div class="container">
    <div class="row">
            <div class="col-md-8">
                <div class="list-group">
                <div class="card-header">
                    <strong>Active quizzes</strong>
                </div>
                    @foreach($quizzes as $quiz)
                    <a href="{{route('quiz.detail',$quiz->slug)}}" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">{{$quiz->title}}</h5>
                        <small>{{$quiz->finished_at ? $quiz->finished_at->diffForHumans().' end.' : null}}</small>
                        </div>
                        <p class="mb-1">{{ Str::limit($quiz->description,80)}}</p>
                        <small>{{$quiz->questions_count}} questions</small>
                    </a>
                    @endforeach
                    <div class="mt-2">
                        {{$quizzes->links()}}
                    </div>
                </div>
            </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <strong>My quizzes</strong>
                </div>
                <ul class="list-group list-group-flush">
                    @foreach($results as $result)
                    <li class="list-group-item">
                        {{$loop->iteration}}. 
                        <a href="{{route('quiz.detail',$result->quiz->slug)}}">
                            {{$result->quiz->title}}
                        </a>
                        <span class="badge bg-success bg-pill float-end">{{$result->point}}</span>
                    </li>
                    @endforeach
                </ul>
                </div>
            </div>
        </div>
</div>
</x-app-layout>

<script src="{{asset('css/bootstrap.js')}}"></script>
<script src="{{asset('css/bootstrap.min.js')}}"></script>
