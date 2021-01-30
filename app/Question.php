<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    const TYPE_TEXT = 'text';
    const TYPE_TEXTAREA = 'textarea';
    const TYPE_RADIO = 'radio';
    const TYPE_CHECKBOX = 'checkbox';

    protected $fillable = [
        'question_type',
        'question_name',
        'question_slug',
        'question_desc',
        'option_name',
    ];

    public function questionnaire()
    {
        return $this->belongsTo(Questionnaire::class);
    }
    public function responses()
    {
        return $this->hasMany(SurveyResponse::class);
    }
}
