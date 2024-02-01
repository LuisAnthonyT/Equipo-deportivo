<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventRequest;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::all();
        return view ('events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EventRequest $request)
    {
        $event = new Event();
        $event->name = $request->get('name');
        $event->description = $request->get('description');
        $event->location = $request->get('location');
        $event->date = $request->get('date');
        $event->hour = $request->get('hour');
        $event->type = $request->get('type');
        $event->tags = $request->get('tags');
        $event->tags = $request->get('tags');
        $event->visible = $request->has('visible') ? 1 : 0;
        $event->save();

        return redirect()->route('events.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        return view('events.show',compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        return view('events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EventRequest $request, Event $event)
    {
        $event->name = $request->input('name');
        $event->description = $request->input('description');
        $event->location = $request->input('location');
        $event->date = $request->input('date');
        $event->hour = $request->input('hour');
        $event->type = $request->input('type');
        $event->tags = $request->input('tags');
        $event->visible = $request->has('visible') ? 1 : 0;
        $event->save();

        return redirect()->route('events.show', $event);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        Event::findOrFail($event->id)->delete();
        return redirect()->route('events.index');
    }
}
