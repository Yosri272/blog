@extends('layout.master')
@section('content')
@section('title','bank')
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
    <th>oprsh</th>
    
  </tr>
  @foreach($bankData as $data)
  <tr>
    <td>{{$data->name}}</td>
    <td>
    <button><a href="{{  url('Delbank')  }}/{{  $data->id  }}">delete</a></button>
   <button><a href="{{  url('editbank')  }}/{{  $data->id  }}">update</a></<button>
    </td>
  </tr>
 @endforeach
</table>
</body>
</html>

@endsection