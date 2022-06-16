@php
    $categories = \App\Models\Category::all()
@endphp

<div class="dropdown">
    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        {{ __('Categories') }}
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        @foreach ($categories as $category)
    <a class="dropdown-item" href="{{route('products.index', ['category' => $category->id])}}">
        {{ $category->name }}   {{ count($category->products) }}</a>
        @endforeach
    </div>
</div>