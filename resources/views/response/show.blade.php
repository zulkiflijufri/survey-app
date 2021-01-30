@extends('layouts.app')

@section('content')
<div class="card p-2">
    <div class="card-header" style="border: 0">
        @if($survey->responses->count() > 0)
        <p class="lead">
            Email: {{ $survey->user->email }}
        </p>
        <p class="lead">
            Questionnaire: {{ $survey->questionnaire->title }}
        </p>
        @endif
    </div>
    <table class="table table-striped mt-2">
        @if($survey->responses->count() > 0)
        <tr class="table-dark">
            <th>#</th>
            <th>Question</th>
            <th>Answer</th>
        </tr>
        @endif
        @forelse($survey->responses as $key => $response)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $response->question->question_name }}</td>
            <td>{{ $response->answer }}</td>
        </tr>
        @empty
        <tr collspan="3">
            <p class="lead">Responses not found</p>
        </tr>
        @endforelse
    </table>
</div>
</form>
@endsection
