<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Buyer;
use App\Models\Ticket;

class TransactionController extends Controller
{
    public function index()
    {

        $transactions = Transaction::with('buyer.dataBuyer', 'ticket.film')->get();
        return view('transaction.index', ['transactions' => $transactions]);
    }

    public function create()
    {
        $buyers = Buyer::with('dataBuyer')->get();
        $tickets = Ticket::with('film')->get();
        return view('transaction.add', ['buyers' => $buyers, 'ticket' => $tickets]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'buyers_id' => 'required|exists:buyers,id',
            'ticket_id' => 'required|exists:ticket,id',
            'date' => 'required|date',
            'seat_number' => 'required',
        ]);

        $transaction = new Transaction();
        $transaction->buyers_id = $validatedData['buyers_id'];
        $transaction->ticket_id = $validatedData['ticket_id'];
        $transaction->date = $validatedData['date'];
        $transaction->seat_number = $validatedData['seat_number'];
        $transaction->save();

        return redirect()->route('transactions.index')->with('success', 'Transaction created successfully.');
    }

    public function show($id)
    {
        $transaction = Transaction::with('buyer.dataBuyer', 'ticket.film')->findOrFail($id);
        return view('transaction.show', ['transaction' => $transaction]);
    }

    public function edit($id)
    {
        $transaction = Transaction::findOrFail($id);
        $buyers = Buyer::with('dataBuyer')->get();
        $tickets = Ticket::with('film')->get();
        return view('transaction.edit', ['transaction' => $transaction, 'buyers' => $buyers, 'ticket' => $tickets]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'date' => 'required|date',
            'seat_number' => 'required',
            'buyers_id' => 'required|exists:buyers,id',
            'ticket_id' => 'required|exists:ticket,id',
        ]);

        $transaction = Transaction::findOrFail($id);
        $transaction->update($request->all());

        return redirect('/transactions');
    }

    public function destroy($id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->delete();
        return redirect('/transactions');
    }
}
