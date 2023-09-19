<x-app-layout>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <x-slot name="header">Ana səhifə</x-slot>
    <div class="container">
    <div class="row">
            <div class="col-md-8">
                <div class="list-group">
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
            test
        </div>
    </div>
</div>
</x-app-layout>

<script src="{{asset('css/bootstrap.js')}}"></script>
<script src="{{asset('css/bootstrap.min.js')}}"></script>
