<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Bonus; // ou Bonificacao, se for esse o nome


use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
{
    $user = Auth::user();

    $balance = $user->balance->amount ?? 0;

    $children = $user->children()->with('children')->get();
    $tree = view('partials.tree', compact('children'))->render();

    $statusConta = $user->status ?? 'INATIVO';

    $ultimoBonus = $user->bonus()->latest()->first()?->valor ?? 0;

    $totalBonus = $user->bonus()->sum('valor');

    $saquesPendentes = $user->withdrawals()->where('status', 'pendente')->count();

    $saquesPagos = $user->withdrawals()->where('status', 'pago')->sum('amount');

    $diretosAtivos = User::where('sponsor_id', $user->id)
    ->where('status', 'ativo')->count();

    $diretosPendentes = User::where('sponsor_id', $user->id)
    ->where('status', 'pendente')->count();

    // Faturas
    $faturasPendentes = $user->invoices()->where('status', 'pending')->count();
    $faturasPendentesLista  = $user->invoices()->where('status', 'pending')->get();

    // Fase atual e total de fases
    $faseAtual = $user->current_phase ?? 'Phase 1';
    $contasNasFases = $user->userPhases()->count();

    // Posições na matriz
    $activeMatrixPositions = $user->matriz()->where('active', true)->count();

    $celulasAtivas = $user->matriz()->where('active', true)->count();

    return view('dashboard', compact(
        'balance',
        'tree',
        'statusConta',
        'ultimoBonus',
        'totalBonus',
        'saquesPendentes',
        'saquesPagos',
        'diretosAtivos',
        'diretosPendentes',
        'faturasPendentes',
        'faseAtual',
        'contasNasFases',
        'celulasAtivas',
        'faturasPendentesLista'
    ));
}

    

}
