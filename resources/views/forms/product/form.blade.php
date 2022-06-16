
@php
    if (! isset($product)) {
        $product = null ;
        $route = route('products.store');
    } else{
        $route = route('products.update',$product->id);
    }
    
@endphp

<form action="{{ $route }}" method="POST" enctype="multipart/form-data">
    @csrf 
    @if (isset($product))
        @method('PUT')
    @endif
    <div class="form-row">
        <div class="col form-group">
            <label for="">Name</label>
            <input class="form-control" type="text" name="title" value="{{ $product ? $product->title : '' }}" required>
        </div>    
    
        <div class="col form-group">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="2" required>{{ $product ? $product->description : '' }}</textarea>
        </div>
    </div>
    
    <div class="form-row">
        <div class="col form-group">
            <label for="exampleFormControlTextarea1">Category : </label>
            {{-- <input class="form-control" type="text" value="{{ $product ? $product->type_transaction : '' }}" name="type_transaction" required> --}}
            <select class="form-control" name="category" id="exampleFormControlSelect2">
                @foreach (\App\Models\Category::all() as $category)
                <option value=" {{ $category->id }} " @if ( $product and $product->category_id === $category->id ) selected @endif > {{ $category->name }} </option>
                @endforeach
            </select>
        </div>
        <div class="col form-group">
            <label for="exampleFormControlTextarea1">Price</label>
            <input class="form-control" type="number" name="price" value="{{ $product ? $product->price : '' }}" placeholder="price (DZD)" required>
        </div>
    </div>
    <div class="form-row">
        <div class="col form-group">
            <label for="exampleFormControlSelect2">State</label>
            <select class="form-control" name="state" id="exampleFormControlSelect2">
              <option value="bad" @if ( $product and $product->state === 'bad') selected @endif >bad</option>
              <option value="not_bad" @if ( $product and $product->state === 'not_bad') selected @endif >not bad</option>
              <option value="normal" @if ( $product and $product->state === 'normal') selected @endif >normal</option>
              <option value="good" @if ( $product and $product->state === 'good') selected @endif >good</option>
              <option value="very_good" @if ( $product and $product->state === 'very_good') selected @endif >very good</option>
            </select>
        </div>
        <div class="col form-group">
            <label for="exampleFormControlTextarea1">type_transaction</label>
            {{-- <input class="form-control" type="text" value="{{ $product ? $product->type_transaction : '' }}" name="type_transaction" required> --}}
            <select class="form-control" name="type_transaction" id="exampleFormControlSelect2">
                <option value="sale" @if ( $product and $product->type_transaction === 'sale') selected @endif >For Sale</option>
                <option value="rent" @if ( $product and $product->type_transaction === 'rent') selected @endif >For Rent</option>
                <option value="exchange" @if ( $product and $product->type_transaction === 'exchange') selected @endif >For Exchange</option>
            </select>
        </div>
    </div>
    
    <div class="form-row">
        <div class="col form-group">
            <label for="exampleFormControlTextarea1">quantity</label>
            <input class="form-control" type="number" value="{{ $product ? $product->quantity : '' }}" name="quantity" required>
        </div>
        <div class="col form-group">
            <label for="exampleFormControlTextarea1">address</label>
            <input class="form-control" type="text" value="{{ $product ? $product->address : '' }}" name="address" required>
        </div>
    </div>
    <div class="form-row">
        <div class="col form-group">
            <label for="exampleFormControlTextarea1">marque</label>
            <input class="form-control" type="text" value="{{ $product ? $product->marque : '' }}" name="marque" required>
        </div>
        <div class="col form-group">
            <label for="exampleFormControlTextarea1">method_payer</label>
            <input class="form-control" type="text" value="{{ $product ? $product->method_payer : '' }}" name="method_payer" required>
        </div>
    </div>

    <div class="form-row">
        <div class="col form-group">
            <label for="exampleFormControlFile1">Choose a photo for your product :</label>
            <input type="file" class="form-control-file" name="photo" id="" 
            @if ( ! $product ) required @endif>  
        </div>
        @auth
             @if (auth()->user()->is_admin)
                <input type="radio" id="contactChoice2"
                    name="is_valid" value="1"
                    @if ( $product and $product->is_valid )
                        checked
                    @endif
                    >
                <label for="contactChoice2">Validate</label>

                <input  type="radio" id="contactChoice3"
                        name="is_valid" value="0"
                    @if ( $product and ! $product->is_valid )
                        checked
                    @endif
                >
                <label for="contactChoice3">Not Validate</label>               
            @endif
        @endauth
       
    </div>

    <input class="btn btn-success" type="submit" 
    @if ( ! $product ) 
        value="Create" 
    @else 
        value="Update"
    @endif> 
</form>