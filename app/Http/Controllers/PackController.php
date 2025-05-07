<?php

namespace App\Http\Controllers;

use App\Models\Packs;
use Illuminate\Http\Request;
use App\Models\Invoice; // Adicione essa linha no topo do seu controlador

class PackController extends Controller
{
    // Exibe os packs disponíveis
    public function index()
    {
        $packs = Packs::where('active', true)->get();
        //dd($packs);  // Adicione isso para verificar se os packs estão sendo carregados corretamente.
        return view('packs.index', compact('packs'));
    }

    public function purchase(Request $request)
    {
        $user = auth()->user(); // Pega o usuário logado
        $pack = Packs::find($request->input('pack_id')); // Busca o pack selecionado
    
        if ($pack) {
            // Cria a fatura para o usuário com o user_id
            Invoice::create([
                'user_id' => $user->id,  // Agora isso é permitido com o $fillable
                'amount' => $pack->price,
                'status' => 'pending', // Status da fatura
                'crypto_type' => null, // Tipo de pagamento, se necessário
            ]);
    
            return redirect()->route('dashboard')->with('success', 'Fatura gerada com sucesso!');
        }
    
        return back()->with('error', 'Pack não encontrado!');
    }
}

