<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'answers';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'user_id',
        'flashcard_id',
        'is_correct'
    ];

    // Define answer's relationship with user
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    // Define answer's relationship with flashcard
    public function flashcard()
    {
        return $this->belongsTo('App\Models\Flashcard', 'flashcard_id');
    }
}
