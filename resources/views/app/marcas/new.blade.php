@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Marcas') }}</div>

                <div class="card-body">
                    <form method="POST" class="dropzone" action="{{ url('app/marcas') }}">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="nomeMarca">Nome</label>
                                <input type="text" class="form-control" id="nomeMarca" placeholder="Digite o nome da marca">
                            </div>
                            <div class="form-group col-md-8">
                                <label for="nomePrevia">Subtitulo</label>
                                <input type="text" name="subtitulo" class="form-control" placeholder="Digite o subtitulo">
                            </div>
                        </div>
                        <div class="form-group ckeditor descricao col-md-12">
                            <label for="nomeDescricao">Descrição</label>
                            <textarea id="nomeDescricao" name="previa" class="textarea"></textarea>
                        </div>
                        <div class="col-md-12">
                            <div class="fallback">
                                <input name="file" type="file" multiple />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
