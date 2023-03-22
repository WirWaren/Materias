@extends('layouts.app')
@section('content')
<div class="container">

<form action="{{ url('/datos') }}" method="post">
@csrf
@include('datos.form');


</form>
</div>
@endsection