@include('layouts.app')

<div class="container">

<h1 class="text-center">Insert new data</h1>

<form action="{{route('master.store')}}" method="POST">

    @csrf
    @include('master.form');
</form>

</div>