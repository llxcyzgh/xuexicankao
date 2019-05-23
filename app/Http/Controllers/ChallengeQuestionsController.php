<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuestionRequest;
use App\Models\Question;
use Illuminate\Http\Request;

class ChallengeQuestionsController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $keyword = $request->input('keyword');
            $list    = Question::where('ask', 'like', '%' . $keyword . '%')->get();

            return response($list);
        } else {
            $list = Question::orderBy('id', 'desc')->paginate(10);
            return view('questions/challenges', compact('list'));
        }
    }

    public function create()
    {
        return view('questions/create');
    }

    public function store(QuestionRequest $request, Question $question)
    {
        return 1;
        var_dump($request);
    }
}
