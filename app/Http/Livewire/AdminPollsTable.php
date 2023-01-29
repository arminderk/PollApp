<?php

namespace App\Http\Livewire;

use App\Models\Poll;
use Livewire\Component;

class AdminPollsTable extends Component
{
    protected $polls;

    public function mount($polls)
    {
        $this->polls = $polls;
    }

    public function render()
    {
        return view('livewire.admin-polls-table', ['polls' => $this->polls]);
    }

    public function updatePollOrder($polls)
    {
        dd($polls);
    }
}
