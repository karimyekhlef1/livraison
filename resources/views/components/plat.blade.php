

<div class="card" style="width: 18rem;">
    @if (session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
  @endif
    <img class="card-img-top" src="/storage/images/{{$plat->photo}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{ $plat->nom_du_plat ?? 'example title'}}</h5>
          {{-- <h6>Type plat :<span class="font-weight-bold"> {{ $plat->type_plat }} </span> </h6> --}}
          <h6>Prix :<span class="font-weight-bold"> {{ $plat->prix }} (DZD)</span> </h6>
    
        <h3>Description:</h3>
        <p> {{ $plat->description }}</p>

        @auth
        @if (Route::current()->getName() == 'panier.list')
        <h5>Quantite: {{ $plat->pivot->quantite}}</h5>
        @else 
          <form action="{{ route('ajouter-plat-panier') }}" method="post">
            @csrf
            <input type="hidden"  name="plat" value="{{ $plat->id }}">
            <button type="submit">Ajouter au panier</button>
          </form>

        @endif
        @endauth
        </div>

    </div>