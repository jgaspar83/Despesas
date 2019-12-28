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
    <a href="{{ route('despesa.create')}}" class="btn btn-primary">Adicionar nova despesa</a>
  <br /> <br />


  <table class="table table-striped">
    <thead>
        <tr>
          <td>Código</td>
          <td>Descrição</td>
          <td>Data</td>
          <td>Valor</td>
          <td colspan="2"></td>
        </tr>
    </thead>
    <tbody>
        @foreach($despesas as $despesa)
        <tr>
            <td>{{$despesa->id}}</td>
            <td>{{$despesa->descricao}}</td>
            <td>{{$despesa->data}}</td>
            <td>{{$despesa->valor}}</td>
            <td><a href="{{ route('despesa.edit',$despesa->id)}}" class="btn btn-primary">Editar</a></td>
            <td>
                <form action="{{ route('despesa.destroy', $despesa->id)}}" method="post">
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