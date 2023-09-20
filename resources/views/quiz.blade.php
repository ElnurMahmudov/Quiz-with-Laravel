<x-app-layout>
<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<x-slot name="header">{{$quiz->title}}</x-slot>
        <div class="card">
            <div class="card-body">
                <p class="card-text">
                    <form method="POST" action="{{route('quiz.result',$quiz->slug)}}">
                        @csrf
                    @foreach($quiz->questions as $question)
                        <strong>{{$loop->iteration}}) {{$question->question}}</strong>
                        @if($question->image)
                            <img src="{{asset($question->image)}}" class="img-responsive mt-2 ml-3 img-thumbnail rounded" style="width:200px">
                        @endif
                        <div class="form-check mt-2 ml-3">
                            <input class="form-check-input" type="radio" name="{{$question->id}}" 
                            id="quiz{{$question->id}}1" value="A" required>
                            <label class="form-check-label" for="quiz{{$question->id}}1">
                                <strong>A)</strong> {{$question->A}}
                            </label>
                        </div>

                        <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" name="{{$question->id}}" 
                            id="quiz{{$question->id}}2" value="B" required>
                            <label class="form-check-label" for="quiz{{$question->id}}2">
                                <strong>B)</strong> {{$question->B}}
                            </label>
                        </div>

                        <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" name="{{$question->id}}" 
                            id="quiz{{$question->id}}3" value="C" required>
                            <label class="form-check-label" for="quiz{{$question->id}}3">
                                <strong>C)</strong> {{$question->C}}
                            </label>
                        </div>

                        <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" name="{{$question->id}}" 
                            id="quiz{{$question->id}}4" value="D" required>
                            <label class="form-check-label" for="quiz{{$question->id}}4">
                                <strong>D)</strong> {{$question->D}}
                            </label>
                        </div>
                        @if(!$loop->last)
                        <hr>
                        @endif
                    @endforeach
                    <button type="submit" class="btn btn-danger mt-3 float-end" style="">Finish</button>
                    </form>
                </p>
            </div>
        </div>
    </div>
</div>  
</x-app-layout>

<script src="{{asset('css/bootstrap.js')}}"></script>
<script src="{{asset('css/bootstrap.min.js')}}"></script>
