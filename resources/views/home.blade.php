@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-8">
    <div class="max-w-md mx-auto bg-white p-4 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold mb-4">Bem-vindo</h2>

        <div class="mb-4">
            <a href="{{ route('products.index') }}" class="bg-blue-500 text-white p-2 rounded-md block text-center hover:bg-blue-600 mb-2">Catálogo de Produtos</a>

            <a href="{{ route('products.create') }}" class="bg-green-500 text-white p-2 rounded-md block text-center hover:bg-green-600">Cadastrar Produto</a>
        </div>
    </div>
</div>
@endsection
