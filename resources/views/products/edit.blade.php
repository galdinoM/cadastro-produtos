@extends('layouts.app')


@section('content')
<div class="container mx-auto mt-8">
    <div class="max-w-md mx-auto bg-white p-4 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold mb-4">Editar Produto</h2>

        <form method="POST" action="{{ route('products.update', $product->id) }}">
            @csrf
            @method('POST')

            <div class="mb-4">
                <label for="nome" class="block text-gray-700">Nome do Produto</label>
                <input type="text" name="nome" id="nome" class="w-full p-2 border rounded-md" value="{{ $product->nome }}" required>
            </div>

            <div class="mb-4">
                <label for="descricao" class="block text-gray-700">Descrição do Produto</label>
                <textarea name="descricao" id="descricao" class="w-full p-2 border rounded-md" rows="4">{{ $product->descricao }}</textarea>
            </div>

            <div class="mb-4">
                <label for="preco" class="block text-gray-700">Preço do Produto</label>
                <input type="number" name="preco" id="preco" class="w-full p-2 border rounded-md" value="{{ $product->preco }}" required>
            </div>

            <div class="mb-4">
                <label for="quantidade" class="block text-gray-700">Quantidade em Estoque</label>
                <input type="number" name="quantidade" id="quantidade" class="w-full p-2 border rounded-md" value="{{ $product->quantidade }}" required>
            </div>

            <button type="submit" class="bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600">Atualizar</button>
        </form>
    </div>
    <a href="{{ route('products.index') }}" class="text-blue-500 hover:underline">Voltar para a página de catálogo</a>

</div>
@endsection

