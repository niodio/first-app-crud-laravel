@extends('products.layout')
@section('content')
<div class="row"></div>
<div class="col-lg-12 margin-tb">
    <div class="pull-left">
        <h2>Laravel App CRUD</h2>
    </div>
    <div class="pull-right">
        <a class="btn btn-success" href="{{ route('products.create') }}"> Criar um novo Produto</a>
    </div>
</div>
</div>
@if ($message = Session::get('sucesso'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Nome</th>
        <th>Detalhe</th>
        <th width="280px">Ação</th>
    </tr>
    @foreach ($products as $product)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->detail }}</td>
        <td>
            <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Mostrar</a>
                <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Editar</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Deletar</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
{!! $products->links() !!}
@endsection