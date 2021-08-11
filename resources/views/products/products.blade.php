@extends('layout.master')
@section('content')
@section('title','Products')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
}
th {
  text-align: left;
}
</style>
</head>
<body>

<h2>nametable</h2>

<table style="width:100%">
  <tr>
    <th>name</th>
    <th>des </th> 
    <th>price</th>
    <th>img</th>
    <th>serialNo</th> 
    <th>quantity</th> 
    <th>oprsh</th>
    
  </tr>
  @foreach($productsData as $data)
  <tr>
    <td>{{$data->name}}</td>
    <td>{{$data->des}}</td>
    <td>{{$data->price}}</td>
    <td>{{$data->img}}</td>
    <td>{{$data->serialNo}}</td>
    <td>{{$data->quantity}}</td>
   <td> 
   <button><a href="{{  url('DelProducts')  }}/{{  $data->id  }}">delete</a></button>
   <button><a href="{{  url('editProduct')  }}/{{  $data->id  }}">update</a></<button>
   </td>
  </tr>
 @endforeach
</table>
</body>
</html>

@endsection