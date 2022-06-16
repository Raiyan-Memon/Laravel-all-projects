@include('layouts.app')

<div class="container">

<h1 class="text-center">Insert new data</h1>

<form action="{{route('student.store')}}" method="POST">

    @csrf
    @include('student.form');
</form>

</div>