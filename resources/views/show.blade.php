@extends('layouts.web')
@section('content')
    <div class="grid grid-cols-3 gap-4">
        <div class="p-8 bg-gray-200 col-span-1">
            <ul class="flex flex-col">
                <li class="font-medium text-sm text-gray-400 uppercase mb-4">
                    Tallas Disponibles
                </li>
                @foreach($product->sizes as $size)
                    <li class="flex items-center text-gray-600 my-2">
                        {{$size->name}}
                    </li>
                @endforeach
            </ul>
            <ul class="flex flex-col">
                <li class="font-medium text-sm text-gray-400 uppercase mb-4">
                    Precio
                </li>
                <li class="flex items-center text-gray-600 my-2">
                    ${{number_format($product->price)}}
                </li>
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
            <div class="grid grid-cols-2 gap-4 my-8">
                @foreach($product->similar() as $product)
                    <div class="bg-white shadow-lg rounded-lg px-4 py-6 text-center">
                        <a href="{{route('show', $product->slug)}}">
                            <img src="{{ $product->image }}" class="rounded-md mb-2">
                            <h2 class="text-lg text-gray-600 truncate uppercase">{{$product->name}}</h2>
                            <h3 class="text-lg text-gray-500">{{$product->excerpt}}</h3>

                            <img
                                src="{{$product->user->avatar}}" class="rounded-full mx-auto h-16 w-16"
                            >
                        </a>
                    </div>
                @endforeach
            </div>

        </div>
    </div>

    <div class="text-center mt-4">
        <h1 class="test-3xl test-gray-700 mb-2 uppercase">
            Ultimos Productos
        </h1>
    </div>
    <livewire:product-list>

    </livewire:product-list>
@endsection
