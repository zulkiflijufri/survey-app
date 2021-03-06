<?php

namespace App\Http\Controllers;

use App\Survey;
use App\SurveyResponse;
use Illuminate\Http\Request;

class SurveyResponseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $surveys = Survey::latest()->paginate(10);

        return view('response.index', compact('surveys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SurveyResponse  $surveyResponse
     * @return \Illuminate\Http\Response
     */
    public function show(Survey $survey)
    {
        $survey->load('responses');

        return view('response.show', compact('survey'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SurveyResponse  $surveyResponse
     * @return \Illuminate\Http\Response
     */
    public function edit(SurveyResponse $surveyResponse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SurveyResponse  $surveyResponse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SurveyResponse $surveyResponse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SurveyResponse  $surveyResponse
     * @return \Illuminate\Http\Response
     */
    public function destroy(SurveyResponse $surveyResponse)
    {
        //
    }
}
