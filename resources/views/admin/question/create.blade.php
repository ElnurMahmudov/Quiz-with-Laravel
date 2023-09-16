<x-app-layout>
    <x-slot name="header">Create New Question for {{$quiz->title}}</x-slot>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap/min.css')}}">
 
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{route('questions.store',$quiz->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Question title</label>
                    <textarea name="question" class="form-control">{{old('question')}}</textarea>
                </div><br>

                <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control">
                </div><br>
                
                <div class="form-group">
                    <label>Variants</label><hr>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>A)</label>
                            <textarea name="A" class="form-control" cols="30" rows="2">{{old('A')}}</textarea>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>B)</label>
                            <textarea name="B" class="form-control" cols="30" rows="2">{{old('B')}}</textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>C)</label>
                            <textarea name="C" class="form-control" cols="30" rows="2">{{old('C')}}</textarea>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>D)</label>
                            <textarea name="D" class="form-control" cols="30" rows="2">{{old('D')}}</textarea>
                        </div>
                    </div>
                </div>
                <br>

                <div class="form-group">
                    <label>Correct answer</label>
                    <select name="correct_answer" class="form-control">
                        <option @if(old('correct_answer')==='A') selected @endif value="A">A</option>
                        <option @if(old('correct_answer')==='B') selected @endif value="B">B</option>
                        <option @if(old('correct_answer')==='C') selected @endif value="C">C</option>
                        <option @if(old('correct_answer')==='D') selected @endif value="D">D</option>
                    </select>
                </div><br>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-sm">Create</button>
                </div>
            </form>
        </div>
    </div>


</x-app-layout>
<script src="{{asset('js/bootstrap.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>