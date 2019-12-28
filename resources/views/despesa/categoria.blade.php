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

  <table class="table table-striped">
    <thead>
        <tr>
          <td>Código</td>
          <td>Descrição</td>
          <td>Data</td>
          <td>Valor</td>
        </tr>
    </thead>
    <tbody>
        @foreach($despesas as $despesa)
        <tr>
            <td>{{$despesa->id}}</td>
            <td>{{$despesa->descricao}}</td>
            <td>{{$despesa->data}}</td>
            <td>{{$despesa->valor}}</td>            
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection
</div>