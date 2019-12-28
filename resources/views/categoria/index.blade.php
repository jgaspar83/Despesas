<!-- index.blade.php -->

@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif

  

  <div class="container">
    <a href="{{ route('categoria.create')}}" class="btn btn-primary">Adicionar nova categoria</a>
  <br /> <br />


  <table class="table table-striped">
    <thead>
        <tr>
          <td>Código</td>
          <td>Descrição</td>
          <td colspan="2"></td>
        </tr>
    </thead>
    <tbody>
        @foreach($categorias as $categoria)
        <tr>
            <td>{{$categoria->id}}</td>
            <td>{{$categoria->descricao}}</td>
            <td><a href="{{ route('categoria.edit',$categoria->id)}}" class="btn btn-primary">Editar</a></td>
            <td>
                <form action="{{ route('categoria.destroy', $categoria->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Remover</button>                  
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection
</div>