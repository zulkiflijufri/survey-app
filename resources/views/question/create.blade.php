@extends('layouts.app')

@section('content')
<form action="{{ route('questions.store', $questionnaire->slug) }}" method="post">
    @csrf
    <div class="card">
        <div class="card-title text-center  pt-3 pb-2 font-bold fs-3">
            Create Question
        </div>
        <div class="card-body">
            <select name="type" id="type-create" class="form-control">
                <option value="choose" id="choose-create">Choose type question</option>
                <option value="text">Text</option>
                <option value="textarea">Textarea</option>
                <option value="checkbox">Checkbox</option>
                <option value="radio">Radio</option>
            </select>
            <div class="form-outline mt-3" id="div-question" hidden>
                <textarea class="form-control" id="question" rows="2" name="question"></textarea>
                <label class="form-label" for="question">Question</label>
            </div>
            <div class="form-outline mt-3" id="div-desc" hidden>
                <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                <label class="form-label" for="description">Description</label>
            </div>

            <div id="question_options_create"></div>

        </div>
        <div class="pt-2 pb-4 px-3">
            <button type="submit" class="btn btn-primary btn-sm btn-block py-2" id="button-create" disabled>Submit form</button>
        </div>
    </div>
</form>
@endsection
