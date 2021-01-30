<div class="grid grid-cols-3 gap-4 mt-8">
    @foreach($products as $product)
        <x-card-product :product="$product"></x-card-product>
    @endforeach
</div>
