@extends ('layout.master')
@section('titel','products.editproducts')
@section('content')


{{-- form section--}}
<div class="form">

<h2> update Prodect  form</h2>

<form action="{{ url('upProduct')}}/{{ $edit->id  }}" method="POST">
@csrf
<input  type="text" name="pname" placeholder=" الرجاء ادحال الاسم" value="{{  $edit->name  }}" >
<input type="hidden" name ="psn" value ="P2020">
<br> <br>
<input  type="text" name="pdesc" placeholder="" value="{{  $edit->des   }}">
<br> <br> <br>
<input  type="number" name="pprice" placeholder=""  value="{{  $edit->price   }}">

<br> <br> <br>
<input  type="number" name="pquantity" placeholder=""  value="{{  $edit->quantity   }}">
<br> <br> <br>
<input  type="submit" value="submit" >
@endsection
</form>
</div>
