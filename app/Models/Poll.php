<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    use HasFactory;

    protected $dates = ['start_date', 'finish_date'];

    protected $fillable = [
        'name',
        'description',
        'start_date',
        'finish_date'
    ];

    /**
     * The relationships that should always be loaded.
     *
     * @var array
     */
    protected $with = ['options', 'responses'];

    public function options()
    {
        return $this->hasMany(PollOption::class);
    }

    public function responses()
    {
        return $this->hasManyThrough(PollResult::class, PollOption::class);
    }

    public function getPublishedAttribute()
    {
        return $this->start_date->lte(now()) && $this->finish_date->gte(now());
    }

    public function getOptionResponsesTotal(PollOption $option)
    {
        return count($this->responses) > 0 ? count($option->responses) / count($this->responses) : 0;
    }

    public function getOptionResponsesPercentage(PollOption $option)
    {
        return count($this->responses) > 0 ? (count($option->responses) / count($this->responses)) * 100 : 0;
    }
}
