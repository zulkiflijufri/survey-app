@extends('layouts.app')

@section('content')
<form action="{{ route('questionnaires.update', $questionnaire->slug) }}" method="post">
    @csrf
    @method('put')

    <div class="card">
        <div class="card-title text-center  pt-3 pb-2 font-bold fs-3">
            Edit Questionnaire
        </div>
        <div class="card-body">
            <div class="form-outline">
                <input type="text" id="title" class="form-control" name="title" value="{{ $questionnaire->title }}" />
                <label class="form-label" for="title">Title</label>
            </div>
            <div class="form-outline mt-3">
                <textarea class="form-control" id="descriotion" rows="4" name="description">{{ $questionnaire->description }}</textarea>
                <label class="form-label" for="descriotion">Description</label>
            </div>
        </div>
        <div class="pt-2 pb-4 px-3">
            <button type="submit" class="btn btn-primary btn-sm btn-block py-2">Submit form</button>
        </div>
    </div>
</form>
@endsection
