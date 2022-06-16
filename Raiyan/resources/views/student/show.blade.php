@include('layouts.app')



<div class="container">
    <h1 class="text-center">Showing the selected data</h1>
{{-- <h5><b>id</b> : {{$data->id}}</h5> --}}

<h5><b>Name</b> : {{$data->name}}</h5>
<h5><b>Description</b> : {{$data->description}}</h5>
<h5><b>Gender</b> : {{$data->gender}}</h5>
<h5><b>Hobby</b> : {{$data->hobby}}</h5>
<h5><b>State</b> : {{$data->state}}</h5>

</div>