@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-title text-center py-3 font-bold fs-3">
        List Questionnaires
        <div>
            <a href="{{ route('questionnaires.create') }}" class="btn btn-primary btn-floating"><i class="fas fa-plus"></i></a>
        </div>
    </div>
    <div class="card-body">
        <ul class="list-group list-group-flush">
            @forelse($questionnaires as $q)
            <li class="list-group-item d-flex justify-content-between">
                {{ $q->title }}
                <div>
                    <a href="{{ route('questionnaires.show', $q->slug) }}" style="margin-right: 5px;">
                        <i class="fas fa-eye text-dark"></i></a>
                    <a href="{{ route('questionnaires.edit', $q->slug) }}" style="margin-right: 5px;"><i class="fas fa-pen"></i></a>
                    <a href="{{ route('questionnaires.destroy', $q->slug) }}" onclick="event.preventDefault()
                    document.getElementById('delete-questionnaire').submit();" class="text-danger"><i class="fas fa-trash"></i></a>
                </div>
            </li>
            <form id="delete-questionnaire" action="{{ route('questionnaires.destroy', $q->slug) }}" method="post">
                @csrf
                @method('delete')
            </form>
            @empty
            <p class="lead">No Questionnaires</p>
            @endforelse
        </ul>
    </div>
</div>
@endsection
