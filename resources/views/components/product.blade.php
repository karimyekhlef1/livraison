

<div class="card" style="width: 18rem;">
<img class="card-img-top" src="/storage/images/{{$product->photo}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{ $product->title ?? 'example title'}}</h5>
      <h6>Type Transaction :<span class="font-weight-bold"> {{ $product->type_transaction }} </span> </h6>
      <h6>Price :<span class="font-weight-bold"> {{ $product->price }} (DZD)</span> </h6>

    <a href="{{ route('products.show', ['product' => $product->id]) }}" 
       class="btn btn-primary">Details</a>
    </div>
</div>