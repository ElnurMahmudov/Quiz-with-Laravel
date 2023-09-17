<x-app-layout>
    <x-slot name="header">Update Quiz</x-slot>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap/min.css')}}">
 
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{route('quizzes.update',$quiz->id)}}">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label>Quiz title</label>
                    <input type="text" name="title" class="form-control" value="{{$quiz->title}}">
                </div><br>

                <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" class="form-control" rows="4">{{$quiz->description}}</textarea>
                </div><br>

                <div class="form-group">
                    <label>Statuis</label>
                    <select name="status" class="form-control">
                        <option @if($quiz->questions_count<5) disabled @endif @if($quiz->status==='publish') selected @endif value="publish">Active</option>
                        <option @if($quiz->status==='passive') selected @endif value="passive">Passive</option>
                        <option @if($quiz->status==='draft') selected @endif value="draft">Draft</option>
                    </select>
                </div><br>

                <div class="form-group">
                    <label>Finished at</label>
                    <input type="datetime-local" name="finished_at" class="form-control" value="{{$quiz->finished_at}}">
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