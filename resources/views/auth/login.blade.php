<x-guest-layout>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<a href="#" class="brand-logo">
    <p>
        <img class="round" src="{{ asset('uploads/logos.png') }}" alt="avatar" height="40" width="40">
    </p>
    
</a>

<h4 class="card-title mb-1">{{ $system_name ?? 'DollarMillon20' }}</h4>
<p class="card-text mb-2">Faça login para continuar</p>
@if(session('error'))
<script>
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: '{{ session('error') }}',
        confirmButtonText: 'OK',
        customClass: {
            confirmButton: 'btn btn-danger'
        },
        buttonsStyling: false
    });
</script>
@endif

@if(session('success'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Sucesso!',
        text: '{{ session('success') }}',
        confirmButtonText: 'OK',
        customClass: {
            confirmButton: 'btn btn-success'
        },
        buttonsStyling: false
    });
</script>
@endif
<form class="auth-login-form mt-2" method="POST" action="{{ route('login') }}">
    @csrf
    <div class="mb-1 text-start" >
        
        <label for="username" class="form-label">Usuário</label>
        <input type="text" class="form-control" name="username" id="username" value="{{ old('username') }}" required autofocus placeholder="Usuário" tabindex="1" />
    </div>

    <div class="mb-1">
        <div class="d-flex justify-content-between">
            <label class="form-label" for="password">Senha</label>
            <a href="{{ route('password.request') }}">
                <small>Esqueceu Senha?</small>
            </a>
        </div>
        <div class="input-group input-group-merge form-password-toggle">
            <input type="password" class="form-control form-control-merge" name="password" id="password" required placeholder="••••••••••" tabindex="2" />
            <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
        </div>
    </div>

    <div class="mb-1">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }} tabindex="3">
            <label class="form-check-label" for="remember"> Lembre-me </label>
        </div>
    </div>

    <button type="submit" class="btn btn-success w-100" tabindex="4">Login</button>
</form>


</x-guest-layout>
