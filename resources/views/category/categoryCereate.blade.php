@extends ('layout.master')
@section('titel','category.categoryCereate')
@section('content')


{{-- form section--}}
<div class="form">

<h2> category create form</h2>

<form action="{{ url('categoryStort')}}" method="POST">
@csrf
<input  type="text" name="name" placeholder="" >

<br> <br> <br>
<input  type="submit" value="submit" >
@endsection
</form>
</div>
