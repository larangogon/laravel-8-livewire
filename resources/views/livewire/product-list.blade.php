<div class="grid grid-cols-3 gap-4 mt-8">
    @foreach($products as $product)
        <div class="bg-white shadow-lg rounded-lg px-4 py-6 text-center">
            <a href="">
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