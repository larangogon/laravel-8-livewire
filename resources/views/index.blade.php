@extends('layouts.web')
@section('content')
    <div class="text-center">
        <h1 class="test-3xl test-gray-700 mb-2 uppercase">
            colfabri
        </h1>
        <h2 class="test-xl test-gray-600 mb-2 uppercase">
            Productos con excelente calidad
        </h2>
        <h3 class="test-lg test-gray-600 mb-2 uppercase">
            Tienda online con productos fabricados en Colombia
        </h3>
    </div>
    <livewire:product-list>

    </livewire:product-list>
@endsection
