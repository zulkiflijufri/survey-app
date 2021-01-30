@extends('layouts.app')

@section('content')
<form action="{{ route('surveys.store', $questionnaire->slug) }}" method="post">
    @csrf

    <div class="card" style="position: inherit">
        <div class="card-title text-center pt-2 px-3 font-bold">
            <p class="lead" style="text-align: start;">
                <strong>Questionnaire:</strong> {{ $questionnaire->title }}
                <strong>{{ $questionnaire->description ? 'Description:' : '' }}</strong> {{ $questionnaire->description }}
            </p>
        </div>
        @foreach($questionnaire->questions as $key => $q)
        <div class="card-body">
            {{ $q->question_name }}
            <div class="mb-2">
                <small>{{ $q->question_desc}}</small>
                @error('responses.' . $key . '.answer')
                <div>
                    <small class="text-danger">{{ $message }}</small>
                </div>
                @enderror
            </div>
            @if($q->question_type == 'radio' || $q->question_type == 'checkbox')
            <ul class="list-group">
                @php
                $options = explode(",", $q->option_name)
                @endphp

                @foreach($options as $option)
                <label for="{{ $option }}">
                    <li class="list-group-item" style="position: inherit">
                        <div class="d-flex justify-content-start item-center">
                            <input type="{{ $q->question_type }}" name="responses[{{ $key }}][answer]" value="{{ $option }}" class="mt-1" id="{{ $option }}">
                            {{ $option }}

                            <input type="hidden" name="responses[{{ $key }}][user_id]" value="{{ auth()->user()->id }}">
                            <input type="hidden" name="responses[{{ $key }}][question_id]" value="{{ $q->id }}">
                        </div>
                    </li>
                </label>
                @endforeach
            </ul>
            @else
            <div>
                <input type="{{ $q->question_type }}" class="form-control" name="responses[{{ $key }}][answer]">

                <input type="hidden" name="responses[{{ $key }}][user_id]" value="{{ auth()->user()->id }}">
                <input type="hidden" name="responses[{{ $key }}][question_id]" value="{{ $q->id }}">
            </div>
            @endif
        </div>
        @endforeach
        <div class="mt-2 mb-4">
            <button type="submit" class="btn btn-sm btn-dark">Completed survey</button>
        </div>
    </div>
</form>
@endsection
