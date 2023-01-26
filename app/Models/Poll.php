<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    use HasFactory;

    protected $dates = ['start_date', 'finish_date'];

    public function poll_options()
    {
        return $this->hasMany(PollOption::class);
    }

    public function published()
    {
        return $this->start_date->lte(now()) && $this->finish_date->gte(now());
    }
}
