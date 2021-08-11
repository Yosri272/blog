@extends ('layout.master')
@section('titel','products.productsCereate')
@section('content')


{{-- form section--}}
<div class="form">

<h2> Prodect create form</h2>

<form action="{{ url('ProductStort')}}" method="POST">
@csrf
<input  type="text" name="pname" placeholder=" الرجاء ادحال الاسم" >
<input type="hidden" name ="psn" value ="P2020">
<br> <br>
<input  type="text" name="pdesc" placeholder="" >
<br> <br> <br>
<input  type="number" name="pprice" placeholder="" >
<br> <br> <br>
<input  type="number" name="pquantity" placeholder="" >
<br> <br> <br>
protecte img
<br> <br>
<input  type="text" name="pimg" >
<br> <br> <br>
<input  type="submit" value="submit" >
@endsection
</form>
</div>
