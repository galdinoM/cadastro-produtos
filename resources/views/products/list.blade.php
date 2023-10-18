@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-8">
    <div class="max-w-4xl mx-auto bg-white p-4 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold mb-4">Catálogo de Produtos</h2>

        @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            {{ session('success') }}
        </div>
        @endif

        @if (session('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
            {{ session('error') }}
        </div>
        @endif

        <table class="min-w-full">
            <thead>
                <tr>
                    <th class="text-left px-4 py-2 border-b-2">Nome</th>
                    <th class="text-left px-4 py-2 border-b-2">Preço</th>
                    <th class="text-left px-4 py-2 border-b-2">Quantidade</th>
                    <th class="text-left px-4 py-2 border-b-2">Descrição</th>
                    <th class="text-left px-4 py-2 border-b-2">Data de Criação</th> <!-- Adicione esta coluna -->
                    <th class="text-left px-4 py-2 border-b-2">Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($products as $product)
                <tr>
                    <td class="px-4 py-2 border-b">{{ $product->nome }}</td>
                    <td class="px-4 py-2 border-b">R$ {{ number_format($product->preco, 2, ',', '.') }}</td>
                    <td class="px-4 py-2 border-b">{{ $product->quantidade }}</td>
                    <td class="px-4 py-2 border-b">{{ $product->descricao }}</td>
                    <td class="px-4 py-2 border-b">{{ $product->created_at->format('d/m/Y H:i:s') }}</td>
                    <td class="px-4 py-2 border-b">
                        <a href="{{ route('products.edit', $product->id) }}"
                            class="text-blue-600 hover:underline mr-2">Editar</a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Deletar</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="px-4 py-2 border-b">Nenhum produto cadastrado.</td>
                </tr>
                @endforelse
            </tbody>
        </table>

        <div class="mt-2">
            <a href="{{ route('products.create') }}"
                class="bg-green-500 text-white py-2 px-4 rounded-md block text-center hover:bg-green-600">Cadastrar Produto</a>
        </div>
    </div>
    <a href="{{ route('home') }}" class="text-blue-500 hover:underline">Voltar para a página inicial</a>

</div>
@endsection
