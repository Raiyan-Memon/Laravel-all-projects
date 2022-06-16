@include('layouts.app')



<div class="container">
    <h1 class="text-center">Showing the selected data</h1>
{{-- <h5><b>id</b> : {{$data->id}}</h5> --}}

<h5><b>First Name</b> : {{$data->first_name}}</h5>
<h5><b>Last Name</b> : {{$data->last_name}}</h5>
<h5><b>Description</b> : {{$data->description}}</h5>
<h5><b>Hobby</b> : {{$data->hobby}}</h5>
<h5><b>Product Type</b> : {{$data->product_type}}</h5>
<h5><b>Price</b> : {{$data->price}}</h5>
<h5><b>Quantity</b> : {{$data->quantity}}</h5>
<h5><b>Total</b> : {{$data->total}}</h5>

</div>