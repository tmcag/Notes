@extends('layouts.MainLayout')

@section('content')

<div class="container mx-auto mt-5">
    <div>
        <h2>Notes</h2>
        <p class="lead">Faça login na sua conta para continuar</p>
    </div>

    <form action="/login" method="POST">
        @csrf

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" oninput="onChangeInput(event)">

            <div class="d-block mt-2 warning">
                @error('email')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Senha</label>
            <input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}" oninput="onChangeInput(event)">

            <div class="d-block mt-2 warning">
                @error('password')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Login</button>

        <p class="mt-5 text-center text-muted small">© {{ date('Y') }} Notes - Todos os direitos reservados</p>
    </form>

    @if (session('authError'))
        <div class="alert alert-danger mt-3">
            {{ session('authError') }}
        </div>
    @endif
</div>

@endsection

<script>
    function onChangeInput(event) {
        const warning = event.target.parentElement.querySelector('.warning');

        if (warning) warning.innerHTML = '';
    }
</script>
