<div class="h-screen flex items-center justify-center">

    <div>
        <h3>
            {{ $product['name'] }}

        </h3>
        <img src="{{ asset($product->image) }}" alt="" class="object-cover object-center overflow-hidden w-56"
            style="width: 40%; height: auto">
    </div>

</div>
