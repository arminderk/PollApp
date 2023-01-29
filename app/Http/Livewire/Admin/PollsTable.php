<?php

namespace App\Http\Livewire\Admin;

use App\Models\Poll;
use Livewire\Component;
use Livewire\WithPagination;

class PollsTable extends Component
{
    public function render()
    {
        return view('livewire.admin.polls-table', [
            'polls' => Poll::orderBy('position')->paginate(10)
        ]);
    }

    public function updatePollOrder($polls)
    {
        foreach($polls as $poll) {
            Poll::find($poll['value'])->update(['position' => $poll['order']]);
        }
    }
}
