<x-app-layout>
<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<x-slot name="header">{{$quiz->title}} result</x-slot>
        <div class="card">
            <div class="card-body">
                <p class="card-text">
                    @foreach($quiz->questions as $question)
                    <div class="alert alert-info float-end">
                        <small>
                            This question was answered correctly by <strong>{{$question->true_percent}}%</strong> of participants.
                        </small>
                    </div>
                        <strong>
                        @if($question->correct_answer == $question->my_answer->answer)
                            <i class="fa fa-check text-success"></i>
                        @else
                        <i class="fa fa-times text-danger"></i>
                        @endif
                        {{$loop->iteration}}) {{$question->question}}</strong>
                        @if($question->image)
                            <img src="{{asset($question->image)}}" class="img-responsive mt-2 ml-3 img-thumbnail rounded" style="width:200px">
                        @endif

                        @if('A' == $question->correct_answer)
                        <div class="form-check mt-2 ml-3">
                            <label class="form-check-label" for="quiz{{$question->id}}1">
                               <div style="background-color:#32CD32; padding-left:5px; padding-right:5px; color:white; border-radius: 5px; 
                               border: 1px solid #73AD21;"><strong>A)</strong> {{$question->A}}</div> 
                            </label>
                        </div>
                        @elseif('A' == $question->my_answer->answer)
                        <div class="form-check mt-2 ml-3">
                            <label class="form-check-label" for="quiz{{$question->id}}1">
                               <div style="background-color:#FA5F55; padding-left:5px; padding-right:5px; color:white; border-radius: 5px; 
                               border: 1px solid #73AD21;"><strong>A)</strong> {{$question->A}}</div> 
                            </label>
                        </div>
                        @elseif('A' !== $question->my_answer->answer && $question->correct_answer)
                        <div class="form-check mt-2 ml-3">
                            <label class="form-check-label" for="quiz{{$question->id}}1">
                               <div><strong>A)</strong> {{$question->A}}</div> 
                            </label>
                        </div>
                        @endif

                        @if('B' == $question->correct_answer)
                        <div class="form-check mt-2 ml-3">
                            <label class="form-check-label" for="quiz{{$question->id}}1">
                               <div style="background-color:#32CD32; padding-left:5px; padding-right:5px; color:white; border-radius: 5px; 
                               border: 1px solid #73AD21;"><strong>B)</strong> {{$question->B}}</div> 
                            </label>
                        </div>
                        @elseif('B' == $question->my_answer->answer)
                        <div class="form-check mt-2 ml-3">
                            <label class="form-check-label" for="quiz{{$question->id}}1">
                               <div style="background-color:#FA5F55; padding-left:5px; padding-right:5px; color:white; border-radius: 5px; 
                               border: 1px solid #73AD21;"><strong>B)</strong> {{$question->B}}</div> 
                            </label>
                        </div>
                        @elseif('B' !== $question->my_answer->answer && $question->correct_answer)
                        <div class="form-check mt-2 ml-3">
                            <label class="form-check-label" for="quiz{{$question->id}}1">
                               <div><strong>B)</strong> {{$question->B}}</div> 
                            </label>
                        </div>
                        @endif

                        @if('C' == $question->correct_answer)
                        <div class="form-check mt-2 ml-3">
                            <label class="form-check-label" for="quiz{{$question->id}}1">
                               <div style="background-color:#32CD32; padding-left:5px; padding-right:5px; color:white; border-radius: 5px; 
                               border: 1px solid #73AD21;"><strong>C)</strong> {{$question->C}}</div> 
                            </label>
                        </div>
                        @elseif('C' == $question->my_answer->answer)
                        <div class="form-check mt-2 ml-3">
                            <label class="form-check-label" for="quiz{{$question->id}}1">
                               <div style="background-color:#FA5F55; padding-left:5px; padding-right:5px; color:white; border-radius: 5px; 
                               border: 1px solid #73AD21;"><strong>C)</strong> {{$question->C}}</div> 
                            </label>
                        </div>
                        @elseif('C' !== $question->my_answer->answer && $question->correct_answer)
                        <div class="form-check mt-2 ml-3">
                            <label class="form-check-label" for="quiz{{$question->id}}1">
                               <div><strong>C)</strong> {{$question->C}}</div> 
                            </label>
                        </div>
                        @endif

                        @if('D' == $question->correct_answer)
                        <div class="form-check mt-2 ml-3">
                            <label class="form-check-label" for="quiz{{$question->id}}1">
                               <div style="background-color:#32CD32; padding-left:5px; padding-right:5px; color:white; border-radius: 5px; 
                               border: 1px solid #73AD21;"><strong>D)</strong> {{$question->D}}</div> 
                            </label>
                        </div>
                        @elseif('D' == $question->my_answer->answer)
                        <div class="form-check mt-2 ml-3">
                            <label class="form-check-label" for="quiz{{$question->id}}1">
                               <div style="background-color:#FA5F55; padding-left:5px; padding-right:5px; color:white; border-radius: 5px; 
                               border: 1px solid #73AD21;"><strong>D)</strong> {{$question->D}}</div> 
                            </label>
                        </div>
                        @elseif('D' !== $question->my_answer->answer && $question->correct_answer)
                        <div class="form-check mt-2 ml-3">
                            <label class="form-check-label" for="quiz{{$question->id}}1">
                               <div><strong>D)</strong> {{$question->D}}</div> 
                            </label>
                        </div>
                        @endif

                        @if(!$loop->last)
                        <hr>
                        @endif
                    @endforeach
                </p>
            </div>
        </div>
    </div>
</div>  
</x-app-layout>

<script src="{{asset('css/bootstrap.js')}}"></script>
<script src="{{asset('css/bootstrap.min.js')}}"></script>
