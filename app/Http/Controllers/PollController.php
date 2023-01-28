<?php

namespace App\Http\Controllers;

use App\Models\Poll;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PollController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $poll = new Poll();
        return view('polls/admin/create', compact('poll'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|max:60',
            'start_date'  => 'required',
            'finish_date' => 'required|after:start_date',
            'options'     => 'required|array|min:2'
        ]);

        $poll = Poll::create($request->except('options'));

        $poll->options()->createMany($request->options);

        return redirect()->route('admin.home')->with('success', "Poll and it's options created successfully!");
    }

    /**
     * Display the specified resource.
     *
     * @param  Poll  $poll
     * @return \Illuminate\Http\Response
     */
    public function show(Poll $poll)
    {
        switch(Auth::user()->role) {
            case 'admin':
                return view('polls/admin/show', compact('poll'));
            default:
                return redirect()->route('user.home');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $poll = Poll::findOrFail($id);

            if($poll->published) {
                return redirect()->route('admin.home')->withErrors(["Can't edit published poll"]);
            }

            return view('polls/admin/edit', compact('poll'));
        } catch(ModelNotFoundException $e) {
            return redirect()->route('admin.home');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'name'        => 'required|max:60',
                'start_date'  => 'required',
                'finish_date' => 'required|after:start_date',
                'options'     => 'required|array|min:2'
            ]);

            $poll = Poll::findOrFail($id);
            $poll->update($request->except('options'));
            
            $poll->options()->delete();
            $poll->options()->createMany($request->options);

            return redirect()->route('polls.edit', $poll)->with('success', "Poll and it's options updated successfully!");
        } catch(ModelNotFoundException $e) {
            return redirect()->route('admin.home');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
