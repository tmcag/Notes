<div class="w-full bg-white rounded-2xl shadow-xl border border-emerald-100/80 p-12 text-center mt-8">
    <div class="inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-emerald-100 text-emerald-600 mb-5">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
        </svg>
    </div>

    <h3 class="text-xl font-bold text-gray-800 mb-2">Nenhuma nota encontrada</h3>

    <p class="text-sm text-gray-500 max-w-md mx-auto mb-6">
        Você ainda não criou nenhuma anotação. Que tal começar registrando sua primeira ideia agora mesmo?
    </p>

    <a
        href="{{ route('new.note') }}"
        class="inline-flex items-center justify-center gap-2 py-2.5 px-6 bg-emerald-600 hover:bg-emerald-700 active:bg-emerald-800 text-white font-semibold rounded-xl shadow-md shadow-emerald-600/20 hover:shadow-lg hover:shadow-emerald-600/30 transition duration-200"
    >
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
        </svg>

        <span>Criar minha primeira nota</span>
    </a>
</div>
