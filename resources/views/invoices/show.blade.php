@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="my-4">Detalhes da Fatura #{{ $invoice->id }}</h2>
    <p><strong>Valor:</strong> R$ {{ number_format($invoice->amount, 2, ',', '.') }}</p>
    <p><strong>Status:</strong> {{ ucfirst($invoice->status) }}</p>
    <p><strong>Endereço de Pagamento:</strong> {{ $invoice->address ?? 'Não fornecido' }}</p>
    <p><strong>TxID:</strong> {{ $invoice->txid ?? 'Não fornecido' }}</p>
    <a href="{{ route('invoices.index') }}" class="btn btn-primary">Voltar</a>
</div>
@endsection
