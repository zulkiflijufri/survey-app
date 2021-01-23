@extends('layouts.app')

@section('content')
<form action="{{ route('questions.update', ['questionnaire' => $questionnaire->slug, 'question' => $question->id]) }}" method="post">
    @csrf
    @method('put')

    <div class="card" style="position: inherit">
        <div class="card-title text-center  pt-3 pb-2 font-bold fs-3">
            Edit Question
        </div>
        <div class="card-body">
            <select name="type" id="type-edit" class="form-control">
                <option value="choose" id="choose-edit">Choose type question</option>
                <option value="text" @if($question->question_type=='text') selected @endif>Text</option>
                <option value="textarea" @if($question->question_type=='textarea') selected @endif>Textarea</option>
                <option value="checkbox" @if($question->question_type=='checkbox') selected @endif>Checkbox</option>
                <option value="radio" @if($question->question_type=='radio') selected @endif>Radio</option>
            </select>
            <div class="form-outline mt-3" id="div-question">
                <textarea class="form-control" id="question" rows="2" name="question">{{ $question->question_name }}</textarea>
                <label class="form-label" for="question">Question</label>
            </div>
            <div class="form-outline mt-3" id="div-desc">
                <textarea class="form-control" id="description" rows="3" name="description">{{ $question->question_desc }}</textarea>
                <label class="form-label" for="description">Description</label>
            </div>

            @php
            $options = explode(",", $question->option_name);
            @endphp

            <div id="question_options_edit">
                @if(!is_null($question->option_name))
                @foreach($options as $option)
                <div class="form-outline mt-4" id="list-options">
                    <input type="text" id="options" class="form-control" style="position: inherit" name="options[]" value="{{ $option }}" />
                    <label class="form-label" for="options" style="position: inherit">Option</label>
                    <span class="float-start" style="cursor:pointer;" id="add-option" style="position: inherit">Add another</span>
                    <span class="float-end" style="cursor:pointer" id="delete-option" style="position: inherit">Delete</span>
                </div>
                @endforeach
                @endif
            </div>

        </div>
        <div class="pt-2 pb-4 px-3">
            <button type="submit" class="btn btn-primary btn-sm btn-block py-2" id="button-edit">Submit form</button>
        </div>
    </div>
</form>
@endsection
