@extends('layouts.MainLayout')

@section('content')
    @include('components/Header')

    <!-- Empty State -->
    @if(count($notes) == 0)
        <section class="py-5">
            <div class="container text-center">

                <div class="p-5 bg-light rounded-4 shadow-sm">

                    <i class="bi bi-journal-text display-4 text-primary mb-3"></i>

                    <h4 class="fw-bold mb-2">Nenhuma anotação ainda</h4>

                    <p class="text-muted mb-4">
                        Você ainda não criou nenhuma nota. Comece agora e organize suas ideias de forma simples.
                    </p>

                    <a href="{{ route('new') }}" class="btn btn-primary btn-lg px-4">
                        <i class="bi bi-plus-circle me-2"></i>
                        Criar primeira anotação
                    </a>

                </div>

            </div>
        </section>
    @else
    <!-- Annotations List -->
    <section class="py-5">
        <div class="container">

            <div class="d-flex align-items-center justify-content-between mb-3">
                <h3 class="mb-4 fw-bold">Anotações</h3>

                <a href="{{ route('new') }}" class="btn align-items-center d-flex btn-primary btn-sm justify-content-center">
                    <i class="bi bi-plus-circle p-1"></i>
                    <span class="d-block p-1">Novo</span>
                </a>
            </div>

            <div class="row g-4">

                <!-- Card -->
                <div class="">
                    @foreach($notes as $note)
                    @include('components/Card')
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    @endif
@endsection
