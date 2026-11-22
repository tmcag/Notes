@props([
    'data' => null
])

<div
    class="bg-white rounded-2xl shadow-sm hover:shadow-xl border border-emerald-100/80 p-6 flex flex-col justify-between transition duration-200 group">
    <div>
        <div class="flex items-start justify-between gap-3 mb-3">
            <h2 class="text-lg font-bold text-gray-800 group-hover:text-emerald-700 transition line-clamp-1">
                {{ $data['title'] }}
            </h2>

            <div class="flex items-center gap-1 shrink-0">

                <a href="{{ route('edit.note', [ 'id' => $data['id']]) }}" title="Editar"
                   class="p-1.5 text-gray-400 hover:text-emerald-600 hover:bg-emerald-50 rounded-lg transition">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                    </svg>
                </a>

                <form
                    action="{{ route('delete.note', ['id' => $data['id']]) }}"
                    method="POST"
                    onsubmit="return confirm('Tem certeza que deseja excluir esta nota?')"
                    class="inline-flex"
                >
                    @csrf
                    @method('DELETE')

                    <button
                        type="submit"
                        title="Excluir"
                        class="p-1.5 text-gray-400 hover:text-red-500 hover:bg-red-50 rounded-lg transition cursor-pointer"
                    >
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                        </svg>
                    </button>
                </form>
            </div>
        </div>

        <p class="text-sm text-gray-600 leading-relaxed line-clamp-4 mb-6">
            {{ $data['body'] }}
        </p>
    </div>

    <div class="pt-4 border-t border-gray-100 flex flex-col gap-1 text-xs text-gray-400">
        @if($data['created_at'])
            <div class="flex items-center justify-between">
                <span>Criado em</span>
                <span class="font-medium text-gray-500">{{ formatDateOnScreen($data['created_at'])  }}</span>
            </div>
        @endif

        @if($data['updated_at'])
            <div class="flex items-center justify-between">
                <span>Atualizado em:</span>
                <span class="font-medium text-emerald-600">{{ formatDateOnScreen($data['updated_at']) }}</span>
            </div>
        @endif
    </div>
</div>
