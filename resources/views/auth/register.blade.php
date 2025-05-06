<x-guest-layout>
    <a href="#" class="brand-logo">
        <p>
            <img class="round" src="{{ asset('uploads/logos.png') }}" alt="avatar" height="40" width="40">
        </p>
    </a>

    <h4 class="card-title mb-1 ">{{ $system_name ?? 'DollarMillon20' }}</h4>
    <div class="mb-1">
    <label for="ref" class="form-label">Indicado por</label>
    <h3 class="form-label">{{ old('ref', $ref) }}</h3>
</div>

    <form class="auth-login-form mt-2 text-start" method="POST" action="{{ route('register') }}">
    <input type="hidden" class="form-control text-start" name="ref" id="ref" value="{{ old('ref', $ref) }}" readonly />
        @csrf

        <div class="mb-1 text-start">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control text-start" name="name" id="name" value="{{ old('name') }}" required autofocus placeholder="Nome completo" tabindex="1" />
        </div>

        <div class="mb-1 text-start">
            <label for="username" class="form-label">Usuário</label>
            <input type="text" class="form-control text-start" name="username" id="username" value="{{ old('username') }}" required placeholder="Usuário" tabindex="2" />
        </div>

        <div class="mb-1 text-start">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control text-start" name="email" id="email" value="{{ old('email') }}" required placeholder="Email" tabindex="3" />
        </div>

        <div class="mb-1 text-start">
            <label for="password" class="form-label">Senha</label>
            <div class="input-group input-group-merge form-password-toggle">
                <input type="password" class="form-control form-control-merge text-start" name="password" id="password" required placeholder="••••••••" tabindex="4" />
                <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
            </div>
        </div>

        <div class="mb-1 text-start">
            <label for="password_confirmation" class="form-label">Confirmar Senha</label>
            <div class="input-group input-group-merge form-password-toggle">
                <input type="password" class="form-control form-control-merge text-start" name="password_confirmation" id="password_confirmation" required placeholder="••••••••" tabindex="5" />
                <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
            </div>
        </div>

        <button type="submit" class="btn btn-success w-100 mt-2" tabindex="6">Criar Conta</button>
    </form>

    <p class="mt-2">
        <span>Já possui conta?</span>
        <a href="{{ route('login') }}"> <span>Entrar</span> </a>
    </p>
</x-guest-layout>
