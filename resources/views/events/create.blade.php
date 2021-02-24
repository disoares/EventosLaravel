@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')

    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Crie o seu evento</h1>

        <form action="/events" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-2">
                <label for="image" class="form-label">Capa do Evento:</label>
                <input type="file" name="image" id="image" class="form-control-file">
            </div>
            <div class="form-group mb-2">
                <label for="title" class="form-label">Evento:</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Nome do Evento">
            </div>
            <div class="form-group mb-2">
                <label for="date" class="form-label">Data do evento:</label>
                <input type="date" name="date" id="date" class="form-control">
            </div>
            <div class="form-group mb-2">
                <label for="city" class="form-label">Cidade:</label>
                <input type="text" name="city" id="city" class="form-control" placeholder="Local do Evento">
            </div>
            <div class="form-group mb-2">
                <label for="private" class="form-label">O evento é privado?</label>
                <select name="private" id="private" class="form-select">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <div class="form-group mb-2">
                <label for="description" class="form-label">Descrição:</label>
                <textarea name="description" id="description" class="form-control"
                    placeholder="O que vai acontecer no evento?"></textarea>
            </div>
            <div class="form-group mb-2">
                <label for="items" class="form-label">itens de infraestrutura</label>
                <div class="form-check">
                    <input type="checkbox" name="items[]" value="Cadeiras" class="form-check-input"> Cadeiras
                </div>
                <div class="form-check">
                    <input type="checkbox" name="items[]" value="Palco" class="form-check-input"> Palco
                </div>
                <div class="form-check">
                    <input type="checkbox" name="items[]" value="Cerveja Grátis" class="form-check-input"> Cerveja Grátis
                </div>
                <div class="form-check">
                    <input type="checkbox" name="items[]" value="Open Food" class="form-check-input"> Open Food
                </div>
                <div class="form-check">
                    <input type="checkbox" name="items[]" value="Brindes" class="form-check-input"> Brindes
                </div>
            </div>
            <input type="submit" value="Criar Evento" class="btn btn-primary">
        </form>
    </div>

@endsection
