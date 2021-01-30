@extends('layouts.web')
@section('content')
    <div class="grid grid-cols-3 gap-4">
        <div class="p-8 bg-gray-200 col-span-1">
            <ul class="flex flex-col">
                <li class="font-medium text-sm text-gray-400 uppercase mb-4">
                    Contenido
                </li>
                ----
            </ul>
        </div>
        <div class="text-gray-700 col-span-2">
            <img src="{{ $product->image }}">
            <h2 class="text-4xl">{{$product->name}}</h2>
            <p>{{$product->description}}</p>
            <div class="flex mt-3">
                <img src="{{$product->user->avatar}}" class="h-10 w-10 rounded-full mr-2">
            </div>
            <div>
                <p class="text-gray-500 text-sm">
                    {{$product->user->name}}
                </p>
                <p class="text-gray-300 text-sx">
                    {{$product->created_at->diffForHumans()}}
                </p>
            </div>
        </div>
    </div>

    <div class="text-center mt-4">
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
