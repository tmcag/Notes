@extends('main')

@section('content')
    @include('components.header')

    <div class="w-full min-h-screen bg-linear-to-br from-emerald-50 via-teal-50 to-emerald-100 py-10 px-4 sm:px-6 lg:px-8">
        <div class="max-w-2xl mx-auto">

            <div class="mb-6">
                <a
                    href="{{ route('home') }}"
                    class="inline-flex items-center gap-2 text-sm font-medium text-emerald-700 hover:text-emerald-800 transition duration-200 mb-3"
                >
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>

                    <span>Voltar</span>
                </a>

                <h1 class="text-2xl sm:text-3xl font-bold text-gray-800">Editar Nota</h1>
                <p class="text-sm text-gray-500 mt-1">Preencha os campos abaixo para adicionar uma nova anotação</p>
            </div>

            <div class="bg-white/90 backdrop-blur-xs rounded-2xl shadow-lg shadow-emerald-900/5 border border-emerald-100 p-6 sm:p-8">
                <x-form :data="$note" action="{{ route('update.note') }}" method="POST" />
            </div>

        </div>
    </div>
@endsection
