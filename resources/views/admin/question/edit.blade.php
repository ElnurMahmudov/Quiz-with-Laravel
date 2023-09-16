<x-app-layout>
    <x-slot name="header">Update: {{$question->question}}</x-slot>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap/min.css')}}">
 
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{route('questions.update',[$question->quiz_id,$question->id])}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Question title</label>
                    <textarea name="question" class="form-control">{{$question->question}}</textarea>
                </div><br>

                <div class="form-group">
                    <label>Image</label>
                    @if($question->image)
                    <a href="{{asset($question->image)}}" target="_blank">
                        <img src="{{asset($question->image)}}" class="img-responsive" style="width:150px">
                    </a><br>
                    @endif
                    <input type="file" name="image" class="form-control">
                </div><br>
                
                <div class="form-group">
                    <label>Variants</label><hr>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>A)</label>
                            <textarea name="A" class="form-control" cols="30" rows="2">{{$question->A}}</textarea>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>B)</label>
                            <textarea name="B" class="form-control" cols="30" rows="2">{{$question->B}}</textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>C)</label>
                            <textarea name="C" class="form-control" cols="30" rows="2">{{$question->C}}</textarea>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>D)</label>
                            <textarea name="D" class="form-control" cols="30" rows="2">{{$question->D}}</textarea>
                        </div>
                    </div>
                </div>
                <br>

                <div class="form-group">
                    <label>Correct answer</label>
                    <select name="correct_answer" class="form-control">
                        <option @if($question->correct_answer==='A') selected @endif value="A">A</option>
                        <option @if($question->correct_answer==='B') selected @endif value="B">B</option>
                        <option @if($question->correct_answer==='C') selected @endif value="C">C</option>
                        <option @if($question->correct_answer==='D') selected @endif value="D">D</option>
                    </select>
                </div><br>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-sm">Update</button>
                </div>
            </form>
        </div>
    </div>


</x-app-layout>
<script src="{{asset('js/bootstrap.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>