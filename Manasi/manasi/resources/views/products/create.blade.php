@include('layouts.app')

<div class="container">

<h1 class="text-center">Insert new data</h1>

{{-- <form action="{{route('product.store')}}" method="POST"> --}}

    {!!Form::open([
        'route' => 'product.store',
        'method' => 'POST'
    ])!!}

    @csrf
    @include('products.form');
{{-- </form> --}}
{!!Form::close()!!}

</div>