<?php

namespace App\Http\Controllers;

use App\Ticket;
use App\Queue;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class TicketsController extends Controller
{

    public function index()
    {
        $tickets = Ticket::All();
        return view('ticket.listAllTickets',[
            'tickets' => $tickets,
        ]);
    }
        
   
    public function show()
    {
        $ticket = new Ticket();
        $category = Category::all();
        return view('ticket.listAllTickets',[
            'category' => $category,
        ]);
        
    }

    public function create()
    {
        return view('ticket.createTicket');
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        $ticket = new Ticket();        
        $ticket->user = $user->id;
        $ticket->summary = $request->summary;
        $ticket->description = $request->description;
        $ticket->category = $request->category;
        $ticket->setor = $request->setor;        
        $ticket->save();

        $queue = new Queue();
        $queue->ticket = $ticket->id;
        $queue->priority = 2;
        $queue->status = 1;
        $queue->save();

        return redirect()->route('ticket.listAllTickets');
    }

   
}
