@extends('layout')
@section('title', 'Productos')
@section('content')
    <div class="products">
        @forelse ($products as $product)
            <div class="product">
                <span>Nombre: {{ $product->name}}</span>
                <span>Precio: {{ $product->price}}</span>
                <span>Stock: {{ $product->stock}}</span>
            </div>
        @empty
            <span>No hay productos</span>
        @endforelse
    </div>
@endsection
