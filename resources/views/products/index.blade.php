@extends('layout')
@section('title', 'Productos')
@section('content')
    <div class="products">
        @forelse ($products as $product)
            <div class="product">
                <h2>{{ $product->name}}</h2>
                <span>Precio: {{ $product->price}}</span><br>
                <span>Stock: {{ $product->stock}}</span><br>
            </div>
            <hr>
        @empty
            <span>No hay productos</span>
        @endforelse
    </div>
@endsection
