@extends('layouts')

@section('content')
    <div class="container">
        <h1>Transaction History</h1>
        
        <table class="table">
            <thead>
                <tr>
                    <th>Item Name</th>
                    <th>Transaction Type</th>
                    <th>Quantity</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($transactions as $transaction)
                    <tr>
                        <td>{{ $transaction->item->name }}</td>
                        <td>{{ $transaction->transaction_type }}</td>
                        <td>{{ $transaction->quantity }}</td>
                        <td>{{ $transaction->created_at->format('M d, Y H:i:s') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
