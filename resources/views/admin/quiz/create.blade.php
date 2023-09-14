<x-app-layout>
    <x-slot name="header">Create New Quiz</x-slot>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap/min.css')}}">

    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{route('quizzes.store')}}">
                @csrf
                <div class="form-group">
                    <label>Quiz title</label>
                    <input type="text" name="title" class="form-control" required>
                </div><br>

                <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" class="form-control" rows="4"></textarea>
                </div><br>

                <div class="form-group">
                    <label>Finished at</label>
                    <input type="datetime-local" name="finished_at" class="form-control">
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