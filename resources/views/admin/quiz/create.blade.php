<x-app-layout>
    <x-slot name="header">Create New Quiz</x-slot>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap/min.css')}}">
 
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">
                <a href="{{route('quizzes.index')}}" class="btn btn-sm btn-outline-primary"><i class="fa-solid fa-arrow-left"></i> Back</a><br><br>
            </h5>
            <form method="POST" action="{{route('quizzes.store')}}">
                @csrf
                <div class="form-group">
                    <label>Quiz title</label>
                    <input type="text" name="title" class="form-control" value="{{old('title')}}">
                </div><br>

                <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" class="form-control" rows="4">{{old('description')}}</textarea>
                </div><br>

                <div class="form-group">
                    <label>Finished at</label>
                    <input type="datetime-local" name="finished_at" class="form-control" value="{{old('finished_at')}}">
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