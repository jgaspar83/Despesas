<!-- create.blade.php -->

@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="container">

<div class="card uper">
  <div class="card-header">
    Adicionar Categoria
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('despesa.store') }}">
          <div class="form-group">
              @csrf
              <label for="descricao">Descrição :</label>
              <input type="text" class="form-control" name="descricao"/>
          </div>    
          <div class="form-group">
              <label for="data">Data :</label>
              <input type="date" class="form-control" name="data"/>
          </div>
          <div class="form-group">
              <label for="valor">Valor :</label>
              <input type="number" class="form-control" name="valor"/>
          </div>   

          <div class="form-group">
              <label for="categoria_id">Categoria :</label>
              <select class="form-control" name="categoria_id" >
              @foreach($categorias as $categoria)
                <option value="{{$categoria->id}}">{{$categoria->descricao}}</option>
              @endforeach
              </select>
          </div>   

          <button type="submit" class="btn btn-primary">Adicionar</button>
      </form>
  </div>
</div>
@endsection
</div>