@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card card-success">
      <div class="card-body referral-link" style="padding: 5px 5px 5px 10px;">
        <div class="row">
          <div class="col-md-9" style="line-height: 38px;" align="center">
            <input type="text" readonly="readonly" style="text-align:center; background-color:#333;" value="https://seudominio.com/auth/register/usuario_exemplo"
                   id="link-partner" class="form-control">
          </div>
          <div class="col-md-3 col-sm-3" align="center">
            <button onclick="copyLink()" class="btn btn-success btn-block">Copiar Link</button>
            <script>
              function copyLink() {
                var copyText = document.getElementById("link-partner");
                copyText.select();
                document.execCommand("copy");
              }
            </script>
          </div>
        </div>
       
      </div>
    </div>
  </div>
</div>

<!-- Dashboard Ecommerce Starts -->
<section id="dashboard-ecommerce">
  <div class="row">
    <!-- Os cards já estão otimizados visualmente e com ícones apropriados -->
    <!-- Reorganização sugerida: saldo, status, bônus, saques, diretos, faturas, fases, células -->

    <!-- Saldo -->
    <div class="col-lg-3 col-sm-6 col-12">
      <div class="card">
        <div class="card-header">
          <div>
            <h2 class="fw-bolder mb-0">R$ 0,00</h2>
            <p class="card-text">Saldo</p>
          </div>
          <div class="avatar bg-light-success p-50 m-0">
            <div class="avatar-content"> <i data-feather="dollar-sign" class="font-medium-5"></i> </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Status -->
    <div class="col-lg-3 col-sm-6 col-12">
      <div class="card">
        <div class="card-header">
          <div>
            <h2 class="fw-bolder mb-0">ATIVO</h2>
            <p class="card-text">Status da Conta</p>
          </div>
          <div class="avatar bg-light-success p-50 m-0">
            <div class="avatar-content"> <i data-feather="check" class="font-medium-5"></i> </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Último Bônus -->
    <div class="col-lg-3 col-sm-6 col-12">
      <div class="card">
        <div class="card-header">
          <div>
            <h2 class="fw-bolder mb-0">R$ 50,00</h2>
            <p class="card-text">Último Bônus</p>
          </div>
          <div class="avatar bg-light-success p-50 m-0">
            <div class="avatar-content"> <i data-feather="gift" class="font-medium-5"></i> </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Total em Bônus -->
    <div class="col-lg-3 col-sm-6 col-12">
      <div class="card">
        <div class="card-header">
          <div>
            <h2 class="fw-bolder mb-0">R$ 800,00</h2>
            <p class="card-text">Total em Bônus</p>
          </div>
          <div class="avatar bg-light-info p-50 m-0">
            <div class="avatar-content"> <i data-feather="dollar-sign" class="font-medium-5"></i> </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Saques Pendentes -->
    <div class="col-lg-3 col-sm-6 col-12">
      <div class="card">
        <div class="card-header">
          <div>
            <h2 class="fw-bolder mb-0">2</h2>
            <p class="card-text">Saques Pendentes</p>
          </div>
          <div class="avatar bg-light-danger p-50 m-0">
            <div class="avatar-content"> <i data-feather="clock" class="font-medium-5"></i> </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Saques Pagos -->
    <div class="col-lg-3 col-sm-6 col-12">
      <div class="card">
        <div class="card-header">
          <div>
            <h2 class="fw-bolder mb-0">R$ 300,00</h2>
            <p class="card-text">Saques Pagos</p>
          </div>
          <div class="avatar bg-light-info p-50 m-0">
            <div class="avatar-content"> <i data-feather="dollar-sign" class="font-medium-5"></i> </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Diretos Ativos -->
    <div class="col-lg-3 col-sm-6 col-12">
      <div class="card">
        <div class="card-header">
          <div>
            <h2 class="fw-bolder mb-0">0</h2>
            <p class="card-text">Diretos Ativos</p>
          </div>
          <div class="avatar bg-light-success p-50 m-0">
            <div class="avatar-content"> <i data-feather="user-check" class="font-medium-5"></i> </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Diretos Pendentes -->
    <div class="col-lg-3 col-sm-6 col-12">
      <div class="card">
        <div class="card-header">
          <div>
            <h2 class="fw-bolder mb-0">0</h2>
            <p class="card-text">Diretos Pendentes</p>
          </div>
          <div class="avatar bg-light-danger p-50 m-0">
            <div class="avatar-content"> <i data-feather="user-x" class="font-medium-5"></i> </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Faturas Pendentes -->
    <div class="col-lg-3 col-sm-6 col-12">
      <div class="card">
        <div class="card-header">
          <div>
            <h2 class="fw-bolder mb-0">1</h2>
            <p class="card-text">Faturas Pendentes</p>
          </div>
          <div class="avatar bg-light-warning p-50 m-0">
            <div class="avatar-content"> <i data-feather="file-text" class="font-medium-5"></i> </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Contas nas Fases -->
    <div class="col-lg-3 col-sm-6 col-12">
      <div class="card">
        <div class="card-header">
          <div>
            <h2 class="fw-bolder mb-0">3</h2>
            <p class="card-text">Contas nas Fases</p>
          </div>
          <div class="avatar bg-light-info p-50 m-0">
            <div class="avatar-content"> <i data-feather="grid" class="font-medium-5"></i> </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Fase Atual -->
    <div class="col-lg-3 col-sm-6 col-12">
      <div class="card">
        <div class="card-header">
          <div>
            <h2 class="fw-bolder mb-0">Fase 2 de 3</h2>
            <p class="card-text">Fase Atual</p>
          </div>
          <div class="avatar bg-light-primary p-50 m-0">
            <div class="avatar-content"> <i data-feather="layers" class="font-medium-5"></i> </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Células Ativas -->
    <div class="col-lg-3 col-sm-6 col-12">
      <div class="card">
        <div class="card-header">
          <div>
            <h2 class="fw-bolder mb-0">5</h2>
            <p class="card-text">Células Ativas</p>
          </div>
          <div class="avatar bg-light-primary p-50 m-0">
            <div class="avatar-content"> <i data-feather="aperture" class="font-medium-5"></i> </div>
          </div>
        </div>
      </div>
    </div>


<!-- Lista de Faturas Pendentes -->
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Faturas Pendentes</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Valor</th>
                  <th>Data</th>
                  <th>Ações</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>#001</td>
                  <td>R$ 100,00</td>
                  <td>05/05/2025</td>
                  <td>
                    <form action="/faturas/pagar-usdt/001" method="POST" style="display:inline-block">
                      <button type="submit" class="btn btn-success btn-sm">Pagar em USDT</button>
                    </form>
                    <form action="/faturas/excluir/001" method="POST" style="display:inline-block" onsubmit="return confirm('Deseja realmente excluir esta fatura?')">
                      <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>#002</td>
                  <td>R$ 150,00</td>
                  <td>06/05/2025</td>
                  <td>
                    <form action="/faturas/pagar-usdt/002" method="POST" style="display:inline-block">
                      <button type="submit" class="btn btn-success btn-sm">Pagar em USDT</button>
                    </form>
                    <form action="/faturas/excluir/002" method="POST" style="display:inline-block" onsubmit="return confirm('Deseja realmente excluir esta fatura?')">
                      <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                    </form>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Dashboard Ecommerce ends -->

</div>
</div>
</div>
<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>


@endsection
