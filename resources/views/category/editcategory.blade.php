@extends ('layout.master')
@section('titel','category.categoryCereate')
@section('content')

{{-- form section--}}
<div class="form">

<h2> update Prodect  form</h2>

<form action="{{ url('upcategory')}}/{{ $edit->id  }}" method="POST">
@csrf
<input  type="text" name="name" placeholder=" الرجاء ادحال الاسم" value="{{  $edit->name  }}" >

<br> <br> <br>
<input  type="submit" value="submit" >
@endsection
</form>
</div>
