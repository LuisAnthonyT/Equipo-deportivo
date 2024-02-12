<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventRequest;
use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $likes = [];
        if (Auth::check()) {
            $user = Auth::user();
            $likes = $user->likedEvents()->pluck('id')->toArray();
        }

        $events = Event::all();
        return view ('events.index', compact('events', 'likes'));
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
        $user = Auth::user();

        if ($user->likedEvents()->where('id', $event->id)->exists()) {
            $like = true;
        } else {
            $like = false;
        }

        return view('events.show',compact('event', 'like'));
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

    //Función para dar like a un evento
    public function EventLike(Request $request, Event $event) {

        $event = Event::findorFail($event->id);
        $userId = auth()->id();
        $event->users()->attach($userId);

        return redirect()->route('events.show', $event);
    }

    //Función para quitar el like de un evento
    public function deleteLike(Request $request, Event $event)
    {
        $user = auth()->user();

         // Verifica si el usuario ha dado like al evento
        if ($user->likedEvents()->where('id', $event->id)->exists()) {
        // Elimina el like del evento para el usuario actual
        $user->likedEvents()->detach($event->id);
        return redirect()->back()->with('success', 'Like quitado exitosamente.');
        }

        return redirect()->back()->with('error', 'No se pudo quitar el like.');
    }
}
