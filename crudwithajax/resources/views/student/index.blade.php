@extends('layouts.app')


@section('content')
{{"index"}}

<a href="{{route('student.create')}}"> <button class="btn btn-primary"> Create</button></a>

@endsection