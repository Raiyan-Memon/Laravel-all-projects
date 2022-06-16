@include('layouts.app')



<div class="container">

<form action="{{route('student.update',$data)}}" method="POST">

    @csrf
    @method('PATCH')
    @include('student.form')
</form>

</div>