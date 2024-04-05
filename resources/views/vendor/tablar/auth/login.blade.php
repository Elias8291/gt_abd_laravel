@extends('tablar::auth.layout')

@section('title', 'Iniciar sesión')

@section('content')
<style>
    /* Mejoras generales en el estilo */
    body, html {
        margin: 0;
        padding: 0;
        background: #f0f2f5; /* Un fondo más neutral */
    }

    /* Estilo específico para la tarjeta */
    .card-md {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.05);
        transition: box-shadow 0.3s ease-in-out;
    }
    .card-md:hover {
        box-shadow: 0 15px 30px rgba(0,0,0,0.1);
    }

    /* Estilos para los botones */
    .btn-primary {
        background-image: linear-gradient(45deg, #667eea, #764ba2);
        border: 0;
        box-shadow: 0 4px 6px rgba(50,50,93,.11), 0 1px 3px rgba(0,0,0,.08);
        transition: all 0.3s ease;
    }
    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 7px 14px rgba(50,50,93,.1), 0 3px 6px rgba(0,0,0,.08);
    }

    /* Estilos para los inputs */
    .form-control {
        border: 1px solid #e3e3e3;
        transition: border-color 0.3s ease;
    }
    .form-control:focus {
        border-color: #667eea;
        box-shadow: 0 1px 3px rgba(102, 126, 234, 0.3);
    }

    /* Animación para enfocar la atención */
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }
    .container-tight {
        animation: fadeIn 1s ease-in-out;
    }

    /* Personalización del mensaje de error */
    .invalid-feedback {
        color: #ff3860;
    }
</style>

<div class="container container-tight py-4">
    <div class="text-center mb-1 mt-5">
        <a href="" class="navbar-brand navbar-brand-autodark">
            <img src="{{ asset(config('tablar.auth_logo.img.path', 'assets/logo.svg')) }}" height="36" alt="">
        </a>
    </div>
    <div class="card card-md">
        <div class="card-body">
            <h2 class="h2 text-center mb-4">Inicia sesión en tu cuenta</h2>
            <form action="{{ route('login') }}" method="post" autocomplete="off" novalidate>
                @csrf
                <div class="mb-3">
                    <label class="form-label">Dirección de correo electrónico</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                           placeholder="tu@correo.com" autocomplete="off">
                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-2">
                    <label class="form-label">
                        Contraseña
                        <span class="form-label-description">
                            <a href="{{ route('password.request') }}">He olvidado mi contraseña</a>
                        </span>
                    </label>
                    <div class="input-group input-group-flat">
                        <input type="password" name="password"
                               class="form-control @error('password') is-invalid @enderror"
                               placeholder="Tu contraseña" autocomplete="off">
                        @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-2">
                    <label class="form-check">
                        <input type="checkbox" class="form-check-input"/>
                        <span class="form-check-label">Recuérdame en este dispositivo</span>
                    </label>
                </div>
                <div class="form-footer">
                    <button type="submit" class="btn btn-primary w-100">Iniciar sesión</button>
                </div>
            </form>
        </div>
    </div>
    <div class="text-center text-muted mt-3">
        ¿No tienes cuenta aún? <a href="{{ route('register') }}" tabindex="-1">Regístrate</a>
    </div>
</div>
@endsection
