@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="my-4">Escolha o seu Plano</h2>
    <div class="row">
        @foreach ($packs as $pack)
            <div class="col-md-4 mb-3">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <h4>{{ $pack->name }}</h4>
                        <p>{{ $pack->description }}</p>
                        <p><strong>R$ {{ number_format($pack->price, 2, ',', '.') }}</strong></p>

                        <!-- Botão de Compra com Confirmação -->
                        <form action="{{ route('packs.purchase') }}" method="POST" class="mt-2" id="form-buy-{{ $pack->id }}">
                            @csrf
                            <input type="hidden" name="pack_id" value="{{ $pack->id }}">
                            <button type="button" class="btn btn-success btn-lg" onclick="confirmPurchase('{{ $pack->name }}', '{{ $pack->phase }}', '{{ $pack->id }}')">Comprar</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<script>
    // Função de confirmação de compra
    function confirmPurchase(packName, phaseName, packId) {
        Swal.fire({
            title: 'Tem certeza que deseja comprar?',
            text: 'Você está prestes a comprar o ' + packName + ' para a fase ' + phaseName + '.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sim, comprar!',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                // Se confirmar, envia o formulário para gerar a fatura
                document.querySelector('form#form-buy-' + packId).submit();
            } else {
                // Caso o usuário cancele
                Swal.fire('Compra cancelada!', '', 'info');
            }
        });
    }
</script>
@endsection
