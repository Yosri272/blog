@extends ('layout.master')
@section('titel','bank.bankCereate')
@section('content')


{{-- form section--}}
<div class="form">

<h2> bank create form</h2>

<form action="{{ url('bankStort')}}" method="POST">
@csrf
<input  type="text" name="name" placeholder="" >

<br> <br> <br>
<input  type="submit" value="submit" >
@endsection
</form>
</div>
