@props([
    'action',
    'method',
    'data'
])

<form action="{{ $action }}" method="{{ $method }}" class="space-y-6">
    @csrf

    <input type="hidden" id="id" name="id" value="{{ $data['id'] ?? '' }}" />

    <div>
        <label for="title" class="block text-sm font-semibold text-gray-700 mb-2">
            Título
        </label>

        <input
            type="text"
            name="title"
            id="title"
            value="{{ old('title', $data['title'] ?? '') }}"
            placeholder="Ex: Ideias para o projeto..."
            class="w-full px-4 py-2.5 rounded-xl border border-gray-200 text-gray-800 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-emerald-500/20 focus:border-emerald-500 transition duration-200 @error('title') border-red-500 @enderror"
        >

        @error('title')
        <p class="mt-1.5 text-xs text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="body" class="block text-sm font-semibold text-gray-700 mb-2">
            Descrição
        </label>

        <textarea
            name="body"
            id="body"
            rows="6"
            placeholder="Escreva os detalhes da sua nota aqui..."
            class="w-full px-4 py-3 rounded-xl border border-gray-200 text-gray-800 focus:outline-none focus:ring-2 focus:ring-emerald-500/20 transition duration-200 resize-y @error('body') @enderror"
        >{{ old('body', $data['body'] ?? '') }}</textarea>

        @error('body')
        <p class="mt-1.5 text-xs text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div class="flex flex-col-reverse sm:flex-row sm:items-center sm:justify-end gap-3 pt-4 border-t border-gray-100">
        <a
            href="{{ route('home') }}"
            class="inline-flex items-center justify-center py-2.5 px-5 bg-white hover:bg-gray-50 text-gray-700 font-semibold rounded-xl border border-gray-200 transition duration-200"
        >
            Cancelar
        </a>

        <button
            type="submit"
            class="inline-flex items-center justify-center gap-2 py-2.5 px-6 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold rounded-xl shadow-md shadow-emerald-600/20 hover:shadow-lg hover:shadow-emerald-600/30 transition duration-200 cursor-pointer"
        >
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
            </svg>

            <span>Salvar Nota</span>
        </button>
    </div>
</form>
