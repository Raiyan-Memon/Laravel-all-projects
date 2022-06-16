@include('layouts.app')



<div class="container">

<form action="{{route('product.update',$data)}}" method="POST">

    @csrf
    @method('PATCH')
    @include('products.form')
</form>

</div>