<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
      // Método para listar todas as faturas
      public function index()
      {
          $invoices = Invoice::all(); // Pega todas as faturas
          return view('invoices.index', compact('invoices')); // Retorna para a view 'invoices.index'
      }
  
      // Método para visualizar os detalhes de uma fatura específica
      public function show($id)
      {
          $invoice = Invoice::findOrFail($id); // Encontra a fatura pelo ID
          return view('invoices.show', compact('invoice')); // Retorna a view com os detalhes
      }
  
      // Método para criar uma nova fatura (opcional, se necessário)
      public function create()
      {
          return view('invoices.create'); // Retorna a view para criar fatura
      }
  
      // Método para salvar uma nova fatura
      public function store(Request $request)
      {
          // Validação
          $request->validate([
              'user_id' => 'required|exists:users,id', // Garante que o 'user_id' existe na tabela users
              'amount' => 'required|numeric',
              'status' => 'required|in:pending,paid,expired',
          ]);
  
          // Cria a nova fatura
          Invoice::create($request->all());
  
          return redirect()->route('invoices.index')->with('success', 'Fatura criada com sucesso!');
      }
}
