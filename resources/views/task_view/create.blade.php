@extends('task_view.app')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">
                            @if (isset($task) && $task->id > 0)
                                Modification de la tâche
                            @else
                                Création d'une tâche
                            @endif
                        </h4>
                    </div>
                    <div class="card-body">
                        <form
                            action="{{ isset($task) && $task->id > 0 ? route('task.update', $task->id) : route('task.store') }}"
                            method="post">
                            @csrf
                            @if (isset($task) && $task->id > 0)
                                @method('PUT')
                            @endif
                            <div class="mb-3">
                                <label for="title" class="form-label">Titre</label>
                                <input type="text" class="form-control border-primary" id="title" name="title"
                                    placeholder="Entrez le titre" value="{{ old('title', $task->title ?? '') }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control border-primary" id="description" name="description" rows="3"
                                    placeholder="Entrez la description">{{ old('description', $task->description ?? '') }}</textarea>
                            </div>
                            <div class="form-check mb-3">
                                <input type="hidden" name="status" value="0">
                                <input type="checkbox" class="form-check-input" id="status" name="status" value="1"
                                    {{ old('status', isset($task) && $task->status ? '1' : '0') == '1' ? 'checked' : '' }}>
                                <label for="status" class="form-check-label">Terminée ?</label>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">
                                    {{ isset($task) && $task->id > 0 ? 'Modifier' : 'Ajouter' }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
