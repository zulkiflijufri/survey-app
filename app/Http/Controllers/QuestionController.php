<?php

namespace App\Http\Controllers;

use App\Question;
use App\Questionnaire;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Questionnaire $questionnaire)
    {
        return view('question.create', compact('questionnaire'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Questionnaire $questionnaire)
    {
        if (request('type') == Question::TYPE_RADIO || request('type') == Question::TYPE_CHECKBOX) {
            $data = [];
            $options = request('options');

            foreach ($options as $option) {
                $data[] = $option;
            }

            $options = implode(',', $data);

            $questionnaire->questions()->create([
                'question_type' => request('type'),
                'question_name' => request('question'),
                'question_slug' => Str::slug(request('question')),
                'question_desc' => request('description'),
                'option_name' => $options,
            ]);
        } else if (request('type') == Question::TYPE_TEXT || request('type') == Question::TYPE_TEXTAREA) {
            $questionnaire->questions()->create([
                'question_type' => request('type'),
                'question_name' => request('question'),
                'question_slug' => Str::slug(request('question')),
                'question_desc' => request('description'),
            ]);
        }

        return redirect()->route('questionnaires.show', $questionnaire->slug);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Questionnaire $questionnaire, Question $question)
    {
        return view('question.edit', compact('questionnaire', 'question'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Questionnaire $questionnaire, Question $question)
    {
        if (request('type') == Question::TYPE_RADIO || request('type') == Question::TYPE_CHECKBOX) {
            $data = [];
            $options = request('options');

            foreach ($options as $option) {
                $data[] = $option;
            }

            $options = implode(',', $data);

            $question->update([
                'question_type' => request('type'),
                'question_name' => request('question'),
                'question_slug' => Str::slug(request('question')),
                'question_desc' => request('description'),
                'option_name' => $options,
            ]);
        } else if (request('type') == Question::TYPE_TEXT || request('type') == Question::TYPE_TEXTAREA) {
            $question->update([
                'question_type' => request('type'),
                'question_name' => request('question'),
                'question_slug' => Str::slug(request('question')),
                'question_desc' => request('description'),
            ]);
        }

        return redirect()->route('questionnaires.show', $questionnaire->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Questionnaire $questionnaire, Question $question)
    {
        $question->delete();

        return back();
    }
}
