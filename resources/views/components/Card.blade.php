<div class="card h-40 border mb-3">
    <div class="card-body d-flex flex-column">

        <!-- Título -->
        <h5 class="card-title fw-bold mb-2">{{ $note['title'] }}</h5>

        <!-- Datas -->
        <small class="text-muted">
            Criado em: {{ $note['created_at'] }} <br>
            Atualizado em: {{ $note['updated_at'] }}
        </small>

        <hr>

        <!-- Descrição -->
        <p class="card-text ">
            {{ $note['text'] }}
        </p>

        <!-- Ações -->
        <div class="d-flex justify-content-end gap-2 mt-3">
            <button class="btn btn-sm btn-outline-primary">
                <i class="bi bi-pencil"></i> Editar
            </button>
            <button class="btn btn-sm btn-outline-danger">
                <i class="bi bi-trash"></i> Excluir
            </button>
        </div>

    </div>
</div>
