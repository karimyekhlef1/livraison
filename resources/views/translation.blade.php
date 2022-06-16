@php
    use App\Models\Mobidal\Translation as T;   
@endphp

<h1>The hello world {{ App::getLocale() }}</h1>
<h1>  
    {{-- {{ T::get(["en"=>'search', "fr"=>'rechercher']) }} --}}

    {{ T::getLocale('search') }}
</h1>

<h1>  
    {{-- {{ T::get(["en"=>'search', "fr"=>'rechercher']) }} --}}

    {{ T::__('search') }}
    {{ T::__('search') }}
</h1>