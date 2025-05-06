<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // Buscar saldo da tabela balances (caso não exista, assume 0)
        $balance = $user->balance->amount ?? 0;

        // Carrega filhos e netos para montar a árvore
        $children = $user->children()->with('children')->get();

        // Função auxiliar para montar a árvore 3x2
        $tree = view('partials.tree', compact('children'))->render();

        return view('dashboard', compact('balance', 'tree'));
    }

    private function gerarArvore($user)
    {
        $filhosDiretos = $user->children()->take(3)->get();
        $html = '<ul>';

        foreach ($filhosDiretos as $filho) {
            $html .= '<li>' . $filho->name;

            $filhosDoFilho = $filho->children()->take(3)->get();
            if ($filhosDoFilho->count()) {
                $html .= '<ul>';
                foreach ($filhosDoFilho as $neto) {
                    $html .= '<li>' . $neto->name . '</li>';
                }
                $html .= '</ul>';
            }

            $html .= '</li>';
        }

        $html .= '</ul>';
        return $html;
    }

}
