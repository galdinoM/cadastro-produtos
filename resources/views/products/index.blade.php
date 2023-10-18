@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-8">
    <div class="max-w-md mx-auto">
        <div class="bg-white p-4 rounded-lg shadow-md text-center">
            <h2 class="text-2xl font-semibold mb-4">Produto cadastrado com sucesso!</h2>

            <p>Seu produto foi cadastrado com sucesso. Você pode visualizar a lista de produtos ou adicionar outro produto.</p>

            <div class="mt-4">
                <a href="{{ route('products.index') }}" class="bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600 mx-2">Lista de Produtos</a>
                <a href="{{ route('products.create') }}" class="bg-green-500 text-white p-2 rounded-md hover:bg-green-600 mx-2">Cadastrar Outro Produto</a>
            </div>
        </div>
    </div>
</div>
@endsection
