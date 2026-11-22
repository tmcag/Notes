@extends('main')

@section('content')
    @include('components.header')

    <div
        class="w-full min-h-screen bg-linear-to-br from-emerald-50 via-teal-50 to-emerald-100 py-10 px-4 sm:px-6 lg:px-8">
        <div class="max-w-5xl mx-auto">

            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-8">
                <div>
                    <h1 class="text-2xl sm:text-3xl font-bold text-gray-800">Minhas Notas</h1>
                    <p class="text-sm text-gray-500 mt-1">Organize suas ideias, tarefas e anotações diárias</p>
                </div>

                <a
                    href="{{ route('new.note') }}"
                    class="inline-flex items-center justify-center gap-2 py-2.5 px-5 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold rounded-xl shadow-md shadow-emerald-600/20 hover:shadow-lg hover:shadow-emerald-600/30 transition duration-200"
                >
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                    </svg>

                    <span>Nova Nota</span>
                </a>
            </div>

            @if(count($notes) > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($notes as $note)
                        <x-card :data="$note" />
                    @endforeach
                </div>

            @else
                @include('components.empty')
            @endif
        </div>
    </div>
@endsection
