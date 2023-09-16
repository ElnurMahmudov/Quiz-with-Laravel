<x-app-layout>
    <x-slot name="header">Quiz: {{$quiz->title}}</x-slot>
    <link rel="stylesheet" href="{{asset('fontawesome-free-6.4.2-web/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap/min.css')}}">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">
                <a href="{{route('questions.create',$quiz->id)}}" class="btn btn-sm btn-primary"><i class="fa-solid fa-plus"></i> New Question</a><br><br>
            </h5>
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <th scope="col">Question</th>
                    <th scope="col">Image</th>
                    <th scope="col">A</th>
                    <th scope="col">B</th>
                    <th scope="col">C</th>
                    <th scope="col">D</th>
                    <th scope="col">Correct answer</th>
                    <th scope="col">Settings</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($quiz->questions as $question)
                    <tr>
                    <td>{{$question->question}}</td>
                    <td>{{$question->image}}</td>
                    <td>{{$question->A}}</td>
                    <td>{{$question->B}}</td>
                    <td>{{$question->C}}</td>
                    <td>{{$question->D}}</td>
                    <td>{{$question->correct_answer}}</td>
                    <td>
                    <a href="{{route('quizzes.edit',$question->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-pen"></i></a>
                    <a href="{{route('quizzes.destroy',$question->id)}}" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
                    </td>
                    </tr>
                @endforeach
                </tbody>
                </table>
        </div>
    </div>
</x-app-layout>

<script src="{{asset('js/bootstrap.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>