<x-app-layout>
    <x-slot name="header">Quizzes</x-slot>
    <link rel="stylesheet" href="{{asset('fontawesome-free-6.4.2-web/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap/min.css')}}">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title float-end">
                <a href="{{route('quizzes.create')}}" class="btn btn-sm btn-primary"><i class="fa-solid fa-plus"></i> New Quiz</a><br><br>
            </h5>
            <form method="GET" action="">
                <div class="row">
                    <div class="col-md-2">
                        <input type="text" name="title" value="{{request()->get('title')}}" placeholder="Quiz title" class="form-control">
                    </div>
                    <div class="col-md-2">
                        <select class="form-control" onchange="this.form.submit()" name="status">
                            <option value="">Select</option>
                            <option @if(request()->get('status')=='publish') selected @endif value="publish">Active</option>
                            <option @if(request()->get('status')=='passive') selected @endif value="passive">Passiv</option>
                            <option @if(request()->get('status')=='draft') selected @endif value="draft">Draft</option>
                        </select>
                    </div>
                    @if(request()->get('title') || request()->get('status'))
                        <div class="col-md-2">
                            <a href="{{route('quizzes.index')}}" class="btn btn-outline-primary">Reset</a>
                        </div>
                    @endif
                </div>
            </form>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">№</th>
                        <th scope="col">Quiz</th>
                        <th scope="col">Questions</th>
                        <th scope="col">Status</th>
                        <th scope="col">Finished at</th>
                        <th scope="col">Settings</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($quizzes as $quiz)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$quiz->title}}</td>
                        <td>
                            <a href="{{route('questions.index',$quiz->id)}}" class="btn btn-sm btn-outline-secondary">{{$quiz->questions_count}} see the questions</i></a>
                        </td>
                        <td>
                            @switch($quiz->status)
                                @case('publish')
                                    <span class="badge bg-success">Active</span>
                                @break
                                @case('passive')
                                    <span class="badge bg-danger">Passive</span>
                                @break
                                @case('draft')
                                    <span class="badge bg-warning">Draft</span>
                                @break
                            @endswitch
                        </td>
                        <td>
                        <span title="Expires on {{$quiz->finished_at}}">{{$quiz->finished_at ? $quiz->finished_at->diffForHumans() : 'Not assigned'}}</span>
                        </td>
                        <td>
                        <a href="{{route('quizzes.edit',$quiz->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-pen"></i></a>
                        <a href="{{route('quizzes.destroy',$quiz->id)}}" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
                {{$quizzes->withQueryString()->links()}}
        </div>
    </div>
</x-app-layout>

<script src="{{asset('js/bootstrap.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>