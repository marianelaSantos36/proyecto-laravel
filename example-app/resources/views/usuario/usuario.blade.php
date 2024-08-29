@extends('body.cuerpo')
@section('title', 'Login')
@section('cuerpo')
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="row w-100">
        <div class="col-md-6 col-lg-4 mx-auto">
            <div class="card shadow-sm p-4">
                <h3 class="card-title text-center mb-4">Iniciar Sesión</h3>
                <form action="{{ route('login') }}" method="POST" id="loginForm">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Nombre de Usuario</label>
                        <input type="text" name="email" class="form-control" id="email" placeholder="Ingresa tu nombre de usuario" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Ingresa tu contraseña" required>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Recuérdame</label>
                    </div>
                    <div class="d-grid mb-3">
                        <button type="submit" class="btn btn-danger btn-block" style="background: linear-gradient(90deg, #460743 0%, #d376ce 100%); border-color: #d0dda2; padding: 0.75rem; font-size: 1.1rem; font-weight: bold; border-radius: 0.5rem; transition: background-color 0.3s ease;">
                            Iniciar Sesión
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const checkbox = document.getElementById('rememberMe');
    const rememberMe = localStorage.getItem('rememberMe');
    if (checkbox) {
        checkbox.checked = rememberMe === 'true';
    }
});

document.getElementById('loginForm').addEventListener('submit', function() {
    const checkbox = document.getElementById('rememberMe');
    if (checkbox) {
        localStorage.setItem('rememberMe', checkbox.checked ? 'true' : 'false');
    }
});
</script>

@endsection
