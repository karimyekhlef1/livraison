@php
    $products = auth()->user()->products
@endphp
<div>
@if (count($products) > 0)
<select class="form-control mb-3" name="my_product" aria-labelledby="dropdownMenuButton">
    @foreach ($products as $product)
    <option value="{{ $product->id }}">{{ $product->title }} </option>
    @endforeach
</select>

<form action=" {{ route('products.order.exchange', ['product' => $product]) }} " method="GET">
    <button class="btn btn-success" > Order </button>
</form>

@else 
    <p>You cant complete the proccess because you dont have any product</p>
    @include('components.no_products')
    
@endif

</div>