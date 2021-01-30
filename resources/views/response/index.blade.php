@extends('layouts.app')

@section('content')
<div class="card p-2">
    <div class="card-header" style="border: 0">
        <p class="lead">{{ $surveys->count() > 0 ? 'List Respondents' : ''}}</p>
    </div>
    <table class="table table-striped mt-2">
        @if($surveys->count() > 0)
        <tr class="table-dark">
            <th>#</th>
            <th>email</th>
            <th>Questionnaire</th>
            <th></th>
        </tr>
        @endif
        @forelse($surveys as $key => $survey)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $survey->user->email }}</td>
            <td>{{ $survey->questionnaire->title }}</td>
            <td><a href="{{ route('responses.show', $survey->id) }}">view</a></td>
        </tr>
        @empty
        <p class="lead">No Respondents</p>
        @endforelse
    </table>
</div>
</form>
@endsection
