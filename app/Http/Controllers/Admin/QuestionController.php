<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Http\Requests\QuestionCreateRequest;
use Illuminate\Support\Str;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $quiz = Quiz::whereId($id)->with('questions')->first() ?? abort(404);
        return view('admin.question.list',compact('quiz'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $quiz = Quiz::find($id);
        return view('admin.question.create',compact('quiz'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(QuestionCreateRequest $request,$id)
    {
        if($request->hasFile('image')){
            $fileName = Str::slug($request->question).'.'.$request->image->extension();
            $fileNameWithUpload = 'uploads/'.$fileName;
            $request->image->move(public_path('uploads'),$fileName);
            $request->merge([
                'image'=>$fileNameWithUpload
            ]);
        }
        Quiz::find($id)->questions()->create($request->post());

        return redirect()->route('questions.index',$id)->withSucces('seccessfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
