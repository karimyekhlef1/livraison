

<div class="card" style="width: 18rem;">
    <img class="card-img-top" src="/storage/images/{{$restaurant->photo}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{ $restaurant->title ?? 'example title'}}</h5>
          <h6>Type restaurant :<span class="font-weight-bold"> {{ $restaurant->type_restaurant }} </span> </h6>
          {{-- <h6>Price :<span class="font-weight-bold"> {{ $restaurant->price }} (DZD)</span> </h6> --}}
    
        <a href="{{ route('restaurants.show', ['restaurant' => $restaurant->id]) }}" 
           class="btn btn-primary">Details</a>
        </div>
    </div>
