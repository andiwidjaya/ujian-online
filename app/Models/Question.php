<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'question',
        'explanation'
    ];

    public function options(): HasMany
    {
        return $this->hasMany(QuestionOption::class);
    }
    public function setQuestionAttribute($value)
    {
        $this->attributes['question'] = strip_tags($value);
    }

    // Mutator untuk membersihkan tag HTML sebelum menyimpan penjelasan (explanation)
    public function setExplanationAttribute($value)
    {
        $this->attributes['explanation'] = strip_tags($value);
    }
}