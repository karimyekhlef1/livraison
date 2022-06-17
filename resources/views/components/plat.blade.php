

<div class="card" style="width: 18rem;">
    <img class="card-img-top" src="/storage/images/{{$plat->photo}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{ $plat->nom_du_plat ?? 'example title'}}</h5>
          {{-- <h6>Type plat :<span class="font-weight-bold"> {{ $plat->type_plat }} </span> </h6> --}}
          <h6>Prix :<span class="font-weight-bold"> {{ $plat->prix }} (DZD)</span> </h6>
    
        <h3>Description:</h3>
        <p> {{ $plat->description }}</p>
        </div>

    </div>