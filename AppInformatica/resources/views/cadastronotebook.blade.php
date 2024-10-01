@extends('layout')
@section('content')

   
         
    <div class="container mt-5">
        <h2 style="padding:45px; margin: 0 10%">Cadastro de Notebook</h2>
        <form method="post" action="{{route('cadastra-Notebook')}}" style="padding:45px; margin: 0 10%">
            @csrf
            <div class="form-group" style="padding:10px; margin: 0 3%">
                <label style="font-size:28px; font-weight: 600;" for="marca">Marca do Notebook:</label>
                <input type="text" class="form-control" id="marca" name="marca" placeholder="Digite a Marca" required>
            </div>
            <div class="form-group" style="padding:10px; margin: 0 3%">
                <label style="font-size:28px; font-weight: 600;" for="sistemaOperacional">Sistema Operacional do Notebook:</label>
                <input type="text" class="form-control" id="sistemaOperacional" name="sistemaOperacional" placeholder="Digite o Sistema Operacional" required>
            </div>
            <div class="form-group" style="padding:10px; margin: 0 3%">
                <label style="font-size:28px; font-weight: 600;" for="memoriaRam">Memória Ram Embutida no Notebook:</label>
                <input type="text" class="form-control" id="memoriaRam" name="memoriaRam" placeholder="Digite o Valor da Memória Ram" required>
            </div>
            <div class="form-group" style="padding:10px; margin: 0 3%">
                <label style="font-size:28px; font-weight: 600;"  for="armazenamento">Armazenamento Interno do Notebook:</label>
                <input type="text" class="form-control" id="armazenamento" name="armazenamento" placeholder="Digite o Valor do Armazenamento Interno" step="0.01" required>
            </div>
            <div class="container-button">
            <button type="submit" class="btn btn-primary" style="margin:22px; justify-content:center;position:absolute;left:43%; background-color:skyblue; font-weight:700;color:black;padding:20px;border-radius:16px">Cadastrar Notebook</button>
            </div>
        </form>
    </div>


@endsection