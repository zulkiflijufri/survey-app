@extends('layouts.app')

@section('content')
<div class="card" style="position: inherit">
    <div class="card-title text-center pt-2 px-3 font-bold">
        <p class="lead" style="text-align: start;">
            <strong>Questionnaire:</strong> {{ $questionnaire->title }}
            <strong>{{ $questionnaire->description ? 'Description:' : '' }}</strong> {{ $questionnaire->description }}
        </p>
    </div>
    <div class="card-body">
        <div class="fs-5 mb-2">List Questions</div>
        <div class="my-3">
            <a href="{{ route('questions.create', $questionnaire->slug) }}" class="btn btn-primary btn-floating"><i class="fas fa-plus"></i></a>
        </div>
        @foreach($questionnaire->questions as $key => $q)
        <ul class="list-group">
            <a class="text-black text-start" data-mdb-toggle="collapse" href="#questionOne{{ $key }}" aria-controls="questionOne">
                <li class="list-group-item" style="position: inherit">
                    {{ $q->question_name }}
                </li>
            </a>
            <span class="text-end">
                <a href="{{ route('questions.edit', ['questionnaire' => $questionnaire->slug, 'question' => $q->id]) }}">edit</a>
                <a href="{{ route('questions.destroy', ['questionnaire' => $questionnaire->slug, 'question' => $q->id]) }}" onclick="event.preventDefault()
                    document.getElementById('delete-questionnaire{{ $key }}').submit();">delete</a>
            </span>

            <form id="delete-questionnaire{{ $key }}" action="{{ route('questions.destroy', ['questionnaire' => $questionnaire->slug, 'question' => $q->id]) }}" method="post">
                @csrf
                @method('delete')
            </form>
        </ul>

        <!-- Collapsed content -->
        <div class="collapse my-3 mx-3 text-start" id="questionOne{{ $key }}">
            {{ $q->question_desc ?? 'No description' }}

            @if($q->question_type == 'radio' || $q->question_type == 'checkbox')
            <div class="mt-2">
                @php
                $options = explode(",", $q->option_name);
                @endphp

                @foreach($options as $option)
                <div>
                    <input type="{{ $q->question_type }}" name="#" id="#" class="block " style="margin-right: 7px" disabled><span>{{ $option }}</span>
                </div>
                @endforeach
            </div>
            @endif
        </div>
        @endforeach
    </div>
</div>
@endsection
